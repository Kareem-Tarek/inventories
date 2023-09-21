@extends('layouts.dashboard.master')
@inject('Company_model', 'App\Models\Company')
@section('title', 'إضافة شركة')
@section('title-heading', 'إضافة شركة')
@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">الشركات</h4>
            <p class="card-description">إضافة شركة</p>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Company</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('companies.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.companies.form')
                            <input type="submit" value="إضافة" class="btn btn-info border-info text-light me-2">
                            <input type="reset" value="إعادة ضبط" class="btn btn-light border-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
