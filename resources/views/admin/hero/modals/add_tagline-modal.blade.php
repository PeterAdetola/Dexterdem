
<!-- Start Modal -->
<div id="add_tagline-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Tagline</h6>

      <div class="progress collection">
        <div id="add_tagline-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      

    <form method="POST" action="{{ route('update.hero') }}">
            @csrf
            @method('PATCH')
      <div class="row">
        <div class="input-field col s12">
              <input id="tagline" name="tagline" type="text" class="validate"  required />
              <label for="heading">Tagline</label>
        </div>
      </div>

      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="addTaglineBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
    document.getElementById("addTaglineBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add_tagline-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->