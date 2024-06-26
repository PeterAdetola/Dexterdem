
<!-- Start Modal -->
<div id="edit{{ $projectImage->id }}" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Update Image</h6>

      <div class="progress collection">
        <div id="preloader{{$projectImage->id}}" class="indeterminate"  style="display:none;
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.project_imgs', $projectImage->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <div class="col s8 mt-1">
                  <input name="image" type="file" id="input-file-now-custom-2" data-default-file="{{ url($projectImage->image) }}" class="dropify" data-height='200' />  
              @error('image')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror 
                  <small class="errorTxt3  grey-text">Upload image in JPG (600 x 600)</small>   
              </div> 
      <div class="row">
        <div class="input-field col s12">
              <input id="caption" name="caption" type="text" value="{{ $projectImage->caption }}" class="validate" />
              <label for="caption">Caption</label>
        </div>
      </div>


            </div>
              <div class="divider mt-1 mb-2"></div>   
                <button  id="updateImageBtn{{ $projectImage->id }}" type="submit" class="modal-action waves-effect waves-green btn-large">Update</button>
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
document.getElementById("updateImageBtn{{$projectImage->id}}").addEventListener("click", function() {
  var preloader = document.getElementById("preloader{{$projectImage->id}}");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->