<?php

namespace App\Http\Controllers;

use App\Http\adminpanel;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\GalleryCategory;
use App\Models\galleryImage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{

    // function EventGallery() 
    // {
    //     $data = galleryImage::with('category')->get();

    //     // Group data by the 'year' from the category relation
    //     $dataGroupedByYear = $data->groupBy(function ($item) {
    //         return $item->category->year;
    //     });
    //     // dd($dataGroupedByYear);

    //     // Pass grouped data to the view
    //     return view('website.Events-gallery', compact('dataGroupedByYear'));
    // }

    

    // public function EventGalleryNew()
    // {
    //     // Fetch images with their associated category
    //     $data = galleryImage::with('category')->get();
    
    //     // Group images by year and sort by year in ascending order
    //     $dataGroupedByYear = $data->groupBy(function ($item) {
    //         return $item->category->year;
    //     })->sortKeys();
    
    //     // Group images by category name
    //     $dataGroupedByCategory = $data->groupBy(function ($item) {
    //         return $item->category->cat_name;
    //     });
    
    //     // Group images by category type
    //     $dataGroupedByCategoryType = $data->groupBy(function ($item) {
    //         return $item->category->cat_type;
    //     });
    
    //     return view('website.Events-gallery-new', compact('dataGroupedByYear', 'dataGroupedByCategory', 'dataGroupedByCategoryType'));
    // }
    public function EventGalleryNew()
    {
        $parentCategories = GalleryCategory::with('subCategories')
            ->whereNull('parent_category_id')
            ->get();
    
        return view('website.pages.event-gallery', compact('parentCategories'));
    }
    public function getSubCategories($id)
    {
        $subcategories = GalleryCategory::where('parent_category_id', $id)->get();
    
        return response()->json($subcategories);
    }
    public function galleryByCategory($id)
    {
        $images = galleryImage::with('category')
            ->where('gallery_cat_id', $id)
            ->latest()
            ->get();
    
        return response()->json($images);
    }

    public function index()
    {
        $data = GalleryCategory::with('parentCategory')->get();
        $parentCategories = GalleryCategory::where('parent_category_id', null)->get();
        return view("adminpanel.gallery_cat",["data"=>$data, "parentCategories"=>$parentCategories]);
    }

    function storegallerycat(Request $request) {
        GalleryCategory::create([
            'cat_name' => $request->cat_name,
            'slug' => Str::slug($request->cat_name),
            'parent_category_id' => $request->parent_category_id ?? null,
            'cat_type' => 'others',
            'year' => now()->year,
        ]);

        return redirect()->route('gallery_cat');
    }

    public function editgallerycat($id){
        $gallerycat = GalleryCategory::findOrFail($id);
        $parentCategories = GalleryCategory::where('parent_category_id', null)->get();
        // dd($gallerycat);
        return view('adminpanel.gallery_cat_edit',compact('gallerycat','parentCategories'));
    }// End Method 

    function updategallerycat(Request $request, $id) 
    {
        // dd($request->all(), $id);
        GalleryCategory::findOrFail($id)->update([
            'cat_name' => $request->cat_name,
            'slug' => Str::slug($request->cat_name),
            'parent_category_id' => $request->parent_category_id ?? null,
        ]);
        return redirect()->route('gallery_cat');
    }

    function deletegallerycat($id) 
    {

        GalleryCategory::findOrFail($id)->delete();

        return redirect()->back(); 
    }

    // Gallery Image work

    function GalleryImg()
    {
        $data = galleryImage::with('category')->get();
        $courses = Courses::get();
        // dd($data);
        $galleryCat = GalleryCategory::with('images')->get();
        return view('adminpanel.gallery_img', compact('data', 'galleryCat', 'courses'));
    }

    public function storegalleryImg(Request $request)
    {
        // Ensure at least one file is uploaded
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();

                $file->move(public_path('gallery_images'), $imageName);

                GalleryImage::create([
                    'gallery_cat_id' => $request->gallery_cat_id,
                    'image' => $imageName,
                    'type' => $request->type,
                    'event_name' => $request->event_name,
                    'course_name' => $request->course_name,
                    'company_name' => $request->company_name,
                ]);
            }
        }

        return redirect()->back();
    }
    
    public function editgalleryimg($id){
        $galleryimg = GalleryImage::findOrFail($id);
        $galleryCat = GalleryCategory::get();
        $courses = Courses::get();
        return view('adminpanel.gallery_img_edit',compact('galleryimg','galleryCat','courses'));
    }

    function updategalleryimg(Request $request, $id) 
    {
        // dd($request->all(), $id);
        GalleryImage::findOrFail($id)->update([
            'gallery_cat_id' => $request->gallery_cat_id,
            'type' => $request->type,
            'event_name' => $request->event_name,
            'course_name' => $request->course_name,
            'company_name' => $request->company_name,
        ]);
        return redirect()->route('gallery_img');
    }

    public function deletegalleryImg($id) 
    {
        // Find the image record by ID
        $image = GalleryImage::findOrFail($id);

        // Define the path to the image
        $imagePath = public_path('gallery_images/' . $image->image);

        // Check if the file exists and delete it
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the record from the database
        $image->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }


}
