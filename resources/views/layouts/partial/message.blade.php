@if(session('successMsg'))

           
<div class="alert alert-success alert-with-icon" data-notify="container">
   <i class="material-icons" data-notify="icon">check</i>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <i class="material-icons">close</i>
   </button>
   <span data-notify="message">{{ session('successMsg') }}</span>
</div>
@endif



 @if($errors->any())
             
             @foreach ($errors->all() as $error)
               <div class="alert alert-danger">
              
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <i class="material-icons">close</i>
                   </button>
                   
                   <span><i class="material-icons" data-notify="icon">announcement</i> {{ $error }} </span>
                    </div>
                   @endforeach
               </div>
               @endif