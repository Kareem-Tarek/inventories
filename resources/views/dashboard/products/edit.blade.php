@extends('layouts.dashboard.master')

@section('title')
{{__('Edit product')}} ({{ $Product_model->title }})
@endsection
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('products.index') }}">المنتجات</a></li>
@endsection
@section('title-heading_2')
{{__('Edit product')}} ({{ $Product_model->title }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">
                {{__('Edit product')}} (<span class="fw-bold">{{ $Product_model->title }}</span>)
            </h4>


            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Product</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('products.update', $Product_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.products.form')
                            <input type="submit" value="تعديل" class="btn btn-secondary border-info text-light me-2">
                            <a href="{{ route('products.index') }}" class="btn btn-info text-light me-2">الرجوع الي القائمة الرئيسية</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection