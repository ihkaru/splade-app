<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Tables\CategoriesTable;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    public function index(){
        return view("categories.index",[
            "categories_table"=>CategoriesTable::class
        ]);
    }
}
