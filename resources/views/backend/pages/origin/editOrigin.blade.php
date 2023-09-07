
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Edit Origin</h4>
      <p class="mg-b-0">Edit Origin here</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('update',$ori->id) }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="name">Origin Name</label> 
              <input type="text" name="name" id="name" placeholder="Enter Origin Name" class="form-control" value="{{ $ori->oname }}">
             </div>

             <div class="form-group">
               <label for="description">Origin Description</label>
               <textarea name="description" id="description" placeholder="Enter Origin Description" class="form-control">{{ $ori->description }}</textarea>

             </div>
             <div class="form-group">
               <button class="form-control btn btn-info" >Update Origin</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
@endsection