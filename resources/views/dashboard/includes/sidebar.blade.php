<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="{{ route('user-profile.index', auth()->user()->id) }}"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
      {{-- <div class="badge-bottom"><span class="badge badge-primary">جديد</span></div> --}}
      <a href="{{ route('user-profile.index', auth()->user()->id) }}"><h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6></a>
      {{-- <p class="mb-0 font-roboto">Human Resources Department</p> --}}
      {{-- <ul>
        <li><span class="h6"><span class="counter">١٩.٨</span> ألف</span>
          <p><b>أتابع</b></p>
        </li>
        <li><span class="h6">٢</span>
          <p><b>خبرة (سنوات)</b></p>
        </li>
        <li><span class="h6"><span class="counter">٩٥.٢</span> ألف</span>
          <p><b>متابع</b></p>
        </li>
      </ul> --}}
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

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>الفئات</span></a>
              <div class="mega-menu-container menu-content">
                <div class="container">
                  <div class="row">
                    <div class="mega-box">
                      <div class="link-section">
                            <a class="text-muted" href="{{ route('categories.index') }}">جميع الفئات</a><br>
                            <a class="text-muted" href="{{ route('categories.create') }}">إنشاء فئة</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="package"></i><span>الفئات الفرعية</span></a>
              <div class="mega-menu-container menu-content">
                <div class="container">
                  <div class="row">
                    <div class="mega-box">
                      <div class="link-section">
                            <a class="text-muted" href="{{ route('subcategories.index') }}">جميع الفئات الفرعية</a><br>
                            <a class="text-muted" href="{{ route('subcategories.create') }}">إنشاء فئة فرعية</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="codepen"></i><span>المنتجات</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('products.index') }}">جميع المنتجات</a><br>
                              <a class="text-muted" href="{{ route('products.create') }}">إنشاء منتج</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="dollar-sign"></i><span>الأسعار</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('prices.index') }}">جميع الأسعار</a><br>
                              <a class="text-muted" href="{{ route('prices.create') }}">إنشاء سعر</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>الشركات</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('companies.index') }}">جميع الشركات</a><br>
                              <a class="text-muted" href="{{ route('companies.create') }}">إنشاء شركة</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="list"></i><span>الأنواع</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('types.index') }}">جميع الأنواع</a><br>
                              <a class="text-muted" href="{{ route('types.create') }}">إنشاء نوع</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="menu"></i><span>الوحدات</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('units.index') }}">جميع الوحدات</a><br>
                              <a class="text-muted" href="{{ route('units.create') }}">إنشاء وحدة</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="corner-up-right"></i><span>منصرف المخزن</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('exported-products.index') }}">جميع منصرفات المخزن</a>
                              <a class="text-muted" href="{{ route('exported-products.create') }}">إنشاء منصرف المخزن</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="clipboard"></i><span>الفواتير</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('invoices.index') }}">جميع الفواتير</a><br>
                              <a class="text-muted" href="{{ route('invoices.create') }}">إنشاء فتورة</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            {{-- <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li> --}}
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>
