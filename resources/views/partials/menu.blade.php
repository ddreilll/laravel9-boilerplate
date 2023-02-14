<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/mapmh-logo.png') }}" alt="App Logo" class="brand-image img-circle mr-3">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title_short') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{-- <li>
                    <select class="searchable-field form-control">

                    </select>
                </li> --}}

                <li class="nav-header">DASHBOARD</li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}"
                        href="{{ route('admin.home') }}">
                        <i class="nav-icon fa-duotone fa-chart-network text-sm"></i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>

                @if (Gate::check('product_management_access') ||
                    Gate::check('mapmh_item_access') ||
                    Gate::check('product_unit_of_measurement_access') ||
                    Gate::check('product_category_access') ||
                    Gate::check('product_tag_access'))
                    <li class="nav-header">MENU</li>
                @endif

                @if (Gate::check('user_alert_access'))
                    <li class="nav-header">TOOLS</li>
                @endif

                @can('user_alert_access')
                    <li class="nav-item">
                        <a href="{{ route('admin.user-alerts.index') }}"
                            class="nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'active' : '' }}">
                            <i class="nav-icon fa-duotone fa-bell-on text-sm"></i>
                            <p>
                                {{ trans('cruds.userAlert.title') }}
                            </p>
                        </a>
                    </li>
                @endcan

                @if (Gate::check('user_management_access'))
                    <li class="nav-header">SETTINGS</li>
                @endif

                @can('user_management_access')
                    <li
                        class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }} {{ request()->is('admin/audit-logs*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is('admin/permissions*') ? 'active' : '' }} {{ request()->is('admin/roles*') ? 'active' : '' }} {{ request()->is('admin/users*') ? 'active' : '' }} {{ request()->is('admin/audit-logs*') ? 'active' : '' }}"
                            href="#">
                            <i class="text-sm nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.permissions.index') }}"
                                        class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-unlock-alt text-sm">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.roles.index') }}"
                                        class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="text-sm nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}"
                                        class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="text-sm nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route('admin.audit-logs.index') }}"
                                        class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                        <i class="text-sm nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
