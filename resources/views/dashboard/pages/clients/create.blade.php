@extends('layouts.dashboard.master')
@inject('Client_model', 'App\Models\Client')
@section('title', 'إضافة عميل')
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('clients.index') }}">العملاء</a></li>
@endsection
@section('title-heading_2', 'إضافة عميل')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">إضافة عميل</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Client</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('clients.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.clients.form')
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

