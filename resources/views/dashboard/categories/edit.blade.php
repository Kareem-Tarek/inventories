@extends('layouts.dashboard.master')

@section('title')({{ $Category_model->title }})@endsection
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">{{__('Categories')}}</a></li>
@endsection
@section('title-heading_2')({{ $Category_model->title }})@endsection
@section('bookmark')
    <div class="col-sm-6">
        <!-- Bookmark Start-->
        <div class="bookmark">
            <ul>
                <li>
                    <a href="{{route('categories.create')}}" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="plus"></i></a>
                </li>
            </ul>
        </div>
        <!-- Bookmark Ends-->
    </div>
@endsection
@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    (<span class="fw-bold">{{ $Category_model->title }}</span>)
                </h4>
                <div class="col-sm-12 col-xl-12 xl-100">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('categories.update', $Category_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @method('PUT')
                                @include('dashboard.categories.form')
                                <input type="submit" value="{{__('Edit')}}" class="btn btn-secondary border-info text-light me-2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
