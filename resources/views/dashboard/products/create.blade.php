@extends('layouts.dashboard.master')
@inject('Product_model', 'App\Models\Product')
@section('title', 'إضافة منتج')
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('products.index') }}">المنتجات</a></li>
@endsection
@section('title-heading_2', 'إضافة منتج')
@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
           <h4 class="card-title">إضافة منتج</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Product</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('products.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.products.form')
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
