@extends('layouts.dashboard.master')
@inject('Type_model', 'App\Models\Type')
@section('title', __('Add Types'))
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('types.index') }}">{{__('Types')}}</a></li>
@endsection
@section('title-heading_2', __('Add Types'))
@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('Add Types')}}</h4>
                <div class="col-sm-12 col-xl-12 xl-100">

                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('types.store')}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @include('dashboard.types.form')
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
