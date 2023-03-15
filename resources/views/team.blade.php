@extends('layouts.app')
@section('content')
     <!-- Team Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Team Members</h6>
                <h1 class="display-5 text-uppercase mb-0">Qualified Pets Care Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                @foreach ($members as $member)
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/members/{{$member->photo}}" alt="photo">
                       
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase"> {{$member->name}} </h5>
                        <p class="m-0">{{$member->job}}</p>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection