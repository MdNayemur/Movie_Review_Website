@extends('frontend.master_template.template')
@section('content')


<div class="container mt-4">
    <div class="row">
    <h1 class="text-center fonta">Movie Name: {{ $mov->mname }}</h1>
        <div class="col-md-4">
            <img height="400" width="350" src="{{asset('backend/moviesimage/'. $mov->img)}}" alt="">
        </div>
        <div class="col-md-8">
            <table class="table table-bordered border-primary">
                <tbody>
                    <tr>
                        <td>Origin</td>
                        <td>{{$mov->oriname->oname}}</td>
                    </tr>
                    <tr>
                        <td>Genre</td>
                        <td>{{ $mov->genre }}</td>
                    </tr>
                    <tr>
                        <td>Release Date</td>
                        <td>{{ $mov->description }}</td>
                    </tr>
                    <tr>
                      <td>Total Review</td>
                      <td>{{ $cnt }}</td>
                    </tr>
                    <tr>
                      <td>Rating</td>
                      <td><b>{{$current_review}}</b></td>
                    </tr>
                    <tr>
                        <td>Your Rating</td>     

                        @if(Auth::check() && $uniq == 0)
                       <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Rate Movie</button></td> 
                       @elseif($uniq == 0)
                       <td><button disabled type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Rate Movie</button> &nbsp; <span class="text-danger">Login to rate movies</span></td>  
                       @else
                       <td><button disabled type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Rate Movie</button> &nbsp; <span class="text-danger">You can submit rating only once</span></td>
                       @endif
                     
                    </tr>
                </tbody>
            </table>

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Your Review</h1>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <form  action="{{ Route('insertreview') }}" method="post">
      @csrf
    <div class="modal-body">
    <div class="rating">
       <input type="radio" id="star10" name="ratemov" value="10" />
       <label class="star" for="star10" title="Best" aria-hidden="true"></label>
       <input type="radio" id="star9" name="ratemov" value="9" />
       <label class="star" for="star9" title="Excellent" aria-hidden="true"></label>
       <input type="radio" id="star8" name="ratemov" value="8" />
       <label class="star" for="star8" title="Very Good" aria-hidden="true"></label>
       <input type="radio" id="star7" name="ratemov" value="7" />
       <label class="star" for="star7" title="Good" aria-hidden="true"></label>
       <input type="radio" id="star6" name="ratemov" value="6" />
       <label class="star" for="star6" title="Above Average" aria-hidden="true"></label>
       <input type="radio" id="star5" name="ratemov" value="5" />
       <label class="star" for="star5" title="Average" aria-hidden="true"></label>
       <input type="radio" id="star4" name="ratemov" value="4" />
       <label class="star" for="star4" title="Below Average" aria-hidden="true"></label>
       <input type="radio" id="star3" name="ratemov" value="3" />
       <label class="star" for="star3" title="Bad" aria-hidden="true"></label>
       <input type="radio" id="star2" name="ratemov" value="2" />
       <label class="star" for="star2" title="Very Bad" aria-hidden="true"></label>
       <input type="radio" id="star1" name="ratemov" value="1" />
       <label class="star" for="star1" title="Worst" aria-hidden="true"></label>
        <span class="text-danger">
        @error('ratemov')
        {{ $message }}
        @enderror
        </span>
      </div>
        <input type="hidden" name="movid" id="movid" value="{{ $mov->id }}">
        <input type="text" name="wreview" id="wreview" class="form-control" placeholder="Write Review (Optional)" value="{{ old('wreview') }}" >
        <span class="text-danger">
        @error('wreview')
        {{ $message }}
        @enderror
        </span>
        <!-- <input type="number" class="form-control mt-2" id="ratemov" name="ratemov" min="1" max="10" placeholder="Rate between 1 and 10" value="{{ old('ratemov')}}"> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary">Submit Review</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- end model -->
<h3> <b> Reviews:</b></h3>
<div class="border border-primary">
@foreach($rev as $rev)
<div class="d-flex">
  @if($rev->textReview==null)
  <img class="m-2" height="35px" width="35px" src="{{asset('frontend')}}/user2.png" alt="">
 <p> <b>{{ $rev->userName }}</b> <br> Rating: <b class="fs-5">{{ $rev->review }}</b>/10</p>
  @else
  <img class="m-2" height="35px" width="35px" src="{{asset('frontend')}}/user2.png" alt="">
 <p> <b>{{ $rev->userName }}</b> <br> Rating: <b class="fs-5">{{ $rev->review }}</b>/10 <br> Review:  {{$rev->textReview}}</p>
  @endif
</div>

@endforeach
</div>

        </div>
    </div>
</div>
@endsection
