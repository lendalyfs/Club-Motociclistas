<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function create() {
    }

    public function getUsers() {
        $users = User::all();
        return response() ->json($users, 200);
    }

    public function update() {

    }
}
