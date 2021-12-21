<div>
    <div class="card-group">
        <div class="card">
            <!-- TODO: -->
            @foreach(\App\Models\Commerce::all() as $ent)
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                <a href="javascript:;" class="d-block">
                    <img src="{{ asset('storage/ent') . '/' . $ent->logo }}" class=" text-center mx-auto d-block border-radius-lg">
                </a>
            </div>

            <div class="card-body pt-2">
                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{$ent->address}}</span>
                <a href="javascript:;" class="card-title h5 d-block text-darker">
                    {{$ent->name}}
                </a>
                <p class="card-description mb-4">
                    {{$ent->description}}.
                </p>
                <div class="author align-items-center">
                    <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-neutral btn-simple btn-lg mb-0 px-2">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
                @endforeach
        </div>

    </div>
</div>
