@if(Route::is('types.edit'))
<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $Type_model->id }}" disabled>
</div>
@endif

<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان النوع هنا..."
    value="{{Request::old('title') ? Request::old('title') : $Type_model->title}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
