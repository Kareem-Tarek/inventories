@extends('layouts.dashboard.master')
@inject('subCategory_model', 'App\Models\SubCategory')
@section('title', 'إضافة فئة فرعية')
@section('title-heading', 'إضافة فئة فرعية')
@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">الفئات الفرعية</h4>
            <p class="card-description">إضافة فئة فرعية</p>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New SubCategory</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('subcategories.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.sub-categories.form')
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
