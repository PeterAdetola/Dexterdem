@if($noImgOne)
      @include('admin.hero.modals.add_img_one-modal')
    @else
      @include('admin.hero.modals.edit_img_one-modal')
    @endif