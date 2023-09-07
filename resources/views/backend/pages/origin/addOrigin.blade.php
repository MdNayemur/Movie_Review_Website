
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Origin</h4>
      <p class="mg-b-0">Add movie origin here</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('insert') }}" method="post">
          @csrf
        <div class="row">
          <div class="col-md-8">

          	 <div class="form-group">
              <label for="name">Origin Name</label> 
              <input type="text" name="name" id="name" placeholder="Enter Origin Name" class="form-control" value="{{ old('name') }}">
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <label for="description">Description</label>
               <textarea name="description" id="description" placeholder="Enter Description here" class="form-control">{{ old('description') }}</textarea>
              <span class="text-danger">
                @error('description')
                  {{ $message }}
                @enderror
              </span>
             </div>  
             <div class="form-group">
               <button class="form-control btn btn-info" >Add Origin</button>
             </div>       
            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
@endsection