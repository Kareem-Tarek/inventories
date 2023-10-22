@extends('layouts.dashboard.master')

@section('title')
    ({{ $Company_model->title }})
@endsection
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">{{__('Companies')}}</a></li>
@endsection
@section('title-heading_2')
    ({{ $Company_model->title }})
@endsection

@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    (<span class="fw-bold">{{ $Company_model->title }}</span>)
                </h4>
                <div class="col-sm-12 col-xl-12 xl-100">

                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('companies.update', $Company_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @method('PUT')
                                @include('dashboard.companies.form')
                                <input type="submit" value="{{__('Edit')}}" class="btn btn-secondary border-info text-light me-2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
