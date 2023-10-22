@extends('layouts.dashboard.master')
@inject('subCategory_model', 'App\Models\SubCategory')
@section('title', __('Sub Categories'))

@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">{{__('Categories')}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('subcategories.index') }}">{{__('Sub Categories')}}</a></li>
@endsection
@section('title-heading_2', __('Add Sub Category'))
@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('Add Sub Category')}}</h4>
                <div class="col-sm-12 col-xl-12 xl-100">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('subcategories.store')}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @include('dashboard.sub-categories.form')
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
