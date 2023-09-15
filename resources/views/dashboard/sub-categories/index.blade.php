@extends('layouts.dashboard.master')
@section('title', 'جميع الفئات الفرعية')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="mb-2 page-title">الفئات الفرعية</h2>
        <p>
            @if(session()->has('created_subcategory_successfully'))
                <div class="alert alert-success text-center">
                    <a href="javascript:void(0);" class="close-btn text-decoration-none text-danger" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                    {{ session()->get('created_subcategory_successfully') }}
                </div>
            @elseif(session()->has('deleted_subcategory_successfully'))
                <div class="alert alert-success text-center">
                    <a href="javascript:void(0);" class="close-btn text-decoration-none text-danger" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                    {{ session()->get('deleted_subcategory_successfully') }}
                </div>
            @endif
        </p>
        {{-- <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p> --}}
        <div class="row my-4">
          <!-- Small table -->
          <div class="col-md-12">
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                        <table class="table table-bordered table-hover mb-0">
                            <thead class="thead-dark">
                            <tr class="lead">
                                <th>بطاقة التعريف (<b>ID#</b>)</th>
                                <th>العنوان</th>
                                <th>الوصف</th>
                                <th class="w-25">الفئة (فئة الفئة الفرعية)</th>
                                <th>تاريخ الإنشاء</th>
                                <th>تاريخ التعديل</th>
                                <th>الأجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($subCategories as $subCategory)
                            {{-- @forelse ( $subCategories as $subCategory) --}}
                            <tr>
                                <td>{{ $subCategory->id }}</td>
                                <td>
                                    {{-- <div class="progress progress-sm" style="height:3px">
                                        <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                    {{ $subCategory->title }}
                                </td>
                                <td>{{ $subCategory->description ?? 'لا يوجد' }}</td>
                                <td>{{ $subCategory->category->title }}</td>
                                <td>{{ $subCategory->created_at }}</td>
                                <td>{{ $subCategory->updated_at ?? 'لا يوجد' }}</td>
                                <td>
                                    {{-- <a href="">edit</a>
                                    <a href="">delete</a> --}}
                                    <div class="d-flex justify-content-center align-items-center text-center">
                                        <form action="{{ route('subcategories.destroy', $subCategory->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <a href="{{ route('subcategories.edit', $subCategory->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">
                                                <svg viewBox="0 0 24 24" width="18" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                تعديل
                                            </a>
                                            <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $subCategory->title }})?');" type="submit" title="{{'Delete '."- ($subCategory->title)"}}">
                                                <svg viewBox="0 0 24 24" width="18" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                حذف
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                        <div class="alert alert-danger text-center">
                            <span class="h6">لا توجد فئات فرعية موجودة في قاعدة البيانات حتى الآن!</span>
                        </div>
                    @endforelse
                            </tbody>
                        </table>
              </div>
            </div>
          </div> <!-- simple table -->
        </div> <!-- end section -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection