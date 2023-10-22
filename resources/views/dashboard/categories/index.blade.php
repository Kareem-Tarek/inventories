@extends('layouts.dashboard.master')
@section('title', __('Categories'))
@section('title-heading_2', __('Categories'))
@section('bookmark')
    <div class="col-sm-6">
        <!-- Bookmark Start-->
        <div class="bookmark">
            <ul>
                <li>
                    <a href="{{route('categories.create')}}" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="plus"></i></a>
                </li>
            </ul>
        </div>
        <!-- Bookmark Ends-->
    </div>
@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">{{__('Categories')}} ({{\App\Models\Category::count() }})</h2>
                <p>@include('dashboard.includes.alert')</p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table table-bordered border border-5 table-hover mb-0">
                                    <thead>
                                    <tr class="h6">

                                        <th class="text-center">{{__('Title')}}</th>
                                        <th class="text-center">{{__('Description')}}</th>
                                        <th class="text-center">{{__('Created At')}}</th>
                                        <th class="text-center">{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                        <tr>
                                            <td>{{ $category->title }}</td>
                                            <td class="text-md-center">{{ \Illuminate\Support\Str::limit($category->description)}}</td>
                                            <td>{{ $category->created_at->translatedFormat('d M Y') }}</td>
                                            <td>
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
