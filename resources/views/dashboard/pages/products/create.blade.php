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
            <p>
                @if(session()->has('created_product_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('created_product_successfully') }}
                    </div>
                @elseif(session()->has('deleted_product_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('deleted_product_successfully') }}
                    </div>
                @endif
            </p>
            <h4 class="card-title">إضافة منتج</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Product</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('products.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.products.form')
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
