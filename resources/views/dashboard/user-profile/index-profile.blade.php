@extends('layouts.dashboard.master')
@section('title') الملف الشخصي ({{ $user->name }}) @endsection
@section('title-heading_2') الملف الشخصي ({{ $user->name }}) @endsection
@section('main-content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">بياناتك (<span class="fw-bold">{{ $user->name }}</span>)</h4>
            <div class="col-sm-12 col-xl-12 xl-100">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        @include('dashboard.user-profile.form-view')
                        <a href="{{ route('user-profile.edit', $user->id) }}" class="btn btn-secondary text-light me-2">تعديل حسابك الشخصي؟</a>
                        <a href="{{ route('user-profile.changePasswordView', $user->id) }}" class="btn btn-warning text-light me-2">تريد تغيير كلمة المرور؟</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
