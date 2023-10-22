@extends('layouts.dashboard.master')
@inject('Category_model', 'App\Models\Category')
@section('title', __('Add category'))
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">{{__('Categories')}}</a></li>
@endsection
@section('title-heading_2', __('Add category'))
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('Add category')}}</h4>
                <div class="col-sm-12 col-xl-12 xl-100">

                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('categories.store')}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @include('dashboard.pages.categories.form')
                                <input type="submit" value="{{__('Create')}}" class="btn btn-primary border-info text-light me-2">
                                <input type="reset" value="{{__('Reset')}}" class="btn btn-light border-secondary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
