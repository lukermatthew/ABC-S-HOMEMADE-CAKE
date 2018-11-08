@extends('layouts.app')

@section('title','Create')

@push('css')

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
                  <h4 class="card-title">Create Item</h4>
                  <p class="card-category">Add new Item</p>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('item.store') }}" enctype="multipart/form-data">
              
                    <div class="row">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Name</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Description</label>
                            <textarea class="form-control" name="description"></textarea>
                          </div>
                        </div>
                      </div>
                     

                      <div class="col-md-4">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Price</label>
                            <input type="number" class="form-control" name="price">
                          </div>
                        </div>
                      </div>

                    

                         <div class="col-md-6">
                             <div class="form-group">
                             <div class="form-group">
                            <label class="bmd-label-floating">*Select Category</label>
                            
                             <select class="form-control" name="category">
                                    @foreach($categories as $category)
                                
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                                     @endforeach
                             </select>
                             </div> 
                             </div> 
                             </div> 

                             

                              <div class="row">
                                    <div class="col-md-12">
                                            <label class="control-label">Image</label><br>
                                            <input type="file" name="image">
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

@endpush