
<!-- Start Modal -->
<div id="add-image-modal" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add an image</h6>

      <div class="progress collection">
        <div id="add-projectImg-preloader" class="indeterminate"  style="display:none;
        border:2px #ebebeb solid"></div>
      </div>
      
      
            
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.project_img') }}" enctype="multipart/form-data">
            <input type="hidden" name="project_id" value="{{ $project->id }}">
            @csrf

            <div class="row">
              <div class="col s8 mt-1">
                  <input name="image" type="file" id="input-file-now-custom-2"  class="dropify" data-height='200' required />  
              @error('image')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror   
              </div>
      <div class="row">
        <div class="input-field col s12">
              <input id="caption" name="caption" type="text"/>
              <label for="caption">Caption</label>
        </div>
      </div>


            </div>
              <div class="divider mt-1 mb-2"></div>   
                <button  id="addImageBtn" type="submit" class="modal-action waves-effect waves-red btn-large">Save</button>
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
document.getElementById("addImageBtn").addEventListener("click", function() {
  var preloader = document.getElementById("add-projectImg-preloader");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->