@extends ('layout/main')

@section('title','Edit Product')

@section('container')
<div class="container mt-5">
    <h1 class="mb-5">Update Product</h1>
<form action="/product/{{$product->id}}" id="update" method="post">
    @method('patch')
    @csrf
    <div class="form">
        <div class="form-group">
            <label for="nama">Product Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$product->nama}}">
        </div>
        <div class="form-group">
            <label for="harga">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="stok">Stock</label>
        <input type="text" class="form-control" id="stock" name="stock" value="{{$product->stock}}" >
        </div>
        <div class="form-group">
            <div class="custom-file">
                <label for="img_path">Select a file</label>
                <input type="file" class="form-control" id="img_path" name="img_path" value="" >
            </div>
        </div>
    </div>
    <button href="submit" class="btn btn-dark" >Submit</button>
</form>
</div>
@endsection