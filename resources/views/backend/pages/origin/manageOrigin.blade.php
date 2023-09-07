
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Manage Origin</h4>
      <p class="mg-b-0">Manage Origin here</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
          	 <table class="table">
              <thead>
                <tr>
                  <th>#sl</th>
                  <th>Origin Name</th>
                  <th>Description</th>
                  <th>Edit</th>
                </tr>
              </thead> 

              <tbody>
                @php $sl=1 @endphp
                @foreach ($ori as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->oname }}</td>
                    <td>{{ $data->description }}</td>
                    <td>
                      <a href="{{ Route('edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                   @php $sl++ @endphp
                @endforeach
              </tbody>

             </table> 
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection