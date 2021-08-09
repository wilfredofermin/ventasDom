<div>
    <div class="statbox widget box box-shadow layout-spacing">
        <div class="widget-heading mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h4>{{ $componentName }} | {{$pageTitle}}</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                @include('common.searchbox')
                <button class="btn btn-outline-dark mb-4 mr-2 float-sm-right ml-2" data-toggle="modal" data-target="#theModal">Agregar</button>
                <table class="table table-hover mb-2 mt-2">
                    <thead>
                        {{-- <input type="submit" name="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded"> --}}
                        <tr>
                            <th>Descripcion</th>
                            <th class="text-center" style="width:10%">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>
                                <div class="d-flex ">
                                    <div class="usr-img-frame mr-4 rounded-circle ">
                                        <img alt="admin-profile" class="img-fluid rounded-circle" src="{{ $d->image }}">
                                    </div>
                                    <p class="align-self-center mb-0">{{$d->name}}</p>
                                </div>
                            </td>
                            <td class=" text-center" style="width:10%">
                                <a href="#" wire:click.prevent="edit({{$d->id}})">
                                    <i class="flaticon-edit-4 bg-primary p-1 text-white br-6 mb-1 "></i>
                                </a>
                                <a href="#" wire:click.prevent="destroy({{$d->id}})">
                                    <i class="flaticon-delete bg-danger p-1 text-white br-6 mb-1"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('livewire.category.form')
        </div>
    </div>
    {{ $data->links('pagination-links') }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        window.livewire.on('show-modal', msg => {

            $('#theModal').modal('show');
        });

        window.livewire.on('close-modal', msg => {

            $('#theModal').modal('hide');
        });
    })
</script>
