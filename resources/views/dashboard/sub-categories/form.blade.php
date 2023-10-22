<div class="form-group">
    <label for="title">{{__('Title')}}<span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title"
           value="{{old('title', $subCategory_model->title)}}">
    @error('title')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


<div class="form-group">
    <label for="description">{{__('Description')}}</label>
    <textarea rows="6" type="text" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description">{{old('description', $subCategory_model->description)}}</textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div>
    <label for="category_id">{{__('Categories')}}<span class="text-danger">*</span></label>
    <select name="category_id" id="category_id" class="form-control select border-1 border-dark mb-2 @error('category_id') is-invalid @enderror">
        <option value="" selected>{{__('Please Choose')}}</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $subCategory_model->category_id) == $category->id)>
                {{$category->title }}
            </option>

        @endforeach
    </select>
    @error('category_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
