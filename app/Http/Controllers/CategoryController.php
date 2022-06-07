<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        Category::create($request->only('title'));

        return redirect()->route('tasks.index');
    }
}
