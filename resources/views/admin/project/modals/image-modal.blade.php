

<!-- Start Modal -->
<div id="image-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h5 class="card-title ml-2" style="display:inline-block;">Update Image</h5>

      <div class="progress collection">
        <div id="save_image-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.hero') }}" enctype="multipart/form-data" >    
            @csrf
            @method('PATCH')
  @if($pageHero)  
            <input name="id" type="hidden" value="{{ $pageHero->id }}" />
  @endif
            <input name="page" type="hidden" value="project" />

              <div class="col s12">
                <div class="row">
                   
    <div class="row">
      <div class="input-field col s12">
              <div class="col s10 mt-1">
                  <input name="image" type="file" id="input-file-now-custom-2" data-default-file="{{ $noImage ? '' : url($pageHero->image) }}" class="dropify" data-height='200' required /> 
              </div> 
      </div>
                  <small class="errorTxt3  grey-text">Upload image in JPG (2880 x 1297)</small>  
    </div>
      <div class="divider mb-2"></div>

    <div class="col s12">   
      <button  id="saveImageBtn" type="submit" class="modal-action waves-effect waves-red btn-large"> Save </button>
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
    document.getElementById("saveImageBtn").addEventListener("click", function() {
      var preloader = document.getElementById("save_image-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->