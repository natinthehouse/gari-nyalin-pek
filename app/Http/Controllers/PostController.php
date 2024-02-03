<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createposts(){
        return view('post.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required'],
            'caption' => ['required'],
            'image' => ['required','mimes:png,jpg,jpeg,webp']
        ]);

        $imagePath = $this->storeImage($request->file('image'));

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => $imagePath,
        ]);
        return redirect()->route('index');
    }

    private function storeImage ($file): string {
        $fileName = rand() . $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }

    public function index () {
        $user = User::find(Auth::id());

        return view('post.index', [
            'user' => $user,
            'posts' => $user->posts()->get()
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => ['required'],
            'caption' => ['required'],
        ]);

        $post = Post::find($id);

        $post->title = $request->title;
        $post->caption = $request->caption;
        $post->image = $request->file('gambar') ? $this->storeImage($request->file('image')) : $post->image;

        $post->save();
        return redirect()->route('post.index');
    }

    public function viewupdate($id){
        $post = Post::find($id);

        return view('post.viewupdate',['post' => $post]);
    }

    public function delete($id){
        Post::find($id)->delete();
        return redirect()->route('index');
    }
}
