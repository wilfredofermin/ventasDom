
    <div class="input-group mb-4 col-sm-6 mt-3 mb-1">
        <div class="input-group-prepend">
            <span class="form-control-rounded-left input-group-text" id="basic-addon1"><i class="flaticon-bell-19"></i></span>
        </div>
        <input wire:model.debounce.800ms="search" type="text" class="form-control-rounded-right form-control" placeholder="Buscar una categoria en particular" aria-label="notification" aria-describedby="basic-addon1">
    </div>
