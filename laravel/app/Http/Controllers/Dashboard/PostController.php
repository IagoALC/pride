<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Requests\Dashboard\Post as PostRequest;

class PostController extends Controller
{
    public function trashed()
    {
        $posts = DB::table('blog_posts')
            ->where('author', Auth::user()->id)
            ->where('deleted_at', '!=', 'null')
            ->orderBy('deleted_at', 'DESC')
            ->get();

        return view('admin.blog.trashed', ['posts' => $posts]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('blog_posts')
                ->where('author', Auth::user()->id)
                ->where('deleted_at', null)
                ->orderBy('id', 'DESC')
                ->get();

        return view('admin.blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // categorias, mensagem de sucesso, validação ...

        $postUri = $this->setUri($request->title);
        $post = new Post();

        $post->author = Auth::user()->id;
        $post->uri = $postUri;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->text;

        if ($request->allFiles()) {
            foreach ($request->allFiles()['files'] as $image) {
                $post->cover = $image->store('post/cover' . $post->id);
                unset($postCover);
            }
        }

        $post->save();

        $success = "Publicado!";

        return redirect()->route('admin.blog.index', ['success' => $success]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('uri', $id)->get();

        if (!empty($post)) {
            return view('admin.blog.show')->with('post', $post);
        } else {
            return redirect()->action('Dashboard\PostController@index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('uri', $id)->get();
        if (!empty($post)) {
            return view('admin.blog.edit')->with('post', $post);
        } else {
            return redirect()->action('Dashboard\PostController@index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.blog.index');
    }

    private function setUri($title)
    {
        $postUri = Str::slug($title);

        //$properties = DB::select("SELECT * FROM properties");
        $posts = Post::all();

        $t = 0;
        foreach ($posts as $p){
            if(Str::slug($p->title) === $postUri){
                $t++;
            }
        }

        if ($t > 0){
            $postUri = $postUri . '-' . $t;
        }

        return $postUri;
    }
}
