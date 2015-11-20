<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home($user_type) {
        return view('pages.home')->with('user_type', $user_type);
    }

    public function users($user_type) {
        return view('pages.users')->with('user_type', $user_type);

    }

    public function studies($user_type) {
        return view('pages.studies')->with('user_type', $user_type);
    }

    public function receipts($user_type) {
        return view('pages.receipts')->with('user_type', $user_type);
    }
}
