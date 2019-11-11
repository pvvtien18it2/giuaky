<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ChitietController extends Controller
{
    public function index( Post $id){
        return view('blog.home.chitiet',compact('id'));
    }
}
