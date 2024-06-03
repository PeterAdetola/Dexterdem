
<!-- Start Modal -->
<div id="edit_img_two-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Image Two</h6>

      <div class="progress collection">
        <div id="edit_img_two-preloader" class="indeterminate"  style="display:none; 
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
                  <input name="imageTwo" data-default-file="{{ url($heroSection->imageTwo) }}"  type="file" id="input-file-now-custom-2" class="dropify" data-height='200' />  
                  <small class="errorTxt3  grey-text">Upload image in JPG (526 x 408)</small>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <select name="captionTwo" class="select2" value="{{ $heroSection->captionTwo }}">
  @php
    $services = getServices();
  @endphp
  @if (count($services) > 0)
                  <option value="{{ $heroSection->captionTwo }}">{{ $heroSection->captionTwo }}</option>
  @foreach($services as $service) 
                    <option value="{{ $service->name }}">{{ $service->name }}</option>
  @endforeach
  @else
                    <option value="">No entry</option>
  @endif
                  </select>
                </div>
                <div class="col s12">   
                  <button  id="addImgTwoBtn" type="submit" class="modal-action waves-effect waves-green btn-large">Save</button>
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
    document.getElementById("addImgTwoBtn").addEventListener("click", function() {
      var preloader = document.getElementById("edit_img_two-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->