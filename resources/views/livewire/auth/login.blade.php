<section>
    <div class="page-header section-height-75 background bg-purple bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-2">
                        <div class="card card-plain mt-6">
                            <img class="align-content-sm-center" src="{{ asset('assets/img/logo-app.png') }}" alt="">
                        </div>
                        {{--<div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Welcome back') }}</h3>
                        </div>--}}
                        <div class="card-body pt-5">
                            <div class="col-12 me-auto px-0">
                                <a class="btn btn-light btn-lg w-100" href="#">
                                    {{ __('MIGRANTES') }}
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="col-12 me-auto px-0">
                                <a class="btn btn-light btn-lg w-100" href="#">
                                    {{ __('ORGANIZACIONES') }}
                                </a>
                            </div>
                        </div>
                        <div class="card-footer text-light text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('Recuperar contraseña') }} <a
                                    href="#"
                                    class="text-info text-gradient font-weight-bold">{{ __('aquí') }}</a></small>
                            <p class="mb-4 text-light text-sm mx-auto">
                                {{ __(' Registrate') }}
                                <a href="#"
                                    class="text-info text-gradient font-weight-bold">{{ __('aquí') }}</a>
                            </p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button btn btn-light btn-lg bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        LOGIN
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-expanded="true" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="card-body pt-0">
                                            <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                                <div class="mb-3">
                                                    <label for="email">{{ __('Email') }}</label>
                                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                                        <input wire:model="email" id="email" type="email" class="form-control"
                                                               placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                                    </div>
                                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password">{{ __('Contraseña') }}</label>
                                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                                        <input wire:model="password" id="password" type="password" class="form-control"
                                                               placeholder="Password" aria-label="Password"
                                                               aria-describedby="password-addon">
                                                    </div>
                                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                                           id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">{{ __('Recordar') }}</label>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit"
                                                            class="btn bg-gradient-secondary w-100 mt-4 mb-0">{{ __('Entrar') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ url('auth/google') }}">
                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                            </a>
                        </div>
                    </div>
                </div>
                {{--<div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url('../assets/img/arms.png')"></div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
                </div>
            </div>
        </div>
    </div>
</section>
