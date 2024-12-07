<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $other = Post::inRandomOrder()->limit(20)->get();
        return view('admin.index',['other' => $other]);
    }
}
