
<!-- Start Modal -->
<div id="edit_modal{{ $feature->id }}" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Feature</h6>

      <div class="progress collection">
        <div id="edit_feature-modal{{ $feature->id }}-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.feature') }}" enctype="multipart/form-data">
          <input name="id" type="hidden" value="{{ $feature->id }}" />
            @csrf


              <div class="col s12">
                <div class="row">

                  <div class="col s12 input-field">
                    <input name="image" type="file" data-default-file="{{ url($feature->image) }}" id="input-file-now-custom-2" class="dropify" data-height='150' />  
                    @error('image')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                    <small class="errorTxt3  grey-text">Upload image in JPG (612 x 411)</small>
                  </div>

                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" value="{{ $feature->name }}" required />
                    <label for="name">Name</label>
                    @error('value')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 mt-7">   
                    <button  id="editFeature{{ $feature->id }}Btn" type="submit" class="modal-action waves-effect waves-green btn-large"> Edit Feature </button>
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
    document.getElementById("editFeature{{ $feature->id }}Btn").addEventListener("click", function() {
      var preloader = document.getElementById("edit_feature-modal{{ $feature->id }}-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->