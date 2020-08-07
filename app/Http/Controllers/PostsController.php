<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Post;
use App\User;
use App\Http\Controllers\AdminController as Admin;

class PostsController extends Controller
{
    /**
     * Make a collection of all posts and render them inside a table
     * @return view
     */
    public function showAll()
    {
        if (Schema::hasTable('posts'))
        {
            // Get specific columns otherwise call Admin::getTableColumns('<tablename>) for all columns
            $table = [
                'columnNames' => ['Title', 'Slug', 'Created', 'Updated', 'Published', 'Actions'],
            ];

            $posts = Post::all()->reject(function ($deleted_at) {
                return empty($deleted_at);
            });

            foreach ($posts as $post)
            {
                // Create a table row for each row in the collection
                $table['rows'][] = [
                    $post->title,
                    route('post', $post->slug),
                    $post->created_at,
                    $post->updated_at,
                    $post->published_at,
                    Admin::createViewButton(route('post-edit', $post->slug), 'Edit', 'btn btn-sm btn-success') . ' ' .
                        Admin::createViewButton(route('post', $post->slug), 'View', 'btn btn-sm btn-primary'),
                ];
            };

            return view('admin.pages.posts.posts', [
                'table' => $table,
            ]);
        }
        else
        {
            return abort(404);
        }
    }

    /**
     * Take the slug for the post and render that to the individual page
     * @param string $slug
     * @return view
     */
    public function show($slug)
    {
        return view('admin.pages.posts.post', [
            'post' => Post::where('slug', $slug)->firstOrFail(),
        ]);
    }

    /**
     * Take the slug for the post and render that to the individual edit page
     * @param string $slug
     * @return view
     */
    public function edit($slug)
    {
        return view('admin.pages.posts.edit', [
            'post' => Post::where('slug', $slug)->firstOrFail(),
            'users' => User::all(),
        ]); 
    }

    /**
     * Create a new post
     * 
     * @return view
     * @return array $users
     */
    public function create()
    {
        return view('admin.pages.posts.create', [
            'users' => User::all(),
        ]);
    }

    /**
     * Stores the incoming new post request
     * 
     * @return
     */
    public function store()
    {
        die('Hello');
    }
}
