@extends('layouts.dashboard.master')
@section('title', 'جميع الوحدات')
@section('title-heading_2', 'جميع الوحدات')
@section('main-content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="mb-2 page-title">الوحدات ({{ $units->count() }})</h2>
        <p>
            @if(session()->has('created_unit_successfully'))
                <div class="alert alert-success text-center">
                    <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                    {{ session()->get('created_unit_successfully') }}
                </div>
            @elseif(session()->has('deleted_unit_successfully'))
                <div class="alert alert-success text-center">
                    <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                    {{ session()->get('deleted_unit_successfully') }}
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
                        <table class="table table-bordered border border-5 table-hover mb-0 @if($units->count() == 0) d-none @endif">
                            <thead class="thead-dark">
                            <tr class="h6 table-secondary">
                                <th>بطاقة التعريف (<b>ID#</b>)</th>
                                <th>العنوان</th>
                                <th>تاريخ الإنشاء</th>
                                <th>تاريخ التعديل</th>
                                <th>الأجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($units as $unit)
                            {{-- @forelse ( $units as $unit) --}}
                            <tr>
                                <td>{{ $unit->id }}</td>
                                <td>
                                    {{-- <div class="progress progress-sm" style="height:3px">
                                        <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                    {{ $unit->title }}
                                </td>
                                <td>{{ $unit->created_at }}</td>
                                <td>{{ $unit->updated_at ?? 'لا يوجد' }}</td>
                                <td>
                                    {{-- <a href="">edit</a>
                                    <a href="">delete</a> --}}
                                    <div class="d-flex justify-content-center align-items-center text-center">
                                        <form action="{{ route('units.destroy', $unit->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <a href="{{ route('units.edit', $unit->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">
                                                <svg viewBox="0 0 24 24" width="18" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                تعديل
                                            </a>
                                            <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $unit->title }})?');" type="submit" title="{{'Delete '."- ($unit->title)"}}">
                                                <svg viewBox="0 0 24 24" width="18" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                حذف
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                        <div class="alert alert-danger text-center">
                            <span class="h6">لا توجد وحدات في قاعدة البيانات حتى الآن!</span>
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
