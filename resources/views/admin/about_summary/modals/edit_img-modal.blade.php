
<!-- Start Modal -->
<div id="edit_img-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add Home Slide</h6>

      <div class="progress collection">
        <div id="edit_img-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.about_summary') }}" enctype="multipart/form-data">
            <!-- <input type="hidden" name="form" value="img-caption"> -->
    @csrf
    @method('PATCH')

            <div class="row">
              <div class="col s12 m12 mb-2">
                  <input name="image" data-default-file="{{ url($aboutSum->image) }}" type="file" id="input-file-now-custom-2" class="dropify" data-height='200' />  
                  @error('image')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror 
                  <small class="errorTxt3  grey-text">Upload image in JPG (1144 x 1300)</small>    
              </div>
              <div class="row">
                <!-- <div class="input-field col s12">
                  <input placeholder="Caption" name="caption" type="text" value="{{-- $aboutSum->caption --}}">
                </div> -->
                <div class="col s12">   
                  <button  id="editImageBtn" type="submit" class="modal-action waves-effect waves-green btn-large">Save</button>
                </div> 
              </div>
            </div>
          </form>
          <!-- users edit account form ends -->
        </div>
      </div>
  </div>
</div>

<script>
    document.getElementById("editImageBtn").addEventListener("click", function() {
      var preloader = document.getElementById("edit_img-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->