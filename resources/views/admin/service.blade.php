@extends('layouts.appAdmin')
@section('content')
    <form action="" method="get">
        <button type="submit" name="add" class="btn btn-primary">Add service</button>
    </form>
    @isset( $_GET['add'] )
    <div class="mt-4 mb-4">
       <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.service.store')}}" >
        @csrf
        <label for="">service title</label>
        <input class="form-controller" required type="text" name="title"> 
         
        <label for="">service body</label>
        <input class="form-controller " style="height: 50px" required type="text" name="body">    
        <input type="submit" value="Add">  
       </form> 
    </div>
    @endisset
    @isset( $_GET['edit'] )
    <div class="mt-4 mb-4">
       <form class="form" action="{{route('admin.service.update',['service'=>$_GET['id']]) }}" method="POST">
        @csrf
        @method('put')
        <label for="">service title</label>
        <input class="form-controller" required type="text" name="title" value="{{$_GET['title']}}"> 
        <label for="">service body</label>
        <input class="form-controller " style="height: 50px" required type="text" name="body" value="{{$_GET['body']}}">       
        <input type="submit" value="Edit">   
       </form>
    </form>
    </div>

    @endisset

    <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">service title</th>
            <th scope="col">body</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $i=> $service)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$service->title}}</td>
                <td>{{$service->body}}</td>
                <td>
                    <form method="POST" action="{{ route('admin.service.destroy',['service'=>$service->id])}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" >Delete</button>
                    </form>
                   
                </td>
                <td> 
                <form action="" method="get">
                    <input type="hidden" value="{{$service->id}}" name="id">
                    <input type="hidden" value="{{$service->title}}" name="title">
                    <input type="hidden" value="{{$service->body}}"  name="body">
                    <button type="submit" name="edit" class="btn btn-warning">Edit</button>
                </form>
            </td>
              </tr>
            @endforeach
          
      
        </tbody>
      </table>
@endsection