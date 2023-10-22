@extends('layouts.dashboard.master')

@section('title')
تعديل كلمة المرور ({{ $user->name }})
@endsection

@section('title-heading_2')
تعديل كلمة المرور ({{ $user->name }})
@endsection

@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">الملف الشخصي</h4>
            <p class="card-description">
                تعديل كلمة المرور (<span class="fw-bold">{{ $user->name }}</span>)
            </p>

            <div class="col-sm-12 col-xl-12 xl-100">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('user-profile.changePassword', $user->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PATCH')
                            @include('dashboard.user-profile.form-change-password')
                            <input type="submit" value="تأكيد" class="btn btn-primary border-info text-light me-2">
                            <a href="{{ route('user-profile.index', $user->id) }}" class="btn btn-secondary text-light me-2">الرجوع الي الملف الشخصي</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
