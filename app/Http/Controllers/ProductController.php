<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin-panel.products.products-list');
    }

    public function create(){
        return view('admin-panel.products.create-product');
    }
}
