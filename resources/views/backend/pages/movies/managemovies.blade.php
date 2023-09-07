
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Manage Movie</h4>
      <p class="mg-b-0">manage movies here</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
          	 <table class="table">
              <thead>
                <tr>
                  <th>#sl</th>
                  <th>Origin</th>
                  <th>Genre</th>
                  <th>Movie Name</th>
                  <th>Release Date</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead> 

              <tbody>
                @php $sl=1 @endphp
              
                @foreach ($movall as $data)
                
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->oriname->oname }}</td>
                    <td>{{ $data->genre }}</td>
                    <td>{{ $data->mname }}</td>
                    <td>{{ $data->description }}</td>
                    <td><img height="80" src="{{ asset('backend/moviesimage/'.$data->img)  }}" /></td>
                    <td>
                      <a href="{{ Route('editmovie', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-target='#delete{{ $data->id }}' data-toggle="modal"></i></button>
                    </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this Movie?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{  Route('deletemovie', $data->id) }}" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
                   @php $sl++ @endphp
                   
                @endforeach
              </tbody>

             </table> 
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection