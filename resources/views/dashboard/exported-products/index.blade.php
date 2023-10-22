@extends('layouts.dashboard.master')
@section('title', __('Stored Expenses'))
@section('title-heading_2', __('Stored Expenses'))
@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title"> {{__('Stored Expenses')}} ({{ $exportedProducts->count() }})</h2>
                <p>@include('dashboard.includes.alert')</p>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('exported-products.create') }}" class="btn btn-primary">{{__('Add Stored Expense')}}</a>
                </div>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table table-bordered border border-5 table-hover mb-0 @if($exportedProducts->count() == 0) d-none @endif">
                                    <thead class="thead-dark">
                                    <tr class="h6 table-secondary">
                                        <th>{{__('Title')}}</th>
                                        <th>{{__('Description')}}</th>
                                        <th>{{__('Amount')}}</th>
                                        <th>{{__('Created At')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($exportedProducts as $exportedProduct)
                                        <tr>
                                            <td>{{ $exportedProduct->title }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($exportedProduct->description)}}</td>
                                            <td>{{ $exportedProduct->amount }}</td>
                                            <td>{{ $exportedProduct->created_at->translatedFormat('d M Y') }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center text-center">
                                                    <form action="{{ route('exported-products.destroy', $exportedProduct->id)}}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <a href="{{ route('exported-products.edit', $exportedProduct->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">
                                                            {{__('Edit')}}
                                                        </a>
                                                        <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $exportedProduct->title }})?');" type="submit" title="{{'Delete '."- ($exportedProduct->title)"}}">
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
                            {{$exportedProducts->links('pagination::bootstrap-4')}}
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
