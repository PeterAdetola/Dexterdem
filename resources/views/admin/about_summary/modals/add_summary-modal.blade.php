
<!-- Start Modal -->
<div id="add_abtSum-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">About Summary</h6>

      <div class="progress collection">
        <div id="add_summary-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('update.about_summary') }}">
      <!-- <input type="hidden" name="form" value="sum-text"> -->
    @csrf
    @method('PATCH')

    <div class="row">
      <div class="input-field col s12">
        <textarea name="summary"  id="myeditorinstance" class="materialize-textarea" ></textarea>
      </div>
    </div>
      <!-- </div> -->
      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="addSummaryBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
    document.getElementById("addSummaryBtn").addEventListener("click", function() {
      var preloader = document.getElementById("add_summary-preloader");
      preloader.style.display = "block";
    });  
</script>
<!-- /End Modal -->