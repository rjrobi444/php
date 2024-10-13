@extends('backend.layouts.master')
@section('content')

<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">All Product</h3>
                    <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Product
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->id}}</td>
                        <td><img src="{{ asset('storage/' . $product->image) }}" alt="" width="100px" height="100px"></td>
                        <td>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('products.delete', $product->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                   @endforeach
                    
                </tbody>

            </table>
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->


@endsection 
