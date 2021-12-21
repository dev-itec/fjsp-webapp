<!--<div>
{{--    <i class="fa fa-user me-sm-1 {{ in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : '' }}"></i>--}}

    <li class="nav-item px-3 d-flex align-items-center">
    </li>
    <li class="nav-item dropdown pe-2 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user cursor-pointer"></i>
        </a>
        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                        <div class="my-auto">
                            <img src="{{ asset('storage/users-avatar') . '/' . Auth::user()->avatar }}" class="avatar avatar-sm  me-4 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">{{ Auth::user()->name.' '.Auth::user()->last_name }}</span>
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                                <i class="fa fa-clock me-1"></i>
                                {{ Auth::user()->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                    <div class="my-auto">
                        <i class="fa fa-user cursor-pointer"></i>
                    </div>
                    <div class="d-flex flex-column justify-content-center"
                         href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <h6 class="text-sm font-weight-normal mb-1">
                            <span class="d-sm-inline d-none {{ in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : '' }}" wire:click="logout">&nbsp;&nbsp;Sign Out</span>
                        </h6>
                    </div>
                    </div>
                </a>
            </li>
        </ul>
    </li>
</div>-->
<div>
    <i class="fa fa-user me-sm-1 {{ in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : '' }}"></i>
    <span class="d-sm-inline d-none {{ in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : '' }}" wire:click="logout">Sign Out</span>
</div>
