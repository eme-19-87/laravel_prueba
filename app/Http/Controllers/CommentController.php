<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     // Recopilar todos los comentarios relacionados con un post específico
    // $post = Post::findOrFail($postId); // Asegúrate de que exista el post

    // $comments = $post->comments;

    // return view('comments.index', compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $postId)
{
    // // Validación de datos del comentario
    // $request->validate([
    //     'content' => 'required',
    // ]);

    // // Crear un nuevo comentario
    // $comment = new Comment();
    // $comment->user_id = auth()->user()->id; // ID del usuario autenticado
    // $comment->post_id = $postId; // ID del post al que se está comentando
    // $comment->content = $request->input('content');
    // $comment->save();

    // return redirect()->back()->with('success', 'Comentario publicado con éxito.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
