@extends('layouts.dashboard.master')
@inject('Unit_model', 'App\Models\Unit')
@section('title', 'إضافة وحدة')
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('units.index') }}">االوحدات</a></li>
@endsection
@section('title-heading_2', 'إضافة وحدة')
@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">إضافة وحدة</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Unit</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('units.store')}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @include('dashboard.pages.units.form')
                            <input type="submit" value="إضافة" class="btn btn-success border-info text-light me-2">
                            <input type="reset" value="إعادة ضبط" class="btn btn-light border-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
