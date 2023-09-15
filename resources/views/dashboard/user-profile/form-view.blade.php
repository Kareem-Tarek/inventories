<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $user->id }}" disabled>
</div>

<div class="form-group">
    <label for="name">الاسم</label>
    <input type="text" class="form-control border-1 border-dark mb-2" disabled id="name"
    value="{{Request::old('name') ? Request::old('name') : $user->name}}">
</div>

<div class="form-group">
    <label for="email">البريد الالكتروني</label>
    <input type="text" class="form-control border-1 border-dark" disabled id="email" placeholder="أدخل وصف الفئة هنا..."
    value="{{Request::old('email') ? Request::old('email') : $user->email}}">
</div>

<div class="form-group">
    <label for="phone">رقم الهااتف</label>
    <input type="text" class="form-control border-1 border-dark mb-2" disabled id="phone"
    value="{{Request::old('phone') ? Request::old('phone') : $user->phone}}">
</div>

<div class="form-group">
    <label for="address">العنوان</label>
    <input type="text" class="form-control border-1 border-dark mb-2" disabled id="address"
    value="{{Request::old('address') ? Request::old('address') : $user->address}}">
</div>
