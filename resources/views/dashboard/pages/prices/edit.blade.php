@extends('layouts.dashboard.master')

@section('title')
تعديل السعر ({{ $Price_model->title }})
@endsection
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('prices.index') }}">الأسعار</a></li>
@endsection
@section('title-heading_2')
تعديل السعر ({{ $Price_model->title }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">
                تعديل السعر (<span class="fw-bold">{{ $Price_model->title }}</span>)
            </h4>
            <p>
                @if(session()->has('updated_price_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('updated_price_successfully') }}
                    </div>
                @endif
            </p>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Price</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('prices.update', $Price_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.pages.prices.form')
                            <input type="submit" value="تعديل" class="btn btn-secondary border-info text-light me-2">
                            <a href="{{ route('prices.index') }}" class="btn btn-info text-light me-2">الرجوع الي القائمة الرئيسية</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
