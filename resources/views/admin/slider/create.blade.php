@extends('layouts.app')

@section('title','Slider')

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
                  <h4 class="card-title">Create Slider</h4>
                  <p class="card-category">Add new Slider</p>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('slider.store') }}"
                enctype="multipart/form-data">
                    <div class="row">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Title</label>
                            <input type="text" class="form-control" name="title">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Sub-title</label>
                            <input type="text" class="form-control" name="sub_title">
                          </div>
                        </div>
                      </div>

                        
                       <div class="col-md-12">
                        
                    
                            <label class="bmd-label-floating">Image</label><br>
                            <input type="file" name="image">
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



      