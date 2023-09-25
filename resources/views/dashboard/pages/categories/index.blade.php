@extends('layouts.dashboard.master')
@section('title', 'جميع الفئات')
@section('title-heading_2', 'جميع الفئات')
@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">الفئات ({{\App\Models\Category::count() }})</h2>
                <p>@include('dashboard.includes.alert')</p>
                {{-- <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p> --}}
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table table-bordered border border-5 table-hover mb-0">
                                    <thead>
                                    <tr class="h6">
                                        <th>#</th>
                                        <th class="text-center">العنوان</th>
                                        <th class="text-center">الوصف</th>
                                        <th class="text-center">تاريخ الإنشاء</th>
                                        <th class="text-center">الأجراءات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ Str::limit($category->description, 100, '...')}}</td>
                                            <td>{{ $category->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                {{-- <a href="">edit</a>
                                                <a href="">delete</a> --}}
                                                <div class="d-flex justify-content-center align-items-center text-center">
                                                    <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">{{__('Edit')}}</a>
                                                        <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $category->title }})?');" type="submit" title="{{'Delete '."- ($category->title)"}}">{{__('Delete')}}</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">
                                                <div class="alert alert-danger text-center">
                                                    <span class="h6">{{__('There is no data yet.')}}</span>
                                                </div>
                                            </td>
                                        </tr>
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
