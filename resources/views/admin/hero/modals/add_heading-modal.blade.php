
<!-- Start Modal -->
<div id="add_heading-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Hero Heading</h6>

      <div class="progress collection">
        <div id="add_heading_one-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      

    <form method="POST" action="{{ route('update.hero') }}">
      <!-- <input type="hidden" name="form" value="add_heading"> -->
            @csrf
            @method('PATCH')

      <div class="row">
        <div class="input-field col s12">
          <textarea name="heading"  id="myeditorinstance" class="materialize-textarea" ></textarea>
        </div>
      </div>

      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="addHeadingBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
    document.getElementById("addHeadingBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add_heading-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->