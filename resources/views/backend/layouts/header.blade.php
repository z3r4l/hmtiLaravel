<!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header">
    <div class="brand-logo"><a href="#"><b><img src="{{ asset('../../assets/images/logoHMTI.svg') }}" width="50" alt="">
            </b><span class="brand-title text-white">HMTI Ibnu Sina</span></a>
    </div>
    <div class="nav-control">
        <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content">
        <div class="header-left">
            <ul>
                <li class="icons position-relative"><a href="javascript:void(0)"><i
                            class="icon-magnifier f-s-16"></i></a>
                    <div class="drop-down animated bounceInDown">
                        <div class="dropdown-content-body">
                            <div class="header-search" id="header-search">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="icon-magnifier"></i></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <ul>

                <li class="icons">
                    <a href="javascript:void(0)" class="log-user">
                        <img src="{{ asset('../../assets/images/logoHMTI.svg') }}" alt=""> <span>HMTI UIS</span> <i
                            class="fa fa-caret-down f-s-14" aria-hidden="true"></i>
                    </a>
                    <div class="drop-down dropdown-profile animated bounceInDown">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="javascript:void()"><i class="icon-user"></i> <span>My
                                            Profile</span></a>
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <div class="d-inline">
                                            <i class="icon-power d-inline"></i>
                                            <button type="submit"
                                                class="ms-3 text-muted bg-white border-0 ">Logout</button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--**********************************
            Header end
        ***********************************-->