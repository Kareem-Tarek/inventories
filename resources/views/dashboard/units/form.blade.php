<div class="form-group">
    <label for="title">{{__('Title')}}<span class="text-danger">*</span></label>
    <input type="text" name="title" required class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title"
           value="{{old('title', $Unit_model->title)}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
