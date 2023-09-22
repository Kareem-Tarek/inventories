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

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>Categories</span></a>
              <div class="mega-menu-container menu-content">
                <div class="container">
                  <div class="row">
                    <div class="mega-box">
                      <div class="link-section">
                            <a class="text-muted" href="{{ route('categories.index') }}">All Categories</a>
                            <a class="text-muted" href="{{ route('categories.create') }}">Create a Category</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="package"></i><span>Sub-Categories</span></a>
              <div class="mega-menu-container menu-content">
                <div class="container">
                  <div class="row">
                    <div class="mega-box">
                      <div class="link-section">
                            <a class="text-muted" href="{{ route('subcategories.index') }}">All Sub-Categories</a>
                            <a class="text-muted" href="{{ route('subcategories.create') }}">Create a Sub-Category</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="codepen"></i><span>Products</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('products.index') }}">All Products</a>
                              <a class="text-muted" href="{{ route('products.create') }}">Create a product</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="dollar-sign"></i><span>Prices</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('prices.index') }}">All Prices</a><br>
                              <a class="text-muted" href="{{ route('prices.create') }}">Create a Price</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Companies</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('companies.index') }}">All Companies</a>
                              <a class="text-muted" href="{{ route('companies.create') }}">Create a Company</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="list"></i><span>Types</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('types.index') }}">All Types</a><br>
                              <a class="text-muted" href="{{ route('types.create') }}">Create a Type</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="menu"></i><span>Units</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('units.index') }}">All Units</a><br>
                              <a class="text-muted" href="{{ route('units.create') }}">Create a Unit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="corner-up-right"></i><span>Exported Products</span></a>
                <div class="mega-menu-container menu-content">
                  <div class="container">
                    <div class="row">
                      <div class="mega-box">
                        <div class="link-section">
                              <a class="text-muted" href="{{ route('exported-products.index') }}">All Exported Products</a>
                              <a class="text-muted" href="{{ route('exported-products.create') }}">Create an Exported Product</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </li>

            <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>
