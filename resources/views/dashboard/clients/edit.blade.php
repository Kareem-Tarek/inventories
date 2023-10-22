@extends('layouts.dashboard.master')

@section('title')
    ({{ $Client_model->name }})
@endsection
@section('title-heading_1')
    <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">العملاء</a></li>
@endsection
@section('title-heading_2')
    ({{ $Client_model->name }})
@endsection

@section('main-content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    (<span class="fw-bold">{{ $Client_model->name }}</span>)
                </h4>

                <div class="col-sm-12 col-xl-12 xl-100">

                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent">
                            <form action="{{route('clients.update', $Client_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                                @csrf
                                @method('PUT')
                                @include('dashboard.clients.form')
                                <input type="submit" value="{{__('Edit')}}" class="btn btn-secondary border-info text-light me-2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
