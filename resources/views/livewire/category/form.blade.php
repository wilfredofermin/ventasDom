@include('common.modal-header')
<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="input-group">
                <div class="input-group-preprend">
                    <span class="fas fa-edit">
                    </span>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="flaticon-bell-19"></i></span>
                    </div>
                    <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej. Cursos" autofocus>
                </div>
            </div>
            @error('name') <spam class="text-danger er">{{$message}}</spam>@enderror
            <div class="widget-content widget-content-area">
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="flaticon-bell-19"></i></span>
                    </div>
                    <input type="file" wire:model.lazy="image" class="form-control" aria-describedby="basic-addon1" accept="image/x-png, image/gif, image/jpeg">
                </div>
                <!-- <label class="custom-file-laber">Imagen {{$image}}</label> -->
                @error('image') <spam class="text-danger er">{{$message}}</spam>@enderror
            </div>
        </div>
        
    </div>
</div>
@include('common.modal-footer')