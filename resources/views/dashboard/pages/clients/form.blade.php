<div class="form-group">
    <label for="name">الاسم <span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control border-1 border-dark mb-2 @error('name') is-invalid @enderror" id="name" placeholder="أدخل اسم العميل" value="{{old('name', $Client_model->name)}}">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="phone">المحمول <span class="text-danger">*</span></label>
    <input type="phone" name="phone" class="form-control border-1 border-dark @error('phone') is-invalid @enderror" id="phone" placeholder="أدخل رقم محمول العميل هنا..."
    value="{{old('phone', $Client_model->phone)}}">
    @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="email">البريد الالكتروني <span class="text-danger">*</span></label>
    <input type="email" name="email" class="form-control border-1 border-dark mb-2 @error('email') is-invalid @enderror" id="email" placeholder="أدخل بريد الالكتروني للعميل" value="{{old('email', $Client_model->email)}}">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
