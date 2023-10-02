@extends('layouts.dashboard.master')
@section('title')
نتائج المنتجات ({{ $products_result_count }})
@endsection
@section('title-heading_2')
نتائج المنتجات ({{ $products_result_count }})
@endsection

@section('main-content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="mb-2 page-title">نتائج المنتجات ({{ $products_result_count }})</h2>
        <h4>"{{ $search_text_input }}"</h4>
        <p>
            @if(session()->has('created_product_successfully'))
                <div class="alert alert-success text-center">
                    <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                    {{ session()->get('created_product_successfully') }}
                </div>
            @elseif(session()->has('deleted_product_successfully'))
                <div class="alert alert-success text-center">
                    <a href="javascript:void(0);" class="close-btn text-decoration-none text-white" onclick="this.parentElement.style.display='none';" style="position:absolute; top:0px; right:5px; font-size: 150%;">&times;</a>
                    {{ session()->get('deleted_product_successfully') }}
                </div>
            @endif
        </p>
        <div class="d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-primary">إضافة منتج</a>
        </div>
        {{-- <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p> --}}
        <div class="row my-4">
          <!-- Small table -->
          <div class="col-md-12">
            <div class="card shadow">
              <div class="card-body">
                <!-- table -->
                        <table class="table table-bordered border border-5 table-hover mb-0 @if($products_result_count == 0) d-none @endif">
                            <thead class="thead-dark">
                            <tr class="h6 table-secondary">
                                <th>بطاقة التعريف (<b>ID#</b>)</th>
                                <th>العنوان</th>
                                <th>الوصف</th>
                                <th>الكمية</th>
                                <th>الوحدة</th>
                                <th>الفئة</th>
                                <th>الفئة الفرعية</th>
                                <th>النوع</th>
                                <th>الشركة</th>
                                <th>العميل</th>
                                <th>التحذير</th>
                                <th>تاريخ الإنشاء</th>
                                <th>تاريخ التعديل</th>
                                <th>الأجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products_result as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description ?? 'لا يوجد' }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->unit->title ?? 'لا يوجد' }}</td>
                                <td>{{ $product->category->title ?? 'لا يوجد' }}</td>
                                <td>{{ $product->subCategory->title  ?? 'لا يوجد' }}</td>
                                <td>{{ $product->type->title ?? 'لا يوجد' }}</td>
                                <td>{{ $product->company->title ?? 'لا يوجد' }}</td>
                                <td>{{ $product->client->name ?? 'لا يوجد' }}</td>
                                <td>{{ $product->warning }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at ?? 'لا يوجد' }}</td>
                                <td>
                                    {{-- <a href="">edit</a>
                                    <a href="">delete</a> --}}
                                    <div class="d-flex justify-content-center align-items-center text-center">
                                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary btn-md p-1 border-2 border-dark text-white font-weight-bold">
                                                <svg viewBox="0 0 24 24" width="18" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                تعديل
                                            </a>
                                            <button class="btn btn-danger btn-md p-1 border-2 border-dark text-white font-weight-bold" onclick="return confirm('Are you sure that you want to delete ({{ $product->title }})?');" type="submit" title="{{'Delete '."- ($product->title)"}}">
                                                <svg viewBox="0 0 24 24" width="18" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                حذف
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                        <div class="alert alert-danger text-center">
                            <span class="h6">عذرا! لا توجد منتجات في قاعدة البيانات تطابق "<b>{{ $search_text_input }}</b>".</span>
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
