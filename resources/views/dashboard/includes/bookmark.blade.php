<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                {{-- <h3>@yield('title-heading')</h3> --}}
                <ol class="breadcrumb">
                    @if(Route::is('dashboard'))
                        @yield('title-heading_1')
                    @endif
                    @if(!Route::is('dashboard'))
                        <li class="breadcrumb-item active"><a href="{{ route('dashboard') }}">الصفحة الرئيسية</a></li>
                        @yield('title-heading_1')
                        <li class="breadcrumb-item active">@yield('title-heading_2')</li>
                    @endif
                </ol>
            </div>

            @yield('bookmark')

        </div>
    </div>
</div>
