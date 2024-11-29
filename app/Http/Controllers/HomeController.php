<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['subcategories'] = SubCategory::all();
        $data['products'] = Product::paginate(4);
        return view('index')->with($data);
    }
}
