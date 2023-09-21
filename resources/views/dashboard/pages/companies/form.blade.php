@if(Route::is('companies.edit'))
<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $Company_model->id }}" disabled>
</div>
@endif

<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان الشركة هنا..."
    value="{{Request::old('title') ? Request::old('title') : $Company_model->title}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">الوصف</label>
    <input type="text" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description" placeholder="أدخل وصف الشركة هنا..."
    value="{{Request::old('description') ? Request::old('description') : $Company_model->description}}">
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
