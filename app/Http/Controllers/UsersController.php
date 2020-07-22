<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function showAll()
    {

    }

    public function show($id)
    {
        dd($user = User::where('id', $userId)->firstOrFail());
        return view('pages.users.user', [
            $user = User::where('id', $userId)->firstOrFail(),
        ]);
    }
}
