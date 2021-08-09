</div>
<div class="modal-footer">
    <button wire:click.prevent="resetUI()" type="button" class="btn btn-gradient-primary btn-rounded mb-2 mt-2" data-dismiss="modal">
        Cerrar
    </button>

    @if ($select_id < 0) 
        <button wire:click.prevent="store()" type="button" class="btn btn-gradient-primary btn-rounded mb-2 mt-2">
        Guardar
        </button>
        @else
        <button wire:click.prevent="update()" type="button" class="btn btn-gradient-dark btn-rounded mb-2 mt-2">
            Editar
        </button>

        @endif
</div>
</div>
</div>
</div>

