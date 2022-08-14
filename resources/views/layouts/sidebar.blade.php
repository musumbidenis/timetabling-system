<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/" target="_blank">
            <img src="../assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Timetable System</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                    role="button" aria-expanded="false">
                    <img src="../assets/img/team-3.jpg" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">User One</span>
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="../../pages/authentication/signin/basic.html">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::path() == 'dashboard' ? 'active bg-gradient-primary' : '' }}"
                        href="/dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
            </ul>
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#users" class="nav-link text-white {{ Request::path() == 'users/new_user' || Request::path() == 'users/all_users' ? 'active' : '' }}"
                    aria-controls="page" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">image</i>
                    <span class="nav-link-text ms-2  ps-1"> Users <b class="caret"></b></span>
                </a>
                <div class="collapse {{ Request::path() == 'users/new_user' || Request::path() == 'users/all_users' ? 'show' : '' }}" id="users">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white {{ Request::path() == 'users/all_users' ? 'active bg-gradient-primary' : '' }}"
                                href="/users/all_users">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Reports </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white {{ Request::path() == 'users/new_user' ? 'active bg-gradient-primary' : '' }}"
                                href="/users/new_user">
                                <span class="sidenav-mini-icon"> N </span>
                                <span class="sidenav-normal  ms-2  ps-1"> New User </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <hr class="horizontal light" />
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">SETTINGS</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="https://github.com/creativetimofficial/ct-material-dashboard-pro/blob/master/CHANGELOG.md"
                    target="_blank">
                    <i class="material-icons-round">receipt_long</i>
                    <span class="nav-link-text ms-2 ps-1">Changelog</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
