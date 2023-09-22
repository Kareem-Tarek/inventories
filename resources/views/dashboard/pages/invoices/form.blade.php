@if(Route::is('invoices.edit'))
<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $Invoice_model->id }}" disabled>
</div>
@endif

<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان الفتورة هنا..."
    value="{{Request::old('title') ? Request::old('title') : $Invoice_model->title}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">الوصف</label>
    <input type="text" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description" placeholder="أدخل وصف الفتورة هنا..."
    value="{{Request::old('description') ? Request::old('description') : $Invoice_model->description}}">
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
