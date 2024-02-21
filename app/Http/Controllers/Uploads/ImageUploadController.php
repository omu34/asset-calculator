<?php

namespace App\Http\Controllers\Uploads;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageUploadController extends Controller
// {
//     /**
//      * Show the form for uploading multiple images.
//      */
//     public function showUploadForm()
//     {
//         return view('upload.index');
//     }

//     /**
//      * Store the uploaded images.
//      */


//     public function upload(Request $request)
//     {
//         // Validate the request data
//         $request->validate([
//             'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:500', // max 2MB
//         ]);

//         // Store each uploaded image in the storage/app/public directory
//         $imagePaths = [];
//         foreach ($request->file('images') as $image) {
//             $imagePaths[] = $image->store('public/images');
//         }

//         // Save the image paths in the database
//         foreach ($imagePaths as $imagePath) {
//             Image::create([
//                 'path' => $imagePath,
//             ]);
//         }

//         return back()->with('success', 'Images uploaded successfully.');
//     }

// }









// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Image;

// class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showUploadForm()
    {
        return view('upload.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        Image::create([
            'name' => $imageName,
            'path' => '/images/' . $imageName,
        ]);

        return back()->with('success', 'Image uploaded successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
