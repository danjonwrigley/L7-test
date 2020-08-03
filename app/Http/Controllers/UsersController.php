<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\User;

class UsersController extends Controller
{
    public function showAll()
    {
        $table = [
            'columnNames' => ['Name', 'Email', 'Created', 'Updated', 'User'],
        ];

        $users = User::all();

        foreach ($users as $user)
        {
            // Create a table row for each row in the collection
            $table['rows'][] = [
                $user->name,
                $user->email,
                $user->created_at,
                $user->updated_at, 
                self::createViewButton(route('user-edit', $user->id), 'Edit', 'btn btn-success') . " " . 
                    self::createViewButton(route('user', $user->id), 'View', 'btn btn-primary'),
            ];
        };

        return view('admin.pages.users.users', [
            'users' => $table,
        ]);
    }

    public function show($id)
    {
        return view('admin.pages.users.user', [
            'user' => User::where('id', $id)->firstOrFail(),
        ]);
    }

    public function edit($id)
    {
        return view('admin.pages.users.edit', [
            'user' => User::where('id', $id)->firstOrFail(),
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
