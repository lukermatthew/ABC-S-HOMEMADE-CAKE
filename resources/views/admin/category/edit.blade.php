@extends('layouts.app')

@section('title','Category')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   
    
@endpush

@section('content')
  

 <div class="content">
        <div class="container-fluid">
          <div class="row">
            

              
            
              <div class="col-md-8">
              
              @include('layouts.partial.message') 
              
                </div>


                <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Category</h4>
                  
                </div>
                <div class="card-body">
                
                <form method="POST" action="{{ route('category.update',$category->id) }}">
                    <div class="row">
                    @csrf
                    @method('PUT')
                    
                    <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Name</label>
                            <input type="text" class="form-control" name="name"
                            value="{{ $category->name }}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Description</label>
                            <input type="text" class="form-control" name="description"
                            value="{{ $category->description }}">
                          </div>
                        </div>
                      </div>

                     

                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    
                  </form>
                </div>
              </div>
            </div>


   
@endsection


@push('scripts')




<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endpush



      