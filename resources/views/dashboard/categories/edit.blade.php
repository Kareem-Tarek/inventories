@extends('layouts.dashboard.master')

@section('title')
    تعديل الفئة ({{ $Category_model->title }})
@endsection
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">الفئات</a></li>
@endsection
@section('title-heading_2')
    تعديل الفئة ({{ $Category_model->title }})
@endsection

@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    تعديل الفئة (<span class="fw-bold">{{ $Category_model->title }}</span>)
                </h4>
                <div class="col-sm-12 col-xl-12 xl-100">
                    {{-- <div class="card-header pb-0">
                        <h5>Add New Category</h5>
                    </div> --}}
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('categories.update', $Category_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @method('PUT')
                                @include('dashboard.categories.form')
                                <input type="submit" value="تعديل" class="btn btn-secondary border-info text-light me-2">
                                <a href="{{ route('categories.index') }}" class="btn btn-info text-light me-2">الرجوع الي القائمة الرئيسية</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
