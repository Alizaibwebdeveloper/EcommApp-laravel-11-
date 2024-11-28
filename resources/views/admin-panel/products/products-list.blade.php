@extends('admin-panel.layouts.app')

@section('content')


<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Products</h3>
        </div>

      </div>

      <div class="clearfix"></div>

      <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            
            <div class="x_content">

              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Desciption</th>
                    <th>Price</th>
                    <th>Discount Price</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                      
                  <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->sub_category_id}}</td>
                    <td>
                      <img src="{{ asset('uploads/products/' . $product->image) }}" alt="{{ $product->title }}" height="100">
                  </td>
                                    </tr>

                  @endforeach

                  
                </tbody>
              </table>

            </div>
          </div>
        </div>


        <div class="clearfix"></div>

        
      </div>
    </div>
  </div>

@endsection