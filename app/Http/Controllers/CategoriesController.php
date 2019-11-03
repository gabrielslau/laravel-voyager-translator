<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::with(['translations'])->get();

        if ($categories) {
            $categories = $categories->translate();
        }

        return view(
            'categories/index',
            compact(
                'categories'
            )
        );
    }
}
