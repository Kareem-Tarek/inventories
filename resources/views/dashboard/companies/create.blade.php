@extends('layouts.dashboard.master')
@inject('Company_model', 'App\Models\Company')
@section('title', __('Add Company'))
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">{{__('Companies')}}</a></li>
@endsection
@section('title-heading_2', __('Add Company'))
@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('Add Company')}}</h4>
                <div class="col-sm-12 col-xl-12 xl-100">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('companies.store')}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @include('dashboard.companies.form')
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
