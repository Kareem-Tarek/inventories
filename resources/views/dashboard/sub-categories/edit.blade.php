@extends('layouts.dashboard.master')

@section('title')
تعديل الفئة ({{ $subCategory_model->title }})
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">الفئات الفرعية</h4>
            <p class="card-description">
                تعديل الفئة الفرعية (<span class="fw-bold">{{ $subCategory_model->title }}</span>)
            </p>
            <p>
                @if(session()->has('updated_subcategory_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-danger" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('updated_subcategory_successfully') }}
                    </div>
                @endif
            </p>
            <div class="col-sm-12 col-xl-12 xl-100">
                {{-- <div class="card-header pb-0">
                    <h5>Add New SubCategory</h5>
                </div> --}}
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('subcategories.update', $subCategory_model->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PUT')
                            @include('dashboard.sub-categories.form')
                            <input type="submit" value="تعديل" class="btn btn-primary border-info text-light me-2">
                            <a href="{{ route('subcategories.index') }}" class="btn btn-secondary text-light me-2">الرجوع الي القائمة الرئيسية</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
