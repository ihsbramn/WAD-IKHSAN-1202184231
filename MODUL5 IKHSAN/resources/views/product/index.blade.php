@extends ('layout/main')

@section('title','Product')

@section('container')
<div class="container text-center mt-5">
<a href="{{'/create'}}" class="btn btn-dark"> Add Product</a>
</div>
<br><br>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $prd)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$prd->nama}}</td>
                <td>{{$prd->price}}</td>
                <td>
                        <a href="/product/{{ $prd->id }}/edit" class="btn btn-info">Edit</a>
                        <form action="{{ $prd->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>    
                        </form>    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection