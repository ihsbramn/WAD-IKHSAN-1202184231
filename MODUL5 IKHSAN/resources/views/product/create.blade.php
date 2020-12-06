@extends ('layout/main')

@section('title','Add Product')

@section('container')
<div class="container mt-5">
<form action="/product" id="create" method="post">
    @csrf
    <div class="form">
        <div class="form-group">
            <label for="nama">Product Name</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="stok">Stock</label>
            <input type="text" class="form-control" id="stock" name="stock">
        </div>
        <div class="form-group">
            <div class="custom-file">
                <label for="img_path">Select a file</label>
                <input type="file" class="form-control" id="img_path" name="img_path">
            </div>
        </div>
    </div>
    <button href="submit" class="btn btn-dark" >Submit</button>
</form>
</div>
@endsection