@extends('layouts.app')

@section('title','Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
   
    
@endpush

@section('content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
           <div class="col-md-12">
             
             
           <a href="{{ route('slider.create') }}" class="btn btn-info">Add New <i class="material-icons">add</i></a>

            @include('layouts.partial.message')

       
        
           
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Latest Slider</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table table-bordered" id="myTable">
                  <thead class="text-primary">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Sub-title</th>
                        <th>Image</th>
                        <th>Date Created</th>
                        <th>Updated at</th>
                        <th>Action</th>
                      </thead>

                     <tbody>
                      @foreach($sliders as $key=>$slider) 
                      <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $slider->title }}</td>
                          <td>{{ $slider->sub_title }}</td>
                          <td>{{ $slider->image }}</td>
                          <td>{{ $slider->created_at }}</td>
                          <td>{{ $slider->updated_at }}</td>
                          <td><a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-sm btn-primary"><i class="material-icons">mode_edit</i></a>
                          
                          <form id="delete-form-{{ $slider->id }}"
                             action="{{ route('slider.destroy', $slider->id) }}" style="display:none;" method="POST">
                        @csrf
                        @method('DELETE')


                          </form>
                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this?')){
                          
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $slider->id }}').submit();
                          }else{
                            event.preventDefault();

                          }"><i class="material-icons">delete</i></button>
                        </td>
                     </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
            
             
             




   
@endsection


@push('scripts')



<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>

@endpush



      