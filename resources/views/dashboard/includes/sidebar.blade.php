<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="{{ route('user-profile.index', auth()->user()->id) }}"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
      <div class="badge-bottom"><span class="badge badge-primary">جديد</span></div>
      <a href="{{ route('user-profile.index', auth()->user()->id) }}"><h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6></a>
      {{-- <p class="mb-0 font-roboto">Human Resources Department</p> --}}
      <ul>
        <li><span class="h6"><span class="counter">١٩.٨</span> ألف</span>
          <p><b>أتابع</b></p>
        </li>
        <li><span class="h6">٢</span>
          <p><b>خبرة (سنوات)</b></p>
        </li>
        <li><span class="h6"><span class="counter">٩٥.٢</span> ألف</span>
          <p><b>متابع</b></p>
        </li>
      </ul>
    </div>
    <nav>
      <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">
          <ul class="nav-menu custom-scrollbar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li><a class="nav-link menu-title link-nav" href="{{ route('dashboard') }}"><i data-feather="home"></i><span>الصفحة الرئيسية</span></a></li>
            <li class="sidebar-main-title">
              <div>
                <h6>عناصر لوحة القيادة</h6>
              </div>
            </li>
            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
              <div class="mega-menu-container menu-content">
                <div class="container">
                  <div class="row">
                    <div class="col mega-box">
                      <div class="link-section">
                        <div class="submenu-title">
                          <h5>Error Page</h5>
                        </div>
                        <div class="submenu-content opensubmegamenu">
                          <ul>
                            <li><a href="error-page1.html" target="_blank">Error page 1</a></li>
                            <li><a href="error-page2.html" target="_blank">Error page 2</a></li>
                            <li><a href="error-page3.html" target="_blank">Error page 3</a></li>
                            <li><a href="error-page4.html" target="_blank">Error page 4                         </a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col mega-box">
                      <div class="link-section">
                        <div class="submenu-title">
                          <h5> Authentication</h5>
                        </div>
                        <div class="submenu-content opensubmegamenu">
                          <ul>
                            <li><a href="login.html" target="_blank">Login Simple</a></li>
                            <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                            <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                            <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                            <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                            <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                            <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                            <li><a href="sign-up-one.html" target="_blank">Register with Bg Image                              </a></li>
                            <li><a href="sign-up-two.html" target="_blank">Register with Bg video                          </a></li>
                            <li><a href="unlock.html">Unlock User</a></li>
                            <li><a href="forget-password.html">Forget Password</a></li>
                            <li><a href="creat-password.html">Creat Password</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col mega-box">
                      <div class="link-section">
                        <div class="submenu-title">
                          <h5>Coming Soon</h5>
                        </div>
                        <div class="submenu-content opensubmegamenu">
                          <ul>
                            <li><a href="comingsoon.html">Coming Simple</a></li>
                            <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                            <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col mega-box">
                      <div class="link-section">
                        <div class="submenu-title">
                          <h5>Email templates</h5>
                        </div>
                        <div class="submenu-content opensubmegamenu">
                          <ul>
                            <li><a href="basic-template.html">Basic Email</a></li>
                            <li><a href="email-header.html">Basic With Header</a></li>
                            <li><a href="template-email.html">Ecomerce Template</a></li>
                            <li><a href="template-email-2.html">Email Template 2</a></li>
                            <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                            <li><a href="email-order-success.html">Order Success      </a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user-check"></i><span>Job Search</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="job-cards-view.html">Cards view</a></li>
                <li><a href="job-list-view.html">List View</a></li>
                <li><a href="job-details.html">Job Details</a></li>
                <li><a href="job-apply.html">Apply</a></li>
              </ul>
            </li>
            <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>
