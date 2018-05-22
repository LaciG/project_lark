<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\UserData;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view($id) {
        return view('profile');
    }

    public function edit($id) {

    }
}
