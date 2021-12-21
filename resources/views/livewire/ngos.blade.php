<div>
    <div class="alert alert-neutral mx-0" role="alert">
        <span class="text-white d-flex justify-content-end">
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <span class="btn-inner--icon">
                    <i class="fas fa-plus"></i>
                </span>
        <span class="btn-inner--text">Añadir Organización</span>
    </button>
        </span>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añadir Organización</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Indique el nombre" wire:model="name">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Representante</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Indique el nombre del representante" wire:model="ngo">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Descripción</label>
                                <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Describa el objetivo" wire:model="name">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput2">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput2"
                                       wire:model="email" placeholder="Introduzca el correo">
                                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                        <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </span>
    </div>
    <x-ent.cards></x-ent.cards>
</div>
