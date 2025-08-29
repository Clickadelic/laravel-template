<?php

namespace App\Models;

use App\Http\Requests\StorePostRequest;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function index()
    {
        //
    }

    public function show(Post $post)
    {
        
    }

    public function create()
    {
        //
    }


    public function store(StorePostRequest $request)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    // public function update(StorePostRequest $request, Post $post)
    // {
    //     //
    // }

    // public function destroy(Post $post)
    // {
    //     //
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
