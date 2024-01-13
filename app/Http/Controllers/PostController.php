<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->get();
        // dd($posts);
        return view('post.index', compact('posts'));
    }

    public function categoryPosts($id)
    {
        $posts = Post::with('category')->where('category_id', $id) -> get();

        return view('post.category', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        $data = [
            'categories' => $categories,
        ];

        // return view('post.create', $data);
        return view('post.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'category_id' => 'required',
            'author' => 'required',
            'image' => 'required'
        ],
        [
        'title.required' => 'Title dew nai',
        ]
        );

        $post = $request->except(['image']);

    //     if($file = $request->hasFile('image')) {
             
    //         $file = $request->file('image') ;
    //         $fileName = $file->getClientOriginalName() ;
    //         $destinationPath = public_path().'/images' ;
    //         $file->move($destinationPath,$fileName);
    //         return redirect('/uploadfile');
    // }
  

        if($request->file('image')){
            $file_name = $request->file('image')->getClientOriginalName();
            
            $request->image->move(public_path('images'), $file_name);

            $post['image_path'] = 'images/'.$file_name;
            
            Post::create($post);

            return redirect()->route('posts.index');
        }else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
