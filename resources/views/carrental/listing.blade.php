@extends('Layouts.parent')
@section('title', 'car listing')
@section('content')
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        
        @foreach($car as $c)
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
         
            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{ asset('assets/dashboard/images/'.$c->image) }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
              
                <h3>Mitsubishi Pajero</h3>
                <div class="rent-price">
                  <strong>{{ $c->price }}</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">{{ $c->Laggage }}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">{{ $c->Doors }}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">{{ $c->Passenge }}</span>
                  </div>
                </div>
                <div>
                  <p>{{ $c->description}}</p>
                  <p><a href="{{route('dashboard.cars.show',$c->id)}}" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>
             
            </div>
          </div>
          @endforeach
@endsection