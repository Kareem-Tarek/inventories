@extends('layouts.dashboard.master')

@section('title')
تعديل المنتج ({{ $Product_model->title }})
@endsection
@section('title-heading')
تعديل المنتج ({{ $Product_model->title }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">المنتج</h4>
            <p class="card-description">
                تعديل المنتج (<span class="fw-bold">{{ $Product_model->title }}</span>)
            </p>
            <p>
                @if(session()->has('updated_product_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('updated_product_successfully') }}
                    </div>
                @endif
            </p>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Product</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('products.update', $Product_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.pages.products.form')
                            <input type="submit" value="تعديل" class="btn btn-primary border-info text-light me-2">
                            <a href="{{ route('products.index') }}" class="btn btn-secondary text-light me-2">الرجوع الي القائمة الرئيسية</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection