@if(Route::is('exported-product.edit'))
<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $ExportedProduct_model->id }}" disabled>
</div>
@endif

<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان منصرف المخزن هنا..."
    value="{{Request::old('title') ? Request::old('title') : $ExportedProduct_model->title}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">الوصف</label>
    <input type="text" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description" placeholder="أدخل وصف منصرف المخزن هنا..."
    value="{{Request::old('description') ? Request::old('description') : $ExportedProduct_model->description}}">
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="amount">الكمية <span class="text-danger">*</span></label>
    <input type="number" name="amount" class="form-control border-1 border-dark @error('amount') is-invalid @enderror" id="amount" placeholder="أدخل وصف منصرف المخزن هنا..."
    value="{{Request::old('amount') ? Request::old('amount') : $ExportedProduct_model->amount}}">
    @error('amount')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
