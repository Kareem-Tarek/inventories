@extends('layouts.dashboard.master')
@section('title', __('Prices'))
@section('title-heading_2', __('Prices'))

@section('bookmark')
    <div class="col-sm-6">
        <!-- Bookmark Start-->
        <div class="bookmark">
            <ul>
                <li>
                    <a href="{{route('prices.create')}}" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="plus"></i></a>
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
                <h2 class="mb-2 page-title">{{__('Prices')}} ({{ $prices->count() }})</h2>
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

                                        <th>{{__('Name Price')}}</th>
                                        <th>{{__('Product')}}</th>
                                        <th>{{__('Price')}}</th>
                                        <th>{{__('Discount')}}</th>
                                        <th>{{__('Created At')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($prices as $price)
                                        <tr>
                                            <td>{{ $price->name_prices->name ?? __('Not Found')}}</td>
                                            <td>{{ $price->product->title ?? __('Not Found') }}</td>
                                            <td>{{ $price->price }}</td>
                                            <td>{{ $price->discount }}</td>
                                            <td>{{ $price->created_at->translatedFormat('d M Y') }}</td>

                                            <td>
                                                <div class="d-flex justify-content-center align-items-center text-center">
                                                    <form action="{{ route('prices.destroy', $price->id)}}" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <a href="{{ route('prices.edit', $price->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">
                                                            {{__('Edit')}}
                                                        </a>
                                                        <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $price->title }})?');" type="submit" title="{{'Delete '."- ($price->title)"}}">
                                                            {{__('Delete')}}
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">
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
                        <div class="pagination justify-content-center pagination-primary">
                            {{$prices->links('pagination::bootstrap-4')}}
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
