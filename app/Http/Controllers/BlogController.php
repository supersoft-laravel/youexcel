<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $blogs = Blog::with('category','user')->withCount('blogComments')->get();
            return view('adminpanel.blogs.index', compact('blogs'));
        } catch (\Throwable $th) {
            Log::error('Blogs Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $blogCategories = BlogCategory::where('is_active', 'active')->get();
            $courses = Courses::where('is_active', '1')->get();
            // dd($courses);
            return view('adminpanel.blogs.create', compact('blogCategories', 'courses'));
        } catch (\Throwable $th) {
            Log::error('Blog Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug',
            // 'blog_category_id' => 'required|exists:blog_categories,id',
            // 'course_id' => 'required|exists:courses,id',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'is_footer' => 'nullable|in:0,1',
            'footer_title' => 'nullable|string|max:255',
            'footer_description' => 'nullable|string',
            'footer_btn_txt' => 'nullable|string|max:255',
            'footer_btn_link' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Blog Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $blog = new Blog();
            $blog->user_id = auth()->id();
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            // $blog->blog_category_id = $request->blog_category_id;
            // $blog->course_id = $request->course_id;
            $blog->content = $request->content;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keywords = $request->meta_keywords;
            $blog->is_footer = $request->is_footer && $request->is_footer == '1'? '1' : '0';
            $blog->footer_title = $request->footer_title;
            $blog->footer_description = $request->footer_description;
            $blog->footer_btn_txt = $request->footer_btn_txt;
            $blog->footer_btn_link = $request->footer_btn_link;

            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/blogs';
                $Image->move(public_path($Image_path), $Image_name);
                $blog->main_image = $Image_path . "/" . $Image_name;
            }

            $blog->save();

            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'Blog Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Blog Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $blogCategories = BlogCategory::where('is_active', 'active')->get();
            $blog = Blog::findOrFail($id);
            $courses = Courses::where('is_active', '1')->get();
            return view('adminpanel.blogs.edit', compact('blogCategories', 'blog', 'courses'));
        } catch (\Throwable $th) {
            Log::error('Blog Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug,'.$id,
            // 'blog_category_id' => 'required|exists:blog_categories,id',
            // 'course_id' => 'required|exists:courses,id',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'is_footer' => 'nullable|in:0,1',
            'footer_title' => 'nullable|string|max:255',
            'footer_description' => 'nullable|string',
            'footer_btn_txt' => 'nullable|string|max:255',
            'footer_btn_link' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            DB::beginTransaction();
            $blog = Blog::findOrFail($id);
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            // $blog->blog_category_id = $request->blog_category_id;
            // $blog->course_id = $request->course_id;
            $blog->content = $request->content;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keywords = $request->meta_keywords;
            $blog->is_footer = $request->is_footer && $request->is_footer == '1'? '1' : '0';
            $blog->footer_title = $request->footer_title;
            $blog->footer_description = $request->footer_description;
            $blog->footer_btn_txt = $request->footer_btn_txt;
            $blog->footer_btn_link = $request->footer_btn_link;

            if ($request->hasFile('main_image')) {
                if (isset($blog->main_image) && File::exists(public_path($blog->main_image))) {
                    File::delete(public_path($blog->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/blogs';
                $Image->move(public_path($Image_path), $Image_name);
                $blog->main_image = $Image_path . "/" . $Image_name;
            }

            $blog->save();
            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'Blog Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Blog Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            if (isset($blog->main_image) && File::exists(public_path($blog->main_image))) {
                File::delete(public_path($blog->main_image));
            }
            $blog->delete();
            return redirect()->back()->with('success', 'Blog Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Blog Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $message = $blog->is_active == 'active' ? 'Blog Deactivated Successfully' : 'Blog Activated Successfully';
            if ($blog->is_active == 'active') {
                $blog->is_active = 'inactive';
                $blog->save();
            } else {
                $blog->is_active = 'active';
                $blog->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Blog Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function WebBlog($blogSlug = null)
    {
        try {
            $blogsQuery = Blog::with('user')->where('is_active', 'active');

            if (request()->filled('search')) {
                $search = request('search');
                $blogsQuery->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%");
                });
            }

            if ($blogSlug) {
                $isBlogDetail = 1;

                $blog = Blog::with('blogComments')->withCount('blogComments')->where('slug', $blogSlug)
                    ->where('is_active', 'active')
                    ->firstOrFail();

                $nextBlog = Blog::where('id', '>', $blog->id)
                    ->where('is_active', 'active')
                    ->orderBy('id')
                    ->first();

                if (!$nextBlog) {
                    $nextBlog = Blog::where('is_active', 'active')->first();
                }

                $previousBlog = Blog::where('id', '<', $blog->id)
                    ->where('is_active', 'active')
                    ->orderBy('id', 'desc')
                    ->first();

                if (!$previousBlog) {
                    $previousBlog = Blog::where('is_active', 'active')->orderBy('id', 'desc')->first();
                }

                $relatedBlogs = Blog::with('user')
                    ->where('id', '!=', $blog->id)
                    ->where('is_active', 'active')
                    ->latest()
                    ->take(3)
                    ->get();

                $blogComments = BlogComment::where('blog_id', $blog->id)->where('is_active', 'active')->latest()->get();

                return view('website.pages.blogs.details', compact('blog', 'nextBlog', 'previousBlog', 'relatedBlogs', 'blogComments', 'isBlogDetail'));
            }
            $isBlogDetail = 0;

            $blogs = $blogsQuery->latest()->paginate(3)->withQueryString();

            $relatedBlogs = Blog::with('user')
                ->where('is_active', 'active')
                ->latest()
                ->take(3)
                ->get();

            return view('website.pages.blogs.index', compact('blogs','relatedBlogs', 'isBlogDetail'));
        } catch (\Throwable $th) {
            Log::error('Error loading blog details page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the blogs page.');
        }
    }
    
    public function submitComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'blog_id' => 'required|exists:blogs,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            DB::beginTransaction();

            $blogComment = new BlogComment();
            $blogComment->blog_id = $request->blog_id;
            $blogComment->name = $request->name;
            $blogComment->email = $request->email;
            $blogComment->message = $request->message;
            $blogComment->save();

            DB::commit();
            return redirect()->back()->with('success', 'Your comment has been submitted successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Log::error('Error submitting comment: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while submitting the contact form. Please try again later.');
        }
    }
    
    
    public function blogComments($id)
    {
        try {
            $blog = Blog::where('id', $id)->first();
            $blogComments = BlogComment::where('blog_id', $id)->get();
            return view('adminpanel.blogs.comments.index', compact('blog', 'blogComments'));
        } catch (\Throwable $th) {
            Log::error('Blog Comments Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function blogCommentCreate($id)
    {
        try {
            $blog = Blog::where('id', $id)->first();
            return view('adminpanel.blogs.comments.create', compact('blog'));
        } catch (\Throwable $th) {
            Log::error('Blog Comment Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function blogCommentStore(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::error('Blog Comment Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $blogComment = new BlogComment();
            $blogComment->blog_id = $id;
            $blogComment->name = $request->name;
            $blogComment->email = $request->email;
            $blogComment->message = $request->message;
            $blogComment->save();

            DB::commit();
            return redirect()->route('blogs.comments.index', $id)->with('success', 'Blog Comment Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Blog Comment Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function blogCommentEdit($id)
    {
        try {
            $comment = BlogComment::where('id', $id)->first();
            return view('adminpanel.blogs.comments.edit', compact('comment'));
        } catch (\Throwable $th) {
            Log::error('Blog Comment Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function blogCommentUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            Log::error('Blog Comment Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $blogComment = BlogComment::findOrFail($id);
            $blogComment->name = $request->name;
            $blogComment->email = $request->email;
            $blogComment->message = $request->message;
            $blogComment->save();

            DB::commit();
            return redirect()->route('blogs.comments.index', $blogComment->blog_id)->with('success', 'Blog Comment Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Blog Comment Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function blogCommentDelete($id)
    {
        try {
            $comment = BlogComment::findOrFail($id);
            $blogId = $comment->blog_id;
            $comment->delete();
            return redirect()->route('blogs.comments.index', $blogId)->with('success', 'Blog Comment Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Blog Comment Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function blogCommentUpdateStatus(string $id)
    {
        try {
            $comment = BlogComment::findOrFail($id);
            $message = $comment->is_active == 'active' ? 'Blog Comment Deactivated Successfully' : 'Blog Comment Activated Successfully';
            if ($comment->is_active == 'active') {
                $comment->is_active = 'inactive';
                $comment->save();
            } else {
                $comment->is_active = 'active';
                $comment->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Blog Comment Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
