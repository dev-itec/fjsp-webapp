<div>
    @if(Auth::user()->role == '0')
    <div class="alert alert-neutral mx-0" role="alert">
        <span class="text-white d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <span class="btn-inner--icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="btn-inner--text">Añadir </span>
            </button>
        </span>

        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Añadir Contactos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true close-btn">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('form-commerces') }}">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Indique el nombre" wire:model="name">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">RUT</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Indique el nombre" wire:model="rut">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Categoria</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Indique la categoria" wire:model="ngo">
                                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Descripción</label>
                                <input type="textarea" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Describa su emprendimiento" wire:model="name">
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
                        <button type="button" wire:click.prevent="save" class="btn btn-primary close-modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    {{--@php print_r(\App\Models\Commerces::count()) @endphp--}}
    <x-ent.cards></x-ent.cards>
    {{--<nav aria-label="Page navigation example ">
        <ul class="pagination d-flex justify-content-center">
            <li class="page-item">
                <a class="page-link" href="javascript:;" aria-label="Previous">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
            <li class="page-item">
                <a class="page-link" href="javascript:;" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>--}}
</div>
