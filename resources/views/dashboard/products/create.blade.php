@extends('layouts.dashboard.master')
@inject('Product_model', 'App\Models\Product')
@section('title', __('Add Product'))
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{__('Products')}}</a></li>
@endsection
@section('title-heading_2', __('Add Product'))
@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('Add Product')}}</h4>
                <div class="col-sm-12 col-xl-12 xl-100">

                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('products.store')}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @include('dashboard.products.form')
                                <input type="submit" value="{{__('Add')}}" class="btn btn-primary border-info text-light me-2">
                                <input type="reset" value="{{__('Reset')}}" class="btn btn-light border-secondary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
