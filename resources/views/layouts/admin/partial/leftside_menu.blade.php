            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="fa-solid fa-house text-danger"></i><span
                                        class="badge rounded-pill bg-info float-end">04</span>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="index.html" key="t-default">Default</a></li>
                                </ul>
                            </li>

                            {{-- package --}}

                             {{-- manage template --}}
                             <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-package"></i>
                                    <span key="t-dashboards">Manage Template</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('admin/manage/template/page') }}" key="t-horizontal">Add tamplate</a></li>
                                        {{-- <li><a href="{{ url('admin/') }}" key="t-horizontal">Organization Package
                                            list</a></li> --}}
                                </ul>
                            </li>
                            
                            

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" key="t-login">Login</a></li>
                                    <li><a href="auth-login-2.html" key="t-login-2">Login 2</a></li>
                                    <li><a href="auth-register.html" key="t-register">Register</a></li>
                                    <li><a href="auth-register-2.html" key="t-register-2">Register 2</a></li>
                                    <li><a href="auth-recoverpw.html" key="t-recover-password">Recover Password</a>
                                    </li>
                                    <li><a href="auth-recoverpw-2.html" key="t-recover-password-2">Recover Password
                                            2</a></li>
                                    <li><a href="auth-lock-screen.html" key="t-lock-screen">Lock Screen</a></li>
                                    <li><a href="auth-lock-screen-2.html" key="t-lock-screen-2">Lock Screen 2</a></li>
                                    <li><a href="auth-confirm-mail.html" key="t-confirm-mail">Confirm Email</a></li>
                                    <li><a href="auth-confirm-mail-2.html" key="t-confirm-mail-2">Confirm Email 2</a>
                                    </li>
                                    <li><a href="auth-email-verification.html" key="t-email-verification">Email
                                            verification</a></li>
                                    <li><a href="auth-email-verification-2.html" key="t-email-verification-2">Email
                                            Verification 2</a></li>
                                    <li><a href="auth-two-step-verification.html" key="t-two-step-verification">Two
                                            Step Verification</a></li>
                                    <li><a href="auth-two-step-verification-2.html"
                                            key="t-two-step-verification-2">Two Step Verification 2</a></li>
                                </ul>
                            </li>

                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
