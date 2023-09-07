
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Movies</h4>
      <p class="mg-b-0">Add a new movie here</p>
    </div>
</div>

      <div class="br-pagebody">

        <div class="row">
          <div class="col-sm-8">
          <form action="{{ Route('insertmovie') }}" method="post" enctype="multipart/form-data">
             @csrf
 
            <div class="form-group">
              <select name="orid" id="orid" class="form-control">
                <option value="">------Select Movie Origin-----</option>
                @foreach($orname as $orname)
                <option value="{{ $orname->id }}">{{ $orname->oname }}</option>
                @endforeach
              </select>
              <span class="text-danger">
                @error('orid')
                  {{ $message }}
                @enderror
              </span>
            </div>

            <div class="form-group">
              <select name="gen" id="gen" class="form-control">
                <option value="">------Select Movie Genre-----</option>
                <option value="Thriller">Thriller</option>
                <option value="Action">Action</option>
                <option value="Drama">Drama</option>
                <option value="Horror">Horror</option>
                <option value="Comedy">Comedy</option>
                <option value="Romance">Romance</option>
                <option value="Science Fiction">Science Fiction</option>
              </select>
              <span class="text-danger">
                @error('gen')
                  {{ $message }}
                @enderror
              </span>
            </div>

          	 <div class="form-group">
              <input type="text" name="name" id="name" placeholder="Enter Movie Name" class="form-control" value="{{ old('name') }}">
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <textarea name="des" id="des" placeholder="Enter Movie Release Date" class="form-control">{{ old('des') }}</textarea>

              <span class="text-danger">
                @error('des')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <input type="file" name="image" class="form-control">
              <span class="text-danger">
                @error('image')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Add Movie</button>
             </div>
             </form>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection