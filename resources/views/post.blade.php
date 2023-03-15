@extends('layouts.app')
@section('content')
      <!-- Blog Start -->
      <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{asset('img/posts/'.$post->photo)}}" alt="photo">
                    <h1 class="text-uppercase mb-4">{{$post->title}}</h1>
                    <p>{{$post->body}}</p>
                    
                </div>
                <!-- Blog Detail End -->

                <!-- Comment Form Start -->
                <div class="bg-light rounded p-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Leave a comment</h3>
                    <form action="{{route('comment.store')}}" method="POST">
                        <div class="row g-3">
                           @csrf
                            <div class="col-12 col-sm-6">
                                <input type="text" name="creator" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                           
                            <div class="col-12">
                                <textarea name="comment" class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4"> {{$post->comments->count()}} comments</h3>
                    @foreach ($post->comments as $comment)
                    <div class="d-flex mb-4">
                        <div class="ps-3">
                            <h6><a href="">{{$comment->creator}}</a> <small><i>{{$comment->created_at}}</i></small></h6>
                            <p>{{$comment->comment}} </p>
                        </div>
                    </div>
                    @endforeach
                    
                
                </div>
                <!-- Comment List End -->

            </div>

        </div>
    </div>
    <!-- Blog End -->

@endsection