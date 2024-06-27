@php 
  $route = Route::current()->getName();
@endphp
<!-- Start Modal -->
<div id="update_value{{ $route == 'view.services_extra' ? '': $value->id }}" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Update Value</h6>

      <div class="progress collection">
        <div id="save_value{{ $route == 'view.services_extra' ? '': $value->id }}-preloader" class="indeterminate" style="display:none;
        border:2px #ebebeb solid"></div>
      </div>
      
      
            
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.value') }}">
            <input type="hidden" name="id" value="{{ $route == 'view.services_extra' ? '': $value->id }}" />
            @csrf

            <div class="row">
                  <div class="col s12 input-field">
                    <input id="value" name="value" value="{{ $route == 'view.services_extra' ? '': $value->value }}" type="text" class="validate" required />
                    <label for="value">Value</label>
                  </div>
            </div>

              <div class="divider mt-1 mb-2"></div>   
                <button  id="saveValueBtn{{ $route == 'view.services_extra' ? '': $value->id }}" type="submit" class="modal-action waves-effect waves-green btn-large">Save</button>
                <a href="javascript:void(0)" class="btn-large btn-flat modal-close">Cancel</a>
          </form>
          <!-- users edit account form ends -->
        </div>

      </div>
      <!-- </div> -->
  </div>
</div>
<script type="text/javascript"> 
      // Preloader Script
document.getElementById("saveValueBtn{{ $route == 'view.services_extra' ? '': $value->id }}").addEventListener("click", function() {
  var preloader = document.getElementById("save_value{{ $route == 'view.services_extra' ? '': $value->id }}-preloader");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->