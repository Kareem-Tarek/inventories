<div class="form-group">
    <label for="price">{{__('Price')}}<span class="text-danger">*</span></label>
    <input type="text" name="price" class="form-control border-1 border-dark @error('price') is-invalid @enderror" id="price"
           value="{{old('price', $Price_model->price) }}">
    @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
     <label for="discount">{{__('Discount')}}<span class="text-danger">*</span></label>
     <input name="discount" id="discount" type="text" class="form-control border-1 border-dark @error('discount') is-invalid @enderror"
            value="{{old('discount', $Price_model->discount)}}">
    @error('discount')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="name_price_id">{{__('Name Price')}} <span class="text-danger">*</span></label>
    <select name="name_price_id" id="name_price_id" class="form-control select border-1 border-dark @error('name_price_id') is-invalid @enderror">
        @foreach($name_prices as $name_price)
            <option value="{{ $name_price->id }}" @selected(old('name_price_id', $Price_model->name_price_id) == $name_price->id)>
                {{$name_price->name}}
            </option>
        @endforeach
    </select>
    @error('product_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="product_id">{{__('Product')}} <span class="text-danger">*</span></label>
    <select name="product_id" id="product_id" class="form-control select border-1 border-dark @error('product_id') is-invalid @enderror">
        @foreach($products as $product)
            <option value="{{ $product->id }}" @selected(old('product_id', $Price_model->product_id) == $product->id)>
                {{$product->title}}
            </option>
        @endforeach
    </select>
    @error('product_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
