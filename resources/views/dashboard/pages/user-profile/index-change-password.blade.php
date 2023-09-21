@extends('layouts.dashboard.master')

@section('title')
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
            <p>
                @if(session()->has('password_changed_successfully'))
                    <div class="alert alert-success text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('password_changed_successfully') }}
                    </div>
                @elseif(session()->has('old_req_not_matching_db'))
                    <div class="alert alert-danger text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('old_req_not_matching_db') }}
                    </div>
                @elseif(session()->has('confirm_not_matching_new'))
                    <div class="alert alert-danger text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('confirm_not_matching_new') }}
                    </div>
                @elseif(session()->has('new_is_matching_old'))
                    <div class="alert alert-danger text-center">
                        <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                        {{ session()->get('new_is_matching_old') }}
                    </div>
                @endif
            </p>
            <div class="col-sm-12 col-xl-12 xl-100">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <form action="{{route('user-profile.changePassword', $user->id)}}" class="forms-sample" method="POST" id="alert-form">
                            @csrf
                            @method('PATCH')
                            @include('dashboard.pages.user-profile.form-change-password')
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
