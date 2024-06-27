

<!-- Start Modal -->
<div id="heading-modal" class="modal" style="padding:1em;">
    <div class="modal-content">
      <h5 class="card-title ml-2" style="display:inline-block;">Update Heading</h5>
      <div class="divider mb-3"></div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.hero') }}"> 
            @csrf
            @method('PATCH')  
  @if($pageHero)  
            <input name="id" type="hidden" value="{{ $pageHero->id }}" />
  @endif
            <input name="page" type="hidden" value="service" />

              <div class="col s12">
                <div class="row">
                   
    <div class="row">
      <h6 class="card-title">Heading</h6>
      <div class="input-field col s12">
        <textarea name="heading" id="myeditorinstance" class="materialize-textarea" required>
        {{ empty($pageHero->heading) ? '' : $pageHero->heading }}  
        </textarea>
      </div>
    </div>
                  
    <div class="row">
      <h6 class="card-title">Summary</h6>
      <div class="input-field col s12">
        <textarea name="summary" id="myeditorinstance" class="materialize-textarea" required>
        {{ empty($pageHero->summary) ? '' : $pageHero->summary }}            
        </textarea>
      </div>
    </div> 

      <div class="progress collection">
        <div id="save_heading-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>

    <div class="col s12">   
      <button  id="saveHeadingBtn" type="submit" class="modal-action waves-effect waves-red btn-large"> Save </button>
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
    document.getElementById("saveHeadingBtn").addEventListener("click", function() {
      var preloader = document.getElementById("save_heading-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->