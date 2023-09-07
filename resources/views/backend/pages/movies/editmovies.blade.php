
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Update Movies</h4>
      <p class="mg-b-0">Update Your Movie here</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('updatemovie',$mov->id) }}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
          <label for="catId">Select Movie Origin</label>
          <select name="orid" id="orid" class="form-control">
            <option value="">------Select Movie Origin-----</option>
            @foreach($ori as $ori)
            <option value="{{ $ori->id }}" @if($ori->id == $mov->originId) selected @endif> {{ $ori->oname }}</option>
            @endforeach
          </select>
          <span class="text-danger">
            @error('orid')
              {{ $message }}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="status">Select Movie Genre</label>
          <select name="gen" id="gen" class="form-control">
            <option value="">-----Select Movie Genre-----</option>
            <option value="Thriller" @if($mov->genre=='Thriller') selected @endif >Thriller</option>
            <option value="Action" @if($mov->genre=='Action') selected @endif >Action</option>
            <option value="Drama" @if($mov->genre=='Drama') selected @endif >Drama</option>
            <option value="Horror" @if($mov->genre=='Horror') selected @endif >Horror</option>
            <option value="Comedy" @if($mov->genre=='Comedy') selected @endif >Comedy</option>
            <option value="Romance" @if($mov->genre=='Romance') selected @endif >Romance</option>
            <option value="Science Fiction" @if($mov->genre=='Science Fiction') selected @endif >Science Fiction</option>
           

          </select>
        </div>

        <div class="form-group">
          <label for="name">Movie Name</label> 
          <input value="{{ $mov->mname }}" type="text" name="name" id="name" placeholder="Enter Movie Name" class="form-control" value="{{ old('name') }}">
          <span class="text-danger">
            @error('name')
              {{ $message }}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="des">Release Date</label>
          <textarea name="des" id="des" placeholder="Enter Movie Release Date" class="form-control">{{ old('des') }} {{ $mov->description }}</textarea>

          <span class="text-danger">
            @error('des')
              {{ $message }}
            @enderror
          </span>
        </div>

        </div>
        <div class="col-sm-6">

        <div class="form-group mt-4">
          <img src="{{ asset('backend/moviesimage/'.$mov->img) }}" height="140"/>
          <label for="image">Movie Poster</label> 
          <input type="file" name="image" class="form-control">
          <span class="text-danger">
            @error('image')
              {{ $message }}
            @enderror
          </span>
        </div>



        <div class="form-group">
          <button class="form-control btn btn-info" >Update Movie</button>
        </div>

        </div>
        </form>
      </div><!-- br-pagebody -->
@endsection