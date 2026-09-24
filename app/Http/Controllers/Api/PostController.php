<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return response()->json([
            'message' => 'Posts retrieved successfully.',
            'data' => $posts,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostCreateRequest $request)
    {
        $validateData = $request->validated();

        $post = Post::create($validateData);
        return response()->json([
            'message' => 'Post created successfully.',
            'data' => $post,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return response()->json([
            'message' => 'Post retrieved successfully.',
            'data' => $post,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, string $id)
    {
        $validateData = $request->validated();

        $post = Post::findOrFail($id);

        $post->update($validateData);
        return response()->json([
            'message' => 'Post updated successfully.',
            'data' => $post,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->noContent();
    }
}
