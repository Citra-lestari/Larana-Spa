<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CustomerController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('customer.homepage', compact('categories'));
    }
}