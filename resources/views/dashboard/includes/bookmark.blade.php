<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          {{-- <h3>@yield('title-heading')</h3> --}}
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('dashboard') }}">الصفحة الرئيسية</a></li>
            @if(!Route::is('dashboard'))
                {{-- <li class="breadcrumb-item">@yield('title-heading_1')</li> --}}
                @yield('title-heading_1')
                <li class="breadcrumb-item active">@yield('title-heading_2')</li>
            @endif
          </ol>
        </div>
        {{-- <div class="col-sm-6">
          <!-- Bookmark Start-->
          <div class="bookmark">
            <ul>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
              <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
              <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                <form class="form-inline search-form" action="">
                  <div class="form-group form-control-search">
                    <input type="text" placeholder="Search..">
                  </div>
                </form>
              </li>
            </ul>
          </div>
          <!-- Bookmark Ends-->
        </div> --}}
      </div>
    </div>
  </div>
