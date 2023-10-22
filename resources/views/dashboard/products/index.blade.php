@extends('layouts.dashboard.master')
@section('title', __('All Products'))
@section('title-heading_2', __('All Products'))
@section('bookmark')
    <div class="col-sm-6">
        <!-- Bookmark Start-->
        <div class="bookmark">
            <ul>
                <li>
                    <a href="{{route('products.create')}}" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="plus"></i></a>
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
                <h2 class="mb-2 page-title">{{__('Products')}} ({{ $products->count() }})</h2>
                <p>@include('dashboard.includes.alert')</p>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">{{__('Add Product')}}</a>
                </div>
                <p>
                    @include('dashboard.includes.alert')
                </p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table table-bordered border border-5 table-hover mb-0">
                                    <thead>
                                    <tr class="h6">
                                        <th>{{__('Title')}}</th>
                                        <th>{{__('Description')}}</th>
                                        <th>{{__('Quantity')}}</th>
                                        <th>{{__('Unit')}}</th>
                                        <th>{{__('Type')}}</th>
                                        <th>{{__('Warning')}}</th>
                                        <th>{{__('Created At')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($products as $product)
                                        <tr>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($product->description)}}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->unit->title ?? __('Not Found')}}</td>
                                            <td>{{ $product->type->title ?? __('Not Found') }}</td>
                                            <td>{{ $product->warning }}</td>
                                            <td>{{ $product->created_at->translatedFormat('d M Y') }}</td>
                                             <td>

                                                 <div class="d-flex justify-content-center align-items-center text-center">
                                                     <form action="{{ route('products.destroy', $product->id)}}" method="post">
                                                         @csrf
                                                         @method("DELETE")
                                                         <a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">
                                                             {{__('Edit')}}
                                                         </a>
                                                        <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $product->title }})?');" type="submit" title="{{'Delete '."- ($product->title)"}}">
                                                            {{__('Delete') }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8">
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
                            {{$products->links('pagination::bootstrap-4')}}
                        </div>
                     </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
         </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
