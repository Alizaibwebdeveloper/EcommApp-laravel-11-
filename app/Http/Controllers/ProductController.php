<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view('admin-panel.products.products-list', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin-panel.products.create-product',compact('categories', 'subCategories'));
    }


    public function StoreProdcut(Request $request){
        
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->discount_price = $request->discount_price;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Generate unique name
            $destinationPath = public_path(path: 'uploads/products'); // Directory in public folder
    
            // Move the file to the destination
            $image->move($destinationPath, $imageName);
    
            // Save the image path in the database
            $product->image = $imageName;
        }

    
        // Save the product in the database
        $product->save();
    
        return redirect('products/list');
    }
}
