
<!-- Start Modal -->
<div id="delete_modal{{ $stat->id }}" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Delete Stat</h6>

      <div class="progress collection">
        <div id="delete_modal{{ $stat->id }}" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('delete.stat', $stat->id ) }}" >
            @csrf


              <div class="col s12">
                <div class="row">

                  <div class="col s12 input-field">
                    <input id="key" name="key" type="text" value="{{ $stat->key }}" disabled  />
                    <label for="key">Key</label>
                    @error('key')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field">
                    <input id="value" name="value" type="text" value="{{ $stat->value }}" disabled  />
                    <label for="value">Value</label>
                    @error('value')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>  

                  <div class="col s12 mt-7">   
                    <button  id="delete_modal{{ $stat->id }}Btn" type="submit" class="modal-action waves-effect waves-red btn-large red"> Delete Stat </button>
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
    document.getElementById("delete_modal{{ $stat->id }}Btn").addEventListener("click", function() {
      var preloader = document.getElementById("delete_modal{{ $stat->id }}-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->