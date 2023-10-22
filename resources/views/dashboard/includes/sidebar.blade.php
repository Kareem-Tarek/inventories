<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="{{ route('user-profile.index', auth()->user()->id) }}"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
        {{-- <div class="badge-bottom"><span class="badge badge-primary">جديد</span></div> --}}
        <a href="{{ route('user-profile.index', auth()->user()->id) }}">
            <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6></a>
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
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li>
                        <a class="nav-link menu-title link-nav" href="{{ route('dashboard') }}"><i data-feather="home"></i><span>الصفحة الرئيسية</span></a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>عناصر لوحة القيادة</h6>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box"></i><span>{{__('Categories')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('categories.index') }}">{{__('All Categories')}}</a><br>
                                            <a class="text-muted" href="{{ route('categories.create') }}">{{__('Add New Category')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="package"></i><span>{{__('Sub Categories')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('subcategories.index') }}">{{__('All Sub Categories')}}</a><br>
                                            <a class="text-muted" href="{{ route('subcategories.create') }}">{{__('Add New Sub Category')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="menu"></i><span>{{__('Units')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('units.index') }}">{{__('All Units')}}</a><br>
                                            <a class="text-muted" href="{{ route('units.create') }}">{{__('Add New Unit')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="corner-up-right"></i><span>{{__('Stored Expenses')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('exported-products.index') }}">{{__('All Stored Expenses')}}</a>
                                            <a class="text-muted" href="{{ route('exported-products.create') }}">{{__('Add New Stored Expenses')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>{{__('Companies')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('companies.index') }}">{{__('All Companies')}}</a><br>
                                            <a class="text-muted" href="{{ route('companies.create') }}">{{__('Add New Companies')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="list"></i><span>{{__('Types')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('types.index') }}">{{__('All Types')}}</a><br>
                                            <a class="text-muted" href="{{ route('types.create') }}">{{__('Add New Type')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>{{__('Prices Names')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('names-prices.index') }}">{{__('All')}} {{__('Prices Names')}}</a><br>
                                            <a class="text-muted" href="{{ route('names-prices.create') }}">{{__('Add New Price Name')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="codepen"></i><span>{{__('Products')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('products.index') }}">{{__('All Products')}}</a><br>
                                            <a class="text-muted" href="{{ route('products.create') }}">{{__('Add New Product')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="dollar-sign"></i><span>{{__('Prices')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('prices.index') }}">{{__('All Prices')}}</a><br>
                                            <a class="text-muted" href="{{ route('prices.create') }}">{{__('Add New Price')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>{{__('Clients')}}</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('clients.index') }}">{{__('All Clients')}}</a><br>
                                            <a class="text-muted" href="{{ route('clients.create') }}">{{__('Add New Client')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="mega-menu">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="clipboard"></i><span>الفواتير</span></a>
                        <div class="mega-menu-container menu-content">
                            <div class="container">
                                <div class="row">
                                    <div class="mega-box">
                                        <div class="link-section">
                                            <a class="text-muted" href="{{ route('invoices.index') }}">جميع الفواتير</a><br>
                                            <a class="text-muted" href="{{ route('invoices.create') }}">إنشاء فاتورة</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
