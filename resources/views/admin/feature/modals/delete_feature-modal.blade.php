
<!-- Start Modal -->
<div id="delete_modal{{ $feature->id }}" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Delete Feature</h6>

      <div class="progress collection">
        <div id="delete_modal{{ $feature->id }}" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('delete.feature', $feature->id ) }}" enctype="multipart/form-data">
            @csrf


              <div class="col s12">
                <div class="row">

                  <div class="col s12 input-field">
                    <input name="image" type="file" data-default-file="{{ url($feature->image) }}" id="input-file-now-custom-2" class="dropify" data-height='150' disabled /> 
                  </div>

                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" value="{{ $feature->name }}" disabled  />
                    <label for="name">Name</label>
                  </div>  

                  <div class="col s12 mt-7">   
                    <button  id="delete_modal{{ $feature->id }}Btn" type="submit" class="modal-action waves-effect waves-red btn-large red"> Delete Feature </button>
                    <a href="javascript:void(0)" class="btn-large btn-flat modal-close">Cancel</a>
                  </div>

              </div>
            </div>
          </form>
          <!-- users edit account form ends -->
        </div>

      </div>
      <!-- </div> -->
  </div>
</div>
<script>  
    document.getElementById("delete_modal{{ $feature->id }}Btn").addEventListener("click", function() {
      var preloader = document.getElementById("delete_modal{{ $feature->id }}-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->