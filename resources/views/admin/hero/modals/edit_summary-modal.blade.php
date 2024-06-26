
<!-- Start Modal -->
<div id="edit_summary-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Edit Hero Heading</h6>

      <div class="progress collection">
        <div id="edit_summary-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>

    <form method="POST" action="{{ route('update.hero') }}">
    @csrf
    @method('PATCH')

    <div class="row">
      <div class="input-field col s12">
        <textarea name="summary" id="myeditorinstance" class="materialize-textarea"  >{{ $heroSection->summary }}</textarea>
      </div>
    </div>

      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="editSummaryBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
    document.getElementById("editSummaryBtn").addEventListener("click", function() {
      var preloader = document.getElementById("edit_summary-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->