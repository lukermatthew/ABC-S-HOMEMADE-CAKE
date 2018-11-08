@extends('layouts.app')

@section('title','Item')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
   
    
@endpush

@section('content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
           <div class="col-md-12">
             
             
           <a href="{{ route('item.create') }}" class="btn btn-info">Add New <i class="material-icons">add</i></a>

            @include('layouts.partial.message')

       
        
           
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Item</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table table-bordered" id="myTable">
                  <thead class="text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        
                        <th>Action</th>
                      </thead>

                     <tbody>
                      @foreach($items as $key=>$item) 
                      <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->description }}</td>
                          <td>{{ $item->price }}</td>
                          <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/item/'.$item->image) }}" style="height: 40px; width: 40px" alt=""></td>
                          <td>{{ $item->category->name }}</td>
                          <td>{{ $item->created_at }}</td>
                          
                          <td><a href="{{ route('item.edit',$item->id) }}"" class="btn btn-sm btn-primary"><i class="material-icons">mode_edit</i></a>
                          
                      

                          <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();
                                                }else {
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



      