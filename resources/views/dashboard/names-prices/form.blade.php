<div class="form-group">
    <label for="name">{{__('Name')}} <span class="text-danger">*</span></label>
    <input type="text" id="name" name="name" class="form-control border-1 border-dark mb-2 @error('name') is-invalid @enderror" placeholder="{{__('Enter price name')}}" value="{{old('name', $NamePrice_model->name)}}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

