<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('dashboard') }}">
          <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
            <g>
              <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
              <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
              <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
            </g>
          </svg>
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 h5 item-text">لوحة القيادة</span><span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>

      <p class="text-muted nav-heading mt-4 mb-1 h5">
        <span>العناصر</span>
      </p>

      <ul class="navbar-nav flex-fill w-100 mb-2 h6">
        <li class="nav-item dropdown">
          <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">الفئات</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('categories.create') }}"><span class="ml-1 item-text">إنشاء فئة</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="{{ route('categories.index') }}"><span class="ml-1 item-text">قائمة جميع الفئات</span></a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
            <a href="#ui-elements-2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <svg viewBox="0 0 24 24" width="17" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
              <span class="ml-3 item-text">الفئات الفرعية</span>
            </a>
            <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements-2">
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('subcategories.create') }}"><span class="ml-1 item-text">إنشاء فئة فرعية</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-3" href="{{ route('subcategories.index') }}"><span class="ml-1 item-text">قائمة جميع الفئات الفرعية</span></a>
              </li>
            </ul>
          </li>

        {{-- <li class="nav-item w-100">
          <a class="nav-link" href="widgets.html">
            <i class="fe fe-layers fe-16"></i>
            <span class="ml-3 item-text">الفئات الفرعية</span>
            <span class="badge badge-pill badge-primary">New</span>
          </a>
        </li> --}}

        <li class="nav-item dropdown">
          <a href="#ui-elements-3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <svg viewBox="0 0 24 24" width="17" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="15.5"></line><polyline points="22 8.5 12 15.5 2 8.5"></polyline><polyline points="2 15.5 12 8.5 22 15.5"></polyline><line x1="12" y1="2" x2="12" y2="8.5"></line></svg>
            <span class="ml-3 item-text">الوحدات</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements-3">
            <li class="nav-item">
              <a class="nav-link pl-3" href="javascript:void(0);"><span class="ml-1 item-text">إنشاء وحدة</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="javascript:void(0);"><span class="ml-1 item-text">قائمة جميع الوحدات</span></a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a href="#ui-elements-4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">الأنواع</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements-4">
            <li class="nav-item">
              <a class="nav-link pl-3" href="javascript:void(0);"><span class="ml-1 item-text">إنشاء نوع</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="javascript:void(0);"><span class="ml-1 item-text">قائمة جميع الأنواع</span></a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a href="#ui-elements-5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-pie-chart fe-16"></i>
            <span class="ml-3 item-text">الشركات</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements-5">
            <li class="nav-item">
              <a class="nav-link pl-3" href="javascript:void(0);"><span class="ml-1 item-text">إنشاء شركة</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="javascript:void(0);"><span class="ml-1 item-text">قائمة جميع الشركات</span></a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </aside>
