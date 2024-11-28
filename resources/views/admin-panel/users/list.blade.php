@extends('admin-panel.layouts.app')

@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Users</h3>
        </div>

      </div>

      <div class="clearfix"></div>

      <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Users<small>List</small></h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                          <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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