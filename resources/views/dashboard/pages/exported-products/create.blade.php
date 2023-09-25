@extends('layouts.dashboard.master')
@inject('ExportedProduct_model', 'App\Models\ExportedProduct')
@section('title', 'إضافة منصرف المخزن')
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('exported-products.index') }}">منصرفات المخزن</a></li>
@endsection
@section('title-heading_2', 'إضافة منصرف المخزن')
@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">إضافة منصرف المخزن</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Category</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('exported-products.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.exported-products.form')
                            <input type="submit" value="إضافة" class="btn btn-primary border-info text-light me-2">
                            <input type="reset" value="إعادة ضبط" class="btn btn-light border-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
