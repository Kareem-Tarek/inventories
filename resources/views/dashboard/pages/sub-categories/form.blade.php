@if(Route::is('subcategories.edit'))
<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $subCategory_model->id }}" disabled>
</div>
@endif

<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان الفئة الفرعية هنا..."
    value="{{Request::old('title') ? Request::old('title') : $subCategory_model->title}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">الوصف</label>
    <input type="text" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description" placeholder="أدخل وصف الفئة الفرعية هنا..."
    value="{{Request::old('description') ? Request::old('description') : $subCategory_model->description}}">
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div>
    <label for="category_id">الفئة (فئة الفئة الفرعية) <span class="text-danger">*</span></label>
    <select name="category_id" class="form-control select border-1 border-dark mb-2 @error('category_id') is-invalid @enderror" value="{{$category->id ?? old('category_id')}}">
        <option value="" selected> ---------- أختر الفئة (فئة الفئة الفرعية) ---------- </option>
        @forelse($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $subCategory_model->category_id ? 'selected' : '' }}>
                ({{ ucfirst($category->title) }})
            </option>
            @empty
        @endforelse
    </select>
    @error('category_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
