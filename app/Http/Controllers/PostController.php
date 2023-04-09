<?php

namespace App\Http\Controllers;

use App\Tables\PostTable;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("post.index", [
            "posts"=>PostTable::class
        ]);
    }
}
