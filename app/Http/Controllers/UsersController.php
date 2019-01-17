<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $this->authorize('view', User::class);

        return User::all();
    }
}
