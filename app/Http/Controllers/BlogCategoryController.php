<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $blogCategories = BlogCategory::all();
            return view('adminpanel.blogs.categories.index', compact('blogCategories'));
        } catch (\Throwable $th) {
            Log::error('Blog Category Index Failed', ['error' => $th->getMessage()]);
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
            return view('adminpanel.blogs.categories.create');
        } catch (\Throwable $th) {
            Log::error('Blog Category Create Failed', ['error' => $th->getMessage()]);
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
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:blog_categories,slug',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            Log::error('Blog Category Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $blogCategory = new BlogCategory();
            $blogCategory->name = $request->name;
            $blogCategory->slug = $request->slug;
            $blogCategory->description = $request->description;
            $blogCategory->save();

            DB::commit();
            return redirect()->route('blog-categories.index')->with('success', 'Blog Category Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Blog Category Store Failed', ['error' => $th->getMessage()]);
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
            $blogCategory = BlogCategory::findOrFail($id);
            return view('adminpanel.blogs.categories.edit', compact('blogCategory'));
        } catch (\Throwable $th) {
            Log::error('Blog Category Edit Failed', ['error' => $th->getMessage()]);
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
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:blog_categories,slug,' . $id,
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $blogCategory = BlogCategory::findOrFail($id);
            $blogCategory->name = $request->name;
            $blogCategory->slug = $request->slug;
            $blogCategory->description = $request->description;
            $blogCategory->save();

            return redirect()->route('blog-categories.index')->with('success', 'Blog Categories Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Blog Categories Update Failed', ['error' => $th->getMessage()]);
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
            $blogCategory = BlogCategory::findOrFail($id);
            $blogCategory->delete();
            return redirect()->back()->with('success', 'Blog Category Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Blog Category Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        try {
            $blogCategory = BlogCategory::findOrFail($id);
            $message = $blogCategory->is_active == 'active' ? 'Blog Category Deactivated Successfully' : 'Blog Category Activated Successfully';
            if ($blogCategory->is_active == 'active') {
                $blogCategory->is_active = 'inactive';
                $blogCategory->save();
            } else {
                $blogCategory->is_active = 'active';
                $blogCategory->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Blog Category Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
