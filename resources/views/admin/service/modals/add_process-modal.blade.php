
<!-- Start Modal -->
<div id="add_process" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Update Process</h6> 

              <div class="divider mt-1 mb-2"></div>      
      
            
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.process') }}">
            @csrf

            <div class="row">
                  <div class="col s12 input-field">
                    <input id="process" name="process" type="text" class="validate" required />
                    <label for="process">Process</label>
                  </div>
            </div>
                   
            <div class="row">
              <h6 class="card-title ml-3">Description</h6>
              <div class="input-field col s12">
                <textarea name="description" id="myeditorinstance" class="materialize-textarea" required> 
                </textarea>
              </div>
            </div>

      <div class="progress collection">
        <div id="save_process-preloader" class="indeterminate" style="display:none;
        border:2px #ebebeb solid"></div>
      </div>  
                <button  id="saveProcessBtn" type="submit" class="modal-action waves-effect waves-green btn-large">Save</button>
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
document.getElementById("saveProcessBtn").addEventListener("click", function() {
  var preloader = document.getElementById("save_process-preloader");
  preloader.style.display = "block";
});
</script>
<!-- /End Modal -->