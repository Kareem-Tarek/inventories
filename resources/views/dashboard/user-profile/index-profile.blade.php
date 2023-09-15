@extends('layouts.dashboard.master')

@section('title')
الملف الشخصي ({{ $user->name }})
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
            <h4 class="card-title">الملف الشخصي</h4>
            <p class="card-description">
                بياناتك (<span class="fw-bold">{{ $user->name }}</span>)
            </p>
            <p>
                @if(session()->has('updated_user_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-danger" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('updated_user_successfully') }}
                    </div>
                @endif
            </p>
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
