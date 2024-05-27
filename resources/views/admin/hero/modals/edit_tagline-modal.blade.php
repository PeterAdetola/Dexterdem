
<!-- Start Modal -->
<div id="edit_tagline-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Tagline</h6>

      <div class="progress collection">
        <div id="edit_tagline-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>

    <form method="POST" action="{{ route('update.hero') }}">
    @csrf
    @method('PATCH')    
      <div class="row">
        <div class="input-field col s12">
              <input id="tagline" name="tagline" type="text" value="{{ $heroSection->tagline }}" class="validate"  required />
              <label for="heading">Tagline</label>
        </div>
      </div>

      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="editTaglineBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
    document.getElementById("editTaglineBtn").addEventListener("click", function() {
      var preloader = document.getElementById("edit_tagline-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->