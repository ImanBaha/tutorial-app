<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();
    



    // foreach ($files as $file){
    //     $document = YamlFrontMatter::parseFile($file);

    //     $posts[] = new Post(
    //         $document -> title,
    //         $document -> excerpt,
    //         $document -> date,
    //         $document -> body(),
    //         $document -> slug
    //     );
    // }
    //  ddd($posts[0]-> title);

    // return view ('posts', ['posts' =>$posts])
    // $document= YamlFrontMatter::parseFile(
    //   resource_path('posts/my-fourth-post.html')
    // );
    // ddd($document-> matter());
    return view('posts',  [
    'posts' => Post::all()
    
    

    ]);
});


Route::get('posts/{post}', function ($slug) {

//     $path = __DIR__ . "/../resources/posts/{$slug}.html";
// $post = Post::findOrFail($slug);


return view( 'post', [
    'post' => Post::findOrFail($slug)
]);
//     // dd($path);

//     // return $slug;

//    if (! file_exists($path)){
//     //    ddd('file does not exist');
//     // abort (404);
//     return redirect('/');
//    }
//    $post= cache()-> remember("posts.{$slug}", 1200, function () use ($path) {
//     var_dump('file_get_contents');
//     return file_get_contents($path);

       
//    });

//    $post = file_get_contents($path);

//     //    $post = file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html");//post
    
//     return view ('post', [ 
//         'post' => $post
    
    
//     ]);
// })->whereAlpha('post');
});