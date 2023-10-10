<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

//Ariq Athallah 6706223116

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.daftarPengguna', compact('users'));
    }

    public function showUser($id) {
        $user = User::where('id', $id)->firstOrFail();
        return view('user.infoPengguna', compact('user'));
    }

    public function create()
    {
    return view('user.registrasi');
    }
}
