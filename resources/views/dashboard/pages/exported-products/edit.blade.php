@extends('layouts.dashboard.master')

@section('title')
تعديل منصرف المخزن ({{ $ExportedProduct_model->title }})
@endsection
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('exported-products.index') }}">منصرف المخازن</a></li>
@endsection
@section('title-heading_2')
تعديل منصرف المخزن ({{ $ExportedProduct_model->title }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">
                تعديل منصرف المخزن (<span class="fw-bold">{{ $ExportedProduct_model->title }}</span>)
            </h4>
            <p>
                @if(session()->has('updated_exportedProduct_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('updated_exportedProduct_successfully') }}
                    </div>
                @endif
            </p>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Category</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('exported-products.update', $ExportedProduct_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.pages.exported-products.form')
                            <input type="submit" value="تعديل" class="btn btn-secondary border-info text-light me-2">
                            <a href="{{ route('exported-products.index') }}" class="btn btn-info text-light me-2">الرجوع الي القائمة الرئيسية</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
