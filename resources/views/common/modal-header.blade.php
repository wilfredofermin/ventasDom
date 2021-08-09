{{-- <div wire:ignore.self class="modal face" tabindex="-1" role="dialog" id="theModal">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{$componentName}} | {{$select_id > 0 ? 'Editar' : 'Agregar'}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> --}}

        <div wire:ignore.self class="modal" tabindex="-1" role="dialog" id="theModal">
          <div class="modal-dialog md-modal " role="document">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title">{{$componentName}} | {{$select_id > 0 ? 'Editar' : 'Agregar'}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
               
            