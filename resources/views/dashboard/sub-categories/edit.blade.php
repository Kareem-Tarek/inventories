@extends('layouts.dashboard.master')
@section('title'){{ $subCategory_model->title }}@endsection
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">{{__('Categories')}}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('subcategories.index') }}">{{__('Sub Categories')}}</a></li>
@endsection
@section('title-heading_2')
    تعديل الفئة ({{ $subCategory_model->title }})
@endsection

@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    تعديل الفئة الفرعية (<span class="fw-bold">{{ $subCategory_model->title }}</span>)
                </h4>

                <div class="col-sm-12 col-xl-12 xl-100">

                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('subcategories.update', $subCategory_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @method('PUT')
                                @include('dashboard.sub-categories.form')
                                <input type="submit" value="{{__('Edit')}}" class="btn btn-success border-info text-light me-2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
