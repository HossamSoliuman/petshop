@extends('layouts.appAdmin')
@section('content')
    <form action="" method="get">
        <button type="submit" name="add" class="btn btn-primary">Add member</button>
    </form>
    @isset( $_GET['add'] )
    <div class="mt-4 mb-4">
       <form class="form" method="POST" enctype="multipart/form-data" action="{{route('admin.member.store')}}" >
        @csrf
        <label for="">member name</label>
        <input class="form-controller" required type="text" name="name"> 
        <label for="">member photo</label>
        <input class="form-controller" required type="file" name="photo"> 
        <label for="">member job</label>
        <input class="form-controller" required type="text" name="job">    
        <input type="submit" value="Add">  
       </form> 
    </div>
    @endisset
    @isset( $_GET['edit'] )
    <div class="mt-4 mb-4">
       <form class="form" action="{{route('admin.member.update',['member'=>$_GET['id']]) }}" method="POST">
        @csrf
        @method('put')
        <label for="">member name</label>
        <input class="form-controller" required type="text" name="name" value="{{$_GET['name']}}"> 
        <label for="">member job</label>
        <input class="form-controller" required type="text" name="job" value="{{$_GET['job']}}">    
        <input type="submit" value="Edit">   
       </form>
    </form>
    </div>

    @endisset

    <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">member name</th>
            <th scope="col">job</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($members as $i=> $member)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$member->name}}</td>
                <td>{{$member->job}}</td>
                <td>
                  <div class="d-flex ">

                    <div class="m-2">
                      <form method="POST" action="{{ route('admin.member.destroy',['member'=>$member->id])}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" >Delete</button>
                    </form>
                    </div>
                      
                      <div class="m-2">
                        <form action="" method="get">
                          <input type="hidden" value="{{$member->id}}" name="id">
                          <input type="hidden" value="{{$member->name}}" name="name">
                          <input type="hidden" value="{{$member->job}}"  name="job">
                          <button type="submit" name="edit" class="btn btn-warning">Edit</button>
                      </form>
                      </div>
                     
                  </div>

                </td>
                
              </tr>
            @endforeach
          
      
        </tbody>
      </table>
@endsection