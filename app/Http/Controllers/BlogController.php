<?php

namespace App\Http\Controllers;


use App\Blog;

use App\Commands\BlogCreateCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::all();
        foreach($blogs as $blog)
        {
            var_dump($blog->toArray(), $blog->tags->toArray());
            foreach($blog->tags as $tag )
            {
            $tag->name;
                $tag->slug;
        }
        exit;
        return view('blog.list', compact('blogs'));

    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BlogCreateRequest $request)
    {
       $command = new BlogCreateCommand(
        $request->get{'title'),
        $request->get('content'),
        $request->get('tags')
    );


    })

        return 'Your blog created successfully. Id is ' . $blog->id;

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.view', compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(BlogEditRequest $request, $id)
    {
        $blog = Blog::find($id);
        return view('blog.view', $blog->toArray());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
       Blog::destroy($id);
    }

}

