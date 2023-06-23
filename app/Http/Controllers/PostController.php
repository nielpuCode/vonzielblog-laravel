<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function NewPosted(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'shortdesc' => 'required',
            'textblog' => 'required',
            'postImage' => 'image',
        ]);

        $validatedData['title'] = strip_tags($validatedData['title']);
        $validatedData['shortdesc'] = strip_tags($validatedData['shortdesc']);
        $validatedData['textblog'] = strip_tags($validatedData['textblog']);
        $validatedData['user_id'] = auth()->id();

        if ($request->hasFile('postImage')) {
            $image = $request->file('postImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $validatedData['image'] = $imageName;
        }

        Post::create($validatedData);

        return redirect('/MyBlog');
    }

    public function EditPost(Post $post) {

        return view('EditPost', ['post' => $post]);
    }

    public function SaveChange(Post $post, Request $request) {
        if (auth()->user()->id != $post['user_id']) {
            return redirect('/Allblog');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'shortdesc' => 'required',
            'textblog' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['shortdesc'] = strip_tags($incomingFields['shortdesc']);
        $incomingFields['textblog'] = strip_tags($incomingFields['textblog']);
        $incomingFields['user_id'] = auth()->id();

        $post->update($incomingFields);
        return redirect('/MyBlog');
    }

    public function DeletePost(Post $post) {
        if (auth()->user()->id === $post['user_id']) {
            // Hapus gambar terkait dari folder penyimpanan
            if ($post->image) {
                $imagePath = public_path('storage/images/' . $post->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Hapus postingan dari database
            $post->delete();

            return redirect('/MyBlog');
        }

        return redirect('/Allblog');
    }

    public function ViewPost($postId) {
        // Retrieve the post with the given ID from the database
        $post = Post::findOrFail($postId);

        // Pass the post data to the Viewpost view
        return view('Viewpost', ['post' => $post]);
    }
}
