<?php

namespace App\Http\Controllers;
use App\Models\ImageUpload; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
// use Flasher\Prime\Storage\Storage;
use Illuminate\Http\Request;

use function Flasher\Toastr\Prime\toastr;

class ImageUploadController extends Controller
{
    public function create()
    {
        return view('components.admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg'], // max 4MB
        ]);

        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $filepath = 'storage/gallery/' . $filename;

        //storage/app/public/images/' . $filename;
        $image->storeAs('gallery', $filename, 'public');

        ImageUpload::create([
            'filename' => $filename,
            'title' => $request->input('title'),
            'filepath' => $filepath,
        ]);

        toastr('Image uploaded successfully.', 'success');

        return redirect()->route('admin.gallery.create');
    }

    public function index()
    {
        $images = ImageUpload::all();

        return view('components.admin.gallery.index', compact('images'));
    }

    public function destroy(ImageUpload $image)
    {
        try {
                // Delete the image file from storage
            if (file_exists(public_path($image->filepath))) {
                unlink(public_path($image->filepath));
            }

            // Delete the image file 
            Storage::disk('public')->delete('gallery/' . $image->filename);

            // Delete the database record
            $image->delete();

            toastr('Image deleted successfully.', 'success');
        } catch (\Exception $e) {
            toastr('Error deleting image: ' . $e->getMessage(), 'error');
        }

        return redirect()->route('admin.gallery.index');
    }

    public function show(ImageUpload $image)
    {
        return view('components.admin.gallery.update', compact('image'));
    }

    public function update(Request $request, ImageUpload $image)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg'], // max 4MB
        ]);

        $image->title = $request->input('title');

        if ($request->hasFile('image')) {
            // Delete old image file
            if (file_exists(public_path($image->filepath))) {
                unlink(public_path($image->filepath));
            }
            Storage::disk('public')->delete('gallery/' . $image->filename);

            // Store new image file
            $newImage = $request->file('image');
            $filename = time() . '_' . $newImage->getClientOriginalName();
            $filepath = 'storage/gallery/' . $filename;
            $newImage->storeAs('gallery', $filename, 'public');

            // Update image record with new filename and filepath
            $image->filename = $filename;
            $image->filepath = $filepath;
        }

        $image->save();

        toastr('Image updated successfully.', 'success');

        return redirect()->route('admin.gallery.index');
    }
}
