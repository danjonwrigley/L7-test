<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\User;
use App\Http\Controllers\AdminController as admin;

class UsersController extends Controller
{
    /**
     * Make a collection of all users and render them inside a table
     * @return view
     */
    public function showAll()
    {
        if (Schema::hasTable('users'))
        {
            $table = [
                'columnNames' => ['Name', 'Email', 'Created', 'Updated', 'User'],
            ];
            
            $users = user::all();

            foreach ($users as $user)
            {
                // Create a table row for each row in the collection
                $table['rows'][] = [
                    $user->name,
                    $user->email,
                    $user->created_at,
                    $user->updated_at, 
                    admin::createViewButton(route('user-edit', $user->id), 'Edit', 'btn btn-sm btn-success') . " " . 
                        admin::createViewButton(route('user', $user->id), 'View', 'btn btn-sm btn-primary'),
                ];
            };

            return view('admin.pages.users.users', [
                'table' => $table,
            ]);
        }
        else
        {
            return abort(404);
        }
    }

    /**
     * Take the id for the user and render that to the individual page
     * @param string $id
     * @return view
     */
    public function show($id)
    {
        return view('admin.pages.users.user', [
            'user' => user::where('id', $id)->firstOrFail(),
        ]);
    }

    /**
     * Take the id for the user and render that to the individual edit page
     * @param string $id
     * @return view
     */
    public function edit($id)
    {
        return view('admin.pages.users.edit', [
            'user' => user::where('id', $id)->firstOrFail(),
        ]); 
    }
}
