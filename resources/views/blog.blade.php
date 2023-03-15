@extends('layouts.app')
@section('content')
    
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                @foreach ($posts as $post)
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="img/posts/{{$post->photo}}" style="object-fit: center;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>{{$post->name}}</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>{{$post->created_at}}</small>
                                </div>
                                <h5 class="text-uppercase mb-3">{{$post->title}}</h5>
                                <p>{{$post->body}}</p>
                                <a class="text-primary text-uppercase" href="{{route('post.show',['post'=>$post->id])}}">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
            {!! $posts->links() !!}
               
                
            </div>
            <!-- Blog list End -->
<!-- Comment Form Start -->
<div class="bg-light rounded p-5">
    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Leave a Post</h3>
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        <div class="row g-3">
            @csrf
            <div class="col-12 col-sm-6">
                <label for="">Your Name</label>

                <input type="text" name="name" class="form-control bg-white border-0"  style="height: 55px;">
            </div>
            <div class="col-12 col-sm-6">
                <label for="">Upload photo</label>
                <input type="file" name="photo" class="form-control bg-white border-0"  style="height: 55px;">
            </div>
            <div class="col-12">
                <input type="text" name="title" class="form-control bg-white border-0" placeholder="Title" style="height: 55px;">
            </div>
            <div class="col-12">
                <textarea name="body" class="form-control bg-white border-0" rows="5" placeholder="body"></textarea>
            </div>        
            
            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
            </div>
        </div>
    </form>
</div>
<!-- Comment Form End -->
        </div>
    </div>
    <!-- Blog End -->


@endsection