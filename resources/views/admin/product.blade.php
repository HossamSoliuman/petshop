@extends('layouts.appAdmin')
@section('content')
    <form action="" method="get">
        <button type="submit" name="add" class="btn btn-primary">Add Product</button>
    </form>
    @isset( $_GET['add'] )
    <div class="mt-4 mb-4">
       <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.product.store')}}" >
        @csrf
        <label for="">Product name</label>
        <input class="form-controller" required type="text" name="name"> 
        <label for="">Product photo</label>
        <input class="form-controller" required type="file" name="photo"> 
        <label for="">Product price</label>
        <input class="form-controller" required type="number" name="price">    
        <input type="submit" value="Add">  
       </form> 
    </div>
    @endisset
    @isset( $_GET['edit'] )
    <div class="mt-4 mb-4">
       <form class="form" action="{{route('admin.product.update',['product'=>$_GET['id']]) }}" method="POST">
        @csrf
        @method('put')
        <label for="">Product name</label>
        <input class="form-controller" required type="text" name="name" value="{{$_GET['name']}}"> 
        <label for="">Product price</label>
        <input class="form-controller" required type="number" name="price" value="{{$_GET['price']}}">    
        <input type="submit" value="Edit">   
       </form>
    </form>
    </div>

    @endisset

    <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">product name</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $i=> $product)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$product->name}}</td>
                <td>${{$product->price}}</td>
                <td>
                    <form method="POST" action="{{ route('admin.product.destroy',['product'=>$product->id])}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" >Delete</button>
                    </form>
                   
                </td>
                <td> 
                <form action="" method="get">
                    <input type="hidden" value="{{$product->id}}" name="id">
                    <input type="hidden" value="{{$product->name}}" name="name">
                    <input type="hidden" value="{{$product->price}}"  name="price">
                    <button type="submit" name="edit" class="btn btn-warning">Edit</button>
                </form>
            </td>
              </tr>
            @endforeach
          
      
        </tbody>
      </table>
@endsection