<nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header">
        <a class="fw-semibold text-dual" href="{{route('dashboard')}}">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">OneUI</span>
        </a>
        <div>
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                data-action="dark_mode_toggle">
                <i class="far fa-moon"></i>
            </button>
            <div class="dropdown d-inline-block ms-1">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-brush"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0"
                    aria-labelledby="sidebar-themes-dropdown">
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light"
                        href="javascript:void(0)">
                        <span>Sidebar Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark"
                        href="javascript:void(0)">
                        <span>Sidebar Dark</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light"
                        href="javascript:void(0)">
                        <span>Header Light</span>
                    </a>
                    <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark"
                        href="javascript:void(0)">
                        <span>Header Dark</span>
                    </a>
                </div>
            </div>
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close"
                href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
        </div>
    </div>
    <div class="js-sidebar-scroll">
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{route('index')}}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">User Interface</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-energy"></i>
                        <span class="nav-main-link-name">Blocks</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_styles.html">
                                <span class="nav-main-link-name">Styles</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_options.html">
                                <span class="nav-main-link-name">Options</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_forms.html">
                                <span class="nav-main-link-name">Forms</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_themed.html">
                                <span class="nav-main-link-name">Themed</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_api.html">
                                <span class="nav-main-link-name">API</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
