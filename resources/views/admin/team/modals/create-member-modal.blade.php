
<!-- Start Modal -->
<div id="create-member-modal" class="modal" style="padding:0.2em;">
    <div class="modal-content">
      <h6 class="card-title ml-2" style="display:inline-block;">Add a Team Member</h6>

      <div class="progress collection">
        <div id="create-member-preloader" class="indeterminate"  style="display:none;
        border:2px #ebebeb solid"></div>
      </div>
      
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form method="POST" action="{{ route('save.member') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
              <div class="col s12 m12 l5 mt-3">
                  <input name="image" type="file" id="input-file-now-custom-2" class="dropify" data-height='250' required />  
              @error('image')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror   
              </div>


              <div class="col s12 m7 mt-2">
                <div class="row">

                  <div class="col s12 input-field mt-1">
                    <input id="name" name="name" type="text" class="validate" 
                      data-error=".errorTxt3" required />
                    <label for="name">Full Name</label>
                    @error('name')
                    <small class="errorTxt3 red-text">{{ $message }}*</small>
                    @enderror
                  </div>

                  <div class="col s12 input-field mt-1">
                    <input id="role" name="role" type="text" class="validate" 
                      data-error=".errorTxt2" required />
                    <label for="role">Role/Office</label>
                    @error('role')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div>   

                  <div class="col s12 input-field mt-1">
                    <input id="qualificatn" name="qualificatn" type="text" class="validate" 
                      data-error=".errorTxt2" />
                    <label for="role">Qualification</label>
                    @error('qualificatn')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div> 

                  <div class="col s12 input-field mt-1">
                    <input id="linked_in" name="linked_in" type="text" class="validate" 
                      data-error=".errorTxt2" />
                    <label for="linked_in">LinkedIn</label>
                    @error('linked_in')
                    <small class="errorTxt3  red-text">{{ $message }}*</small>
                    @enderror
                  </div> 
              
           
              <div class="col s12 mt-2">   
                <button  id="createMemberBtn" type="submit" class="modal-action waves-effect waves-green btn-large">Add Member</button>
                <a href="javascript:void(0)" class="btn-large btn-flat modal-close">Cancel</a>
              </div>     

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
<!-- /End Modal -->