
<!-- Start Modal -->
<div id="sort_stat-modal" class="modal" style="padding:0.1em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Re-arrange Stat</h6>

      <div class="progress collection">
        <div id="sort_stat-preloader" class="indeterminate"  style="display:none; 
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
    <form method="POST" action="{{ route('sort.stat') }}">
            @csrf
    <table class="subscription-table responsive-table highlight">
               <thead>
                  <tr>
                  </tr>
               </thead>
               <tbody id="simpleList">
        @foreach($stats as $stat)
          <tr class="hoverable">
             <td class="pl-5">{{ $stat->key }}</td>
             <td>{{ $stat->value }}</td>
             <td><i class="material-icons right mt-2" style="margin-left: auto;">drag_handle</i></td>
             <input type="hidden" name="order[]" value="{{ $stat->id }}">
          </tr>          
         @endforeach
               </tbody>
      </table>
      <div class="divider mb-2"></div>
      <div class="row">
        <button  id="sortStatBtn" type="submit" class="btn-large right">Save</button>
      </div>
    </form>
      </div>
  </div>
<script> 
  // Simple list
    Sortable.create(simpleList, {
      animation: 150 
    }); 

    document.getElementById("sortStatBtn").addEventListener("click", function() {
      var preloader = document.getElementById("sort_stat-preloader");
      preloader.style.display = "block";
    });

</script>
</div>
<!-- /End Modal -->


