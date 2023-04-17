<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    $posts = DB::table('posts')->get();

        //    ->select('title', 'body') //return only the title and body values of the table
        //    ->where('id', 50) //return only the item with id = 50
        //    ->where('id', '>', 50) //return items with id > 50
        //    ->where('is_published', true) //return items with is_published = true
        //    ->whereBetween('min_to_read', [5, 10]) //return items with min_to_read between 5 and 10
        //    ->whereNotBetween('min_to_read', [5, 10]) //return items with min_to_read not between 5 and 10
        //    ->whereIn('min_to_read', [1, 2, 10]) //return items with min_to_read = 1 or 2 or 10
        //    ->whereNull('excerpt') //return items with excerpt null
        //    ->whereNotNull('excerpt') //return items with excerpt not null
        //    ->where('body', 'Overriding the body of our post') //return items with body = Overriding the body of our post
        //    ->select('min_to_read')->distinct() //return items with min_to_read unique values
        //    ->orderBy('id', 'desc') //return items ordered by id descending
        //    ->skip(30)->take(10) //return the first 10 data values after the first 30 data values
        //    ->inRandomOrder() //return items randomly ordered
        //    ->get(); //execute the return data 'work with the methods before'
        //    ->first(); //return the first item in table
        //    ->find(100); //return the item with id = 100
        //    ->where('id', 100)->value('body'); //return the body of the item with id = 100
        //    ->value('body'); //return the body of the first item
        //    ->count(); //return the number of items in the table
        //    ->where('id', '>', 50)->count(); //return the number of items with id > 50
        //    ->min('min_to_read'); //return the minimum value of min_to_read
        //    ->max('min_to_read'); //return the maximum value of min_to_read
        //    ->sum('min_to_read'); //return the sum value of min_to_read
        //    ->avg('min_to_read'); //return the average value of min_to_read

        //    return view('blog.index')->with('posts', $posts); //return values of items get by $posts = DB::table('posts')->get();
        //    return view('blog.index', compact('posts')); //return values of items get by $posts = DB::table('posts')->get();



        //    return view('blog.index', ['posts' => DB::table('posts')->get()]); //Line work alone without $posts = DB::table('posts')->get(); to return all items
        //    $posts = Post::all(); //get all items with all method but no chaining
        //    $posts = Post::get(); //get all items with all method and chaining
        //    $posts = Post::orderby('id', 'desc')->take(10)->get(); //get all items with all method order by id only the last 10 items
        //    $posts = Post::where('min_to_read', '!=', 2)->get(); //get all items with min_to_read not equal to 2

        //    dd($posts);
        //    var_dump($posts);

        //    Post::chunk(25, function ($posts) { foreach ($posts as $post) { echo $post->title . '<br>'; } }); //return all the titles items

        return view('blog.index', [
            'posts' => Post::orderby('updated_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $posts = DB::insert('INSERT INTO posts (title, excerpt, body, image_path, is_published, min_to_read) VALUES(?, ?, ?, ?, ?, ?)', [ 'Test', 'Test', 'Test', 'Test', true, 1 ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $posts = DB::statement('SELECT * FROM posts');
        // $posts = DB::select('SELECT * FROM posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $posts = DB::statement('SELECT * FROM posts WHERE id=1');
        // $posts = DB::statement('SELECT * FROM posts WHERE id=?', [1]);
        // $posts = DB::statement('SELECT * FROM posts WHERE id= :id', ['id' => 1]);
        return view('blog.show', [
            'post' => Post::findOrfail($id)
        ]);
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
        // $posts = DB::update('UPDATE posts SET body = ? WHERE id = ?', [ 'body 2', 203 ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $posts = DB::delete('DELETE FROM posts WHERE id = ?', [203]);
    }
}
