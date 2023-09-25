@extends('layouts.dashboard.master')
@inject('Company_model', 'App\Models\Company')
@section('title', 'إضافة شركة')
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('companies.index') }}">الشركات</a></li>
@endsection
@section('title-heading_2', 'إضافة شركة')
@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">إضافة شركة</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Company</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('companies.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.companies.form')
                            <input type="submit" value="إضافة" class="btn btn-success border-info text-light me-2">
                            <input type="reset" value="إعادة ضبط" class="btn btn-light border-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
