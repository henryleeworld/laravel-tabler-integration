<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    
                    <li class="nav-item @if(request()->routeIs('admin.home')) active @endif">
                        <a class="nav-link" href="{{ route('admin.home') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                    </li>
                    @can('users_manage')
                    <li class="nav-item dropdown {{ request()->is('admin/permissions*') || request()->is('admin/roles*') || request()->is('admin/users*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle {{ request()->is('admin/permissions*') || request()->is('admin/roles*') || request()->is('admin/users*') ? 'show' : '' }}" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M13 5h8"></path>
                                    <path d="M13 9h5"></path>
                                    <path d="M13 15h8"></path>
                                    <path d="M13 19h5"></path>
                                    <rect x="3" y="4" width="6" height="6" rx="1"></rect>
                                    <rect x="3" y="14" width="6" height="6" rx="1"></rect>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ trans('cruds.user_management.title') }}
                            </span>
                        </a>
                        <div class="dropdown-menu {{ request()->is('admin/permissions*') || request()->is('admin/roles*') || request()->is('admin/users*') ? 'show' : '' }}">
                            <a class="dropdown-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}" >
                                {{ trans('cruds.permission.title') }}
                            </a>
                            <a class="dropdown-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}" >
                                {{ trans('cruds.role.title') }}
                            </a>
                            <a class="dropdown-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}" >
                                {{ trans('cruds.user.title') }}
                            </a>
                        </div>
                    </li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
</div>