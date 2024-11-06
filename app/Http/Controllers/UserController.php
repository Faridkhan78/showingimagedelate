<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function uploadImages(Request $request)
    {
        // Validate that files are uploaded
        $data =  $request->validate([
            'name' => 'required',
            'image_path.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Set validation rules for each image
        ]);
        $uploadedImages = []; // Array to hold paths of uploaded images

        if ($request->hasFile('image_path')) {
            foreach ($request->file('image_path') as $image) {
                $filePath = $image->store('uploads', 'public');
                $uploadedImages[] = $filePath;
            }
        }
        $img1 = implode(',', $uploadedImages);

        $user = User::create([
            'name' => $request->name,
            'image_path' => $img1,

        ]);
        //$post = Post::create($data);

        if ($user) {
            return redirect()->route('viewimages')->with('success', 'User created successfully.');

            return back()->with('success', 'Images uploaded successfully.')->with('image_path', $uploadedImages);
            // return redirect()->route('postviewall');
        }
    }

    public function viewImages()
    {
        // Fetch all photos (or filter by user if required)
        $user = User::find(7);

        // Split the comma-separated paths and delete each image
        if (isset($user->image_path)) {
            $imagePaths = explode(',', $user->image_path);
        }
        foreach ($imagePaths ?? [] as $path) {
            Storage::disk('public')->delete($path);
        }

        $users = User::all();
        return view('viewimages', compact('users'));
    }

    public function deleteUser($id)
    {
        // Fetch all photos (or filter by user if required)
        $user = User::find($id);

        // Split the comma-separated paths and delete each image
        if (isset($user->image_path)) {
            $imagePaths = explode(',', $user->image_path);
        }

        foreach ($imagePaths as $path) {
            Storage::disk('public')->delete($path);
        }
        $user->delete();
        return redirect()->back()->with('success', 'Record and associated images deleted successfully.');
    }

    public function updatePage($id)
    {
        $user = User::find($id);
        return view('', compact('user'));
    }
    // public function updateUser(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required',
    //         'mobile' => 'required'
    //     ]);
    //     $user = User::where(['id' => $request['id']])->update([

    //         'username' => $request['username'],
    //         'email' => $request['email'],
    //         'password' => $request['password'],
    //         'mobile' => $request['mobile']
    //     ]);
    //     if ($user) {
    //         return redirect()->route('viewuser');
    //     }
    // }
    public function deleteImage($id, Request $request)
    {
        $photo = User::findOrFail($id);

        // Get the image path from the request
        $imagePath = $request->input('image_path');

        // Convert stored image paths to an array
        $arrImg = explode(',', $photo->image_path);

        // Check if the image exists in the array
        if (($key = array_search($imagePath, $arrImg)) !== false) {
            unset($arrImg[$key]); // Remove the image path from array

            // Delete the image file from storage
            Storage::disk('public')->delete($imagePath);

            // Update the `image_path` field in the database
            $photo->image_path = implode(',', $arrImg);
            $photo->save();

            return response()->json(['success' => 'Image deleted successfully']);
        }

        return response()->json(['error' => 'Image not found'], 404);
    }
}





