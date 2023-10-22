@extends('layouts.dashboard.master')
@inject('ExportedProduct_model', 'App\Models\ExportedProduct')
@section('title', __('Add Stored Expense'))
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('exported-products.index') }}">{{__('Stored Expenses')}}</a></li>
@endsection
@section('title-heading_2', __('Add Stored Expense'))
@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('Add Stored Expense')}}</h4>
                <div class="col-sm-12 col-xl-12 xl-100">
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('exported-products.store')}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @include('dashboard.exported-products.form')
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
