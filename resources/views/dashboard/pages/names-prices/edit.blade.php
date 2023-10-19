@extends('layouts.dashboard.master')

@section('title')
تعديل الفئة ({{ $NamePrice_model->name }})
@endsection
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('categories.index') }}">الفئات</a></li>
@endsection
@section('title-heading_2')
تعديل الفئة ({{ $NamePrice_model->name }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">
                تعديل الفئة (<span class="fw-bold">{{ $NamePrice_model->name }}</span>)
            </h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('names-prices.update', $NamePrice_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.pages.names-prices.form')
                            <input type="submit" value="{{__('Edit')}}" class="btn btn-secondary border-info text-light me-2">
                            <a href="{{ route('namesprices.index') }}" class="btn btn-info text-light me-2">{{__('Back to the main list')}}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
