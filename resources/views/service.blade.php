@extends('layouts.app')
@section('content')
    
    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Services</h6>
                <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
            </div>
            <div class="row g-5">

               
                @foreach ($services as $service)
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3"> {{$service->title}} </h5>
                            <p>{{$service->body}}</p>
                        </div>
                    </div>
                </div>
               @endforeach
               
            </div>
        </div>
    </div>
    <!-- Services End -->

@endsection