@extends('layouts.dashboard.master')

@section('title')
تعديل ({{ $NamePrice_model->name }})
@endsection
@section('title-heading_1')

@endsection
@section('title-heading_2')
تعديل ({{ $NamePrice_model->name }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">
                تعديل (<span class="fw-bold">{{ $NamePrice_model->name }}</span>)
            </h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('names-prices.update', $NamePrice_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.names-prices.form')
                            <input type="submit" value="{{__('Edit')}}" class="btn btn-secondary border-info text-light me-2">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
