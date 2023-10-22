@extends('layouts.dashboard.master')
@section('title', 'جميع العملاء')
@section('title-heading_2', 'جميع العملاء')
@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">العملاء ({{\App\Models\Client::count() }})</h2>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('clients.create') }}" class="btn btn-primary">إضافة عميل</a>
                </div>
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
                                        <th class="text-center">{{__('Name')}}</th>
                                        <th class="text-center">{{__('Phone')}}</th>
                                        <th class="text-center">{{__('Email')}}</th>
                                        <th class="text-center">{{__('Created At')}}</th>
                                        <th class="text-center">{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($clients as $client)
                                        <tr>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->phone }}</td>
                                            <td>{{ $client->email }}</td>
                                            <td>{{ $client->created_at->translatedFormat('d M Y') }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center text-center">
                                                    <form action="{{ route('clients.destroy', $client->id)}}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <a href="{{ route('clients.edit', $client->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">{{__('Edit')}}</a>
                                                        <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $client->name }})?');" type="submit" title="{{'Delete '."- ($client->name)"}}">{{__('Delete')}}</button>
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
