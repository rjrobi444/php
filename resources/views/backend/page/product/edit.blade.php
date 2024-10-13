@extends('backend.layouts.master')
@section('content') 
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

.container {
    max-width: 500px;
    margin: 40px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 10px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #3e8e41;
}

#upload-status {
    margin-top: 20px;
    font-size: 18px;
    color: #666;
}
</style>
 <div class="container">
        <h1>Product Upload Page</h1>
        <form action="{{route('products.update',$products)}}" method="POST" id="upload-form" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <label for="name">Food Name:</label>
            <input type="text" id="name" value="{{$products->name}}" name="name" placeholder="Enter Food-Name"><br><br>

            <label for="category">Food-Category</label>
            <input type="text" id="category" name="category" value="{{$products->category}}" placeholder="Enter Food-Category"><br><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" value="{{$products->description}}" placeholder="Enter Food-Description"></textarea><br><br>

            <label for="food-image">Food Image:</label>
            <input type="file" id="food-image" name="image"><br><br>

            <label for="price">Food Price:</label>
            <input type="number" id="price" name="price" value="{{$products->price}}" placeholder="Enter price"><br><br>

            <button type="submit" id="upload-btn">Upload Product</button>
        </form>
        <div id="upload-status"></div>
    </div>
@endsection
