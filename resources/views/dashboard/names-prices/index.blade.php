@extends('layouts.dashboard.master')
@section('title'){{__('Prices Names')}}@endsection
@section('title-heading_2'){{__('Prices Names')}}@endsection
@section('bookmark')
    <div class="col-sm-6">
        <!-- Bookmark Start-->
        <div class="bookmark">
            <ul>
                <li>
                    <a href="{{route('names-prices.create')}}" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="plus"></i></a>
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
                <h2 class="mb-2 page-title">{{__('Prices Names')}} ({{\App\Models\NamePrice::count() }})</h2>
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
                                        <th class="text-center">{{__('Name')}}</th>
                                        <th class="text-center">{{__('Created At')}}</th>
                                        <th class="text-center">{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($namesPrices as $namePrice)
                                        <tr>
                                            <td>{{ $namePrice->name }}</td>
                                            <td>{{ $namePrice->created_at->translatedFormat('d M Y')}}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center text-center">
                                                    <form action="{{ route('names-prices.destroy', $namePrice->id)}}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <a href="{{ route('names-prices.edit', $namePrice->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">{{__('Edit')}}</a>
                                                        <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $namePrice->name }})?');" type="submit" title="{{'Delete '."- ($namePrice->name)"}}">{{__('Delete')}}</button>
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
