@if(Route::is('prices.edit'))
<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $Price_model->id }}" disabled>
</div>
@endif

<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان السعر هنا..."
    value="{{Request::old('title') ? Request::old('title') : $Price_model->title}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="value">السعر</label>
    <input type="text" name="value" class="form-control border-1 border-dark @error('value') is-invalid @enderror" id="value" placeholder="أدخل قيمة السعر هنا..."
    value="{{Request::old('value') ? Request::old('value') : $Price_model->value}}">
    @error('value')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
     <label for="value">التخفيض (%)</label>
     <select name="discount" class="form-control select border-1 border-dark @error('discount') is-invalid @enderror" id="discount">
        <option value="" disabled>---------- الرجاء تحديد الخصم ----------</option>
        @for($d = 0.00; $d < 1; $d = $d + 0.01)
            <option value="{{ $d }}" {{ $Price_model->discount == $d ? 'selected' : '' }}>
                @if($d == 0.00)
                    {{ $d * 100 }}% (لا يوجد خصم) <!-- = 0% -->
                @else
                    {{ $d * 100 }}%  <!-- > 0% -->
                @endif
            </option>
        @endfor
    </select>
    @error('discount')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="product_id">المنتج</label>
    <select name="product_id" class="form-control select border-1 border-dark @error('product_id') is-invalid @enderror">
        <option value="" class="@if($products->count() == 0) d-none @endif" selected> ---------- اختر المنتج ---------- </option>
        @forelse($products as $product)
            <option value="{{ $product->id }}" {{ $product->id == $Price_model->product_id ? 'selected' : '' }}>
                {{ ucfirst($product->title) }}
            </option>
            @empty
            <option value="" selected> ---------- لا يوجد أي منتج في قاعدة البيانات ---------- </option>
        @endforelse
    </select>
    @error('product_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
