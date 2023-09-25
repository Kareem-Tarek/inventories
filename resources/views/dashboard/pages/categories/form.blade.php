<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان الفئة" value="{{old('title', $Category_model->title)}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">الوصف</label>
    <input type="text" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description" placeholder="أدخل وصف الفئة هنا..."
    value="{{old('description', $Category_model->description)}}">
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
