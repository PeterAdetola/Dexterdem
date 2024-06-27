
<!-- Start Modal -->
<div id="edit_intro-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Intro</h6>

      <div class="progress collection">
        <div id="edit_intro-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('update.team_intro') }}">
            @csrf


              <div class="col s12">
                <div class="row">
                   
                      <div class="row">
                        <div class="input-field col s12">
                          <h6 class="card-title">Heading</label>
                          <textarea name="heading" id="intro_heading" ></textarea>
                        </div>
                      </div>

                  
                      <div class="row">
                        <div class="input-field col s12">
                          <h6 class="card-title">Intro</label>
                          <textarea name="intro" id="intro_content" ></textarea>
                        </div>
                      </div> 

                <div class="col s12 mt-7">   
                  <button  id="editIntroBtn" type="submit" class="modal-action waves-effect waves-green btn-large"> Edit Intro </button>
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
    document.getElementById("editIntroBtn").addEventListener("click", function() {
      var preloader = document.getElementById("edit_intro-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->