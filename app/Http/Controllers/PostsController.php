<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function showAll()
    {
        $table = [
            'columnNames' => ['Name', 'Email', 'Content', 'Created', 'Updated', 'Published', 'Post'],
        ];

        $posts = Post::all()->reject(function ($deleted_at) {
            return empty($deleted_at);
        });

        foreach ($posts as $post)
        {
            // Create a table row for each row in the collection
            $table['rows'][] = [
                $post->title,
                $post->slug,
                $post->body,
                $post->created_at,
                $post->updated_at,
                $post->published_at,
                self::createViewButton(route('post', $post->slug), 'View', 'btn btn-primary'),
            ];
        };

        return view('admin.pages.posts.posts', [
            'posts' => $table,
        ]);
    }

    public function show($slug)
    {
        return view('admin.pages.posts.post', [
            'post' => Post::where('slug', $slug)->firstOrFail(),
        ]);
    }

    /**
     * Get all columns from the required table
     * @param string $table 'name of the table in the database'
     * @return object
     */
    static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    /**
     * Create a button for the table row to link to the entity
     * @param string $href 'path to entity'
     * @param string $text 'text that shows in the button'
     * @param string $classes 'any bespoke classes to add to this component'
     * @return string
     */
    static function createViewButton($href, $text, $classes)
    {
        return '<a href="'. $href . '" class="' . $classes . '">' . $text . '</a>';
    }
}
