@extends('layouts.dashboard.master')
@section('title', __('Sub Categories'))
@section('title-heading_2', __('Sub Categories'))
@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">{{__(__('Sub Categories'))}} ({{ $subCategories->count() }})</h2>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('subcategories.create') }}" class="btn btn-primary">{{__('Create Sub Categories')}}</a>
                </div>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table table-bordered border border-5 table-hover mb-0 @if($subCategories->count() == 0) d-none @endif">
                                    <thead class="thead-dark">
                                    <tr class="h6 table-secondary">
                                        <th>{{__('Title')}}</th>
                                        <th>{{__('Description')}}</th>
                                        <th class="w-25">{{__('Category')}}</th>
                                        <th>{{__('Created At')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($subCategories as $subCategory)
                                        <tr>

                                            <td>{{ $subCategory->title }}</td>
                                            <td>{{\Illuminate\Support\Str::limit($subCategory->description)}}</td>
                                            <td>{{ $subCategory->category->title ?? __('Not Found')}}</td>
                                            <td>{{ $subCategory->created_at->translatedFormat('d M Y') }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center text-center">
                                                    <form action="{{ route('subcategories.destroy', $subCategory->id)}}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <a href="{{ route('subcategories.edit', $subCategory->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">
                                                            {{__('Edit')}}
                                                        </a>
                                                        <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $subCategory->title }})?');" type="submit" title="{{'Delete '."- ($subCategory->title)"}}">
                                                            {{__('Delete')}}
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger text-center">
                                            <span class="h6">{{__('There is no data yet.')}}</span>
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="pagination justify-content-center pagination-primary">
                            {{$subCategories->links('pagination::bootstrap-4')}}
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
