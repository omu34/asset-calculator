<?php

namespace App\Http\Controllers\Uploads;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageUploadController extends Controller
{
    /**
     * Show the form for uploading multiple images.
     */
    public function showUploadForm()
    {
        return view('upload.index');
    }

    /**
     * Store the uploaded images.
     */


    public function upload(Request $request)
    {
        // Validate the request data
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:500', // max 2MB
        ]);

        // Store each uploaded image in the storage/app/public directory
        $imagePaths = [];
        foreach ($request->file('images') as $image) {
            $imagePaths[] = $image->store('public/images');
        }

        // Save the image paths in the database
        foreach ($imagePaths as $imagePath) {
            Image::create([
                'path' => $imagePath,
            ]);
        }

        return back()->with('success', 'Images uploaded successfully.');
    }

}





// class ImageUploadController extends Controller
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



//         // $imagePaths = [];

//         // // Check if files were uploaded
//         // if ($request->hasFile('images')) {
//         //     // Iterate over each uploaded file
//         //     foreach ($request->file('images') as $image) {
//         //         // Store the image and get its path
//         //         $imagePaths[] = $image->store('public/images');
//         //     }
//         // } else {
//         //     // Handle the case where no files were uploaded
//         //     // You can return an error message or perform other actions
//         //     // For example:
//         //     return back()->with('error', 'No images were uploaded.');
//         // }


//         // Save the image paths in the database
//         foreach ($imagePaths as $imagePath) {
//             Image::create([
//                 'path' => $imagePath,
//             ]);
//         }

//         return back()->with('success', 'Images uploaded successfully.');
//     }
// }
