@extends('layouts.dashboard.master')

@section('title')
تعديل النوع ({{ $Type_model->title }})
@endsection
@section('title-heading_1')
<li class="breadcrumb-item"><a href="{{ route('types.index') }}">الأنواع</a></li>
@endsection
@section('title-heading_2')
تعديل النوع ({{ $Type_model->title }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">
                تعديل النوع (<span class="fw-bold">{{ $Type_model->title }}</span>)
            </h4>
            <p>
                @if(session()->has('updated_type_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('updated_type_successfully') }}
                    </div>
                @endif
            </p>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New Type</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('types.update', $Type_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.pages.types.form')
                            <input type="submit" value="تعديل" class="btn btn-dark border-info text-light me-2">
                            <a href="{{ route('types.index') }}" class="btn btn-secondary text-light me-2">الرجوع الي القائمة الرئيسية</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
