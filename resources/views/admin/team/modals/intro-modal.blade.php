

<!-- Start Modal -->
<div id="intro-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h5 class="card-title ml-2" style="display:inline-block;">Team Intro</h5>
      <div class="divider mb-3"></div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.team_intro') }}">    
            @csrf
            @method('PATCH')

              <div class="col s12">
                <div class="row">
                   
    <div class="row">
      <h6 class="card-title">Heading</h6>
      <div class="input-field col s12">
        <textarea name="heading" id="myeditorinstance" class="materialize-textarea">
        {{ empty($intro->heading) ? '' : $intro->heading }}  
        </textarea>
      </div>
    </div>
                  
    <div class="row">
      <h6 class="card-title">Intro Content</h6>
      <div class="input-field col s12">
        <textarea name="intro" id="myeditorinstance" class="materialize-textarea">
        {{ empty($intro->intro) ? '' : $intro->intro }}            
        </textarea>
      </div>
    </div> 

      <div class="progress collection">
        <div id="add_intro-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>

    <div class="col s12">   
      <button  id="addIntroBtn" type="submit" class="modal-action waves-effect waves-red btn-large"> Add Intro </button>
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
    document.getElementById("addIntroBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add_intro-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->