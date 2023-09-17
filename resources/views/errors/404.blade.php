{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

@extends('layouts.dashboard.master')
@section('title', '404')
@section('main-content')
<div class="wrapper vh-100">
    <div class="align-items-center h-100 d-flex w-50 mx-auto">
      <div class="mx-auto text-center">
        <h1 class="display-1 m-0 font-weight-bolder text-muted" style="font-size:80px;">404</h1>
        <h1 class="mb-1 text-muted font-weight-bold">عذرا!</h1>
        <h6 class="mb-3 text-muted">لا يمكن العثور على الصفحة.</h6>
        <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary px-5">العودة إلى لوحة القيادة الرئيسية.</a>
      </div>
    </div>
  </div>
@endsection


