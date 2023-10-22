<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $user->id }}" disabled>
</div>

<div class="form-group">
    <label for="name">الاسم <span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control border-1 border-dark mb-2 @error('name') is-invalid @enderror" id="name"
    value="{{Request::old('name') ? Request::old('name') : $user->name}}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="email">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control border-1 border-dark @error('email') is-invalid @enderror" id="email" placeholder="أدخل وصف الفئة هنا..."
    value="{{Request::old('email') ? Request::old('email') : $user->email}}">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="phone">رقم الهااتف <span class="text-danger">*</span></label>
    <input type="text" name="phone" class="form-control border-1 border-dark mb-2 @error('phone') is-invalid @enderror" id="phone"
    value="{{Request::old('phone') ? Request::old('phone') : $user->phone}}">
    @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="address">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="address" class="form-control border-1 border-dark mb-2 @error('address') is-invalid @enderror" id="address"
    value="{{Request::old('address') ? Request::old('address') : $user->address}}">
    @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
