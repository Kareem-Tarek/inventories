<div class="form-group">
    <label for="title">{{__('Title')}}<span class="text-danger">*</span></label>
    <input type="text" required name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title"
           value="{{old('title', $Company_model->title)}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">{{__('Description')}}</label>
    <textarea rows="6" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description">{{old('description', $Company_model->description)}}</textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
