@extends('frontend.master_template.template')
@section('content')

<!-- All movies -->
<h2 class="text-center mt-3 fonta">Latest Movies</h2>

<div class="container">
<div class="row mt-3">

<div class="slider demo">
@foreach ($mov as $mov)
<div class="card col-md-4 text-center" style="width: 15rem;">
  <img src="{{asset('backend/moviesimage/'. $mov->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$mov->mname}}</h5>
    <p class="card-text">{{$mov->description}}</p>
    <a href="{{ Route('movieDetails',$mov->id) }}" class="btn btn-primary">View Details</a>
  </div>
</div>

@endforeach
</div>
</div>

<!-- English movies -->
<h2 class="text-center mt-5 fonta">English Movies</h2>
<div class="row mt-3">

<div class="slider demo">
@foreach ($engmov as $engmov)
@if($engmov->originId==1)
<div class="card col-md-4 text-center" style="width: 15rem;">
  <img src="{{asset('backend/moviesimage/'. $engmov->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$engmov->mname}}</h5>
    <p class="card-text">{{$engmov->description}}</p>
    <a href="{{ Route('movieDetails',$engmov->id) }}" class="btn btn-primary">View Details</a>
  </div>
</div>
@endif
@endforeach
</div>

<!-- bangla movies -->
<h2 class="text-center mt-5 fonta">Bangla Movies</h2>
<div class="row mt-3">

<div class="slider demo">
@foreach ($banmov as $banmov)
@if($banmov->originId==3)
<div class="card col-md-4 text-center" style="width: 15rem;">
  <img src="{{asset('backend/moviesimage/'. $banmov->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$banmov->mname}}</h5>
    <p class="card-text">{{$banmov->description}}</p>
    <a href="{{ Route('movieDetails',$banmov->id) }}" class="btn btn-primary">View Details</a>
  </div>
</div>
@endif
@endforeach
</div>

<!-- Hindi movies -->
<h2 class="text-center mt-5 fonta">Hindi Movies</h2>
<div class="row mt-3">

<div class="slider demo">
@foreach ($hinmov as $hinmov)
@if($hinmov->originId==2)
<div class="card col-md-4 text-center" style="width: 15rem;">
  <img src="{{asset('backend/moviesimage/'. $hinmov->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$hinmov->mname}}</h5>
    <p class="card-text">{{$hinmov->description}}</p>
    <a href="{{ Route('movieDetails',$hinmov->id) }}" class="btn btn-primary">View Details</a>
  </div>
</div>
@endif
@endforeach
</div>

</div>
@endsection
