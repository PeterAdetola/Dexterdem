
<!-- Start Modal -->
<div id="sort_feature-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Re-arrange Feature</h6>

      <div class="progress collection">
        <div id="sort_feature-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('sort.feature') }}">
            @csrf
      <ul id="simpleList" class="collapsible">
        @foreach($features as $feature)
         <li class="hoverable" id="feature-{{ $feature->id }}">
          <input type="hidden" name="order[]" value="{{ $feature->id }}">
          <div class="collapsible-header" style="padding: 5px">
              <img width="50px" height="50px" src="{{ url($feature->image) }}" class="circle ml-5" />
              <span class="right card-title ml-10 mt-2">{{ $feature->name }}</span>
              <i class="material-icons right mt-2" style="margin-left: auto;">drag_handle</i>
          </div>
         </li>
        @endforeach
      </ul>
      <!-- </div> -->
      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="sortFeatureBtn" type="submit" class="btn-large right">Re-arrange</button>
      </div>
    </form>
  </div>
</div>


<script> 
  // Simple list
Sortable.create(simpleList, {
  animation: 150 
}); 
    document.getElementById("sortFeatureBtn").addEventListener("click", function() {
      var preloader = document.getElementById("sort_feature-preloader");
      preloader.style.display = "block";
    });
</script>
<!-- /End Modal -->