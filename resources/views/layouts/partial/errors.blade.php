@i    @if(session('successMsg'))

           
<div class="alert alert-success alert-with-icon" data-notify="container">
   <i class="material-icons" data-notify="icon">check</i>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <i class="material-icons">close</i>
   </button>
   <span data-notify="message">{{ session('successMsg') }}</span>
</div>
@endif