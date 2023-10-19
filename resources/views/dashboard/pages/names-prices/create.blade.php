@extends('layouts.dashboard.master')
@inject('NamePrice_model', 'App\Models\NamePrice')
@section('title'){{__('Create')}} {{__('Price Name')}}@endsection
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('names-prices.index') }}">{{__('Prices Names')}}</a></li>
@endsection
@section('title-heading_2'){{__('Create')}} {{__('Price Name')}}@endsection
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">إضافة فئة</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('names-prices.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.names-prices.form')
                            <input type="submit" value="إضافة" class="btn btn-primary border-info text-light me-2">
                            <input type="reset" value="إعادة ضبط" class="btn btn-light border-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
