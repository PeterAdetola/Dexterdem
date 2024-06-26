
<!-- Start Modal -->
<div id="add_img_one-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add Image One</h6>

      <div class="progress collection">
        <div id="add_img_one-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.hero') }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="row">
              <div class="col s12 m12 mb-2">
                  <input name="imageOne"  type="file" id="input-file-now-custom-2" class="dropify" data-height='200' required />  
                  @error('image')
                  <small class="errorTxt3  red-text">{{ $message }}*</small>
                  @enderror  
                  <small class="errorTxt3  grey-text">Upload hero image in JPG (1302 x 1080)</small> 
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <select name="captionOne" class="select2">
  @php
    $service = getServices();
  @endphp
  @if (count($services) > 0)
  @foreach($services as $service) 
                    <option value="square">Square</option>
  @endforeach
  @else
                    <option value="">No entry</option>
  @endif
                  </select>
                </div>
                <div class="col s12">   
                  <button  id="addImgOneBtn" type="submit" class="modal-action waves-effect waves-green btn-large">Save</button>
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
    document.getElementById("addImgOneBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add_img_one-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->