<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use App\DataTables\PostDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use Flash;
use Response;

class UserController extends AppBaseController
{
    public function __construct()
    {

    }

    public function index(PostDataTable $postDataTable)
    {
        return view('main.master');
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
//        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
//        $input = $request->all();
//
//        $post = $this->postRepository->create($input);
//
//        Flash::success('Post saved successfully.');
//
//        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update()
    {


    }

    /**
     * Remove the specified Post from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

    }
    public function homePage()
    {
        $posts = Post::all();
        return view('main.index')->with('posts',$posts);

    }
    public function addPost()
    {
        return view('main.addPost');

    }
    public function storePost(Request $request)
    {
        if($request->has('file')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/posts/'), $imageName);
            $input = [
                'type' => $request->type,
                'body' => $request->body,
                'image' => $imageName
            ];
        }
        else{
            $input = [
                'type' => $request->type,
                'body' => $request->body,
            ];

        }


        $post = Post::create($input);
        Flash::success('Post saved successfully.');

        return redirect(route('index'));

    }

    //
}
