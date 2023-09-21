@if(Route::is('products.edit'))
<div class="form-group">
    <label for="id">بطاقة التعريف (<b>ID#</b>)</label>
    <input type="text" class="form-control border-1 border-dark mb-2" value="{{ $Product_model->id }}" disabled>
</div>
@endif

<div class="form-group">
    <label for="title">العنوان <span class="text-danger">*</span></label>
    <input type="text" name="title" class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" placeholder="أدخل عنوان المنتج هنا..."
    value="{{Request::old('title') ? Request::old('title') : $Product_model->title}}">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="description">الوصف</label>
    <input type="text" name="description" class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description" placeholder="أدخل وصف المنتج هنا..."
    value="{{Request::old('description') ? Request::old('description') : $Product_model->description}}">
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="price">السعر <span class="text-danger">*</span></label>
    <input type="number" name="price" class="form-control border-1 border-dark mb-2 @error('price') is-invalid @enderror" id="price" placeholder="أدخل سعر المنتج هنا..."
    value="{{Request::old('price') ? Request::old('price') : $Product_model->price}}">
    @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="quantity">الكمية <span class="text-danger">*</span></label>
    <input type="number" name="quantity" class="form-control border-1 border-dark mb-2 @error('quantity') is-invalid @enderror" id="quantity" placeholder="أدخل كمية المنتج هنا..."
    value="{{Request::old('quantity') ? Request::old('quantity') : $Product_model->quantity}}">
    @error('quantity')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="unit_id">الوحدة <span class="text-danger">*</span></label>
    <select name="unit_id" class="form-control select border-1 border-dark @error('unit_id') is-invalid @enderror">
        <option value="" class="@if($units->count() == 0) d-none @endif" selected> ---------- اختر الوحدة ---------- </option>
        @forelse($units as $unit)
            <option value="{{ $unit->id }}" {{ $unit->id == $Product_model->unit_id ? 'selected' : '' }}>
                {{ ucfirst($unit->title) }}
            </option>
            @empty
            <option value="" selected> ---------- لا يوجد أي وحدة في قاعدة البيانات ---------- </option>
        @endforelse
    </select>
    @error('unit_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="category_id">الفئة <span class="text-danger">*</span></label>
    <select name="category_id" class="form-control select border-1 border-dark @error('category_id') is-invalid @enderror">
        <option value="" class="@if($categories->count() == 0) d-none @endif" selected> ---------- اختر الفئة ---------- </option>
        @forelse($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $Product_model->category_id ? 'selected' : '' }}>
                {{ ucfirst($category->title) }}
            </option>
            @empty
            <option value="" selected> ---------- لا يوجد أي فئة في قاعدة البيانات ---------- </option>
        @endforelse
    </select>
    @error('category_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="sub_category_id">الفئة الفرعية <span class="text-danger">*</span></label>
    <select name="sub_category_id" class="form-control select border-1 border-dark @error('sub_category_id') is-invalid @enderror">
        <option value="" class="@if($subCategories->count() == 0) d-none @endif" selected> ---------- اختر الفئة الفرعية ---------- </option>
        @forelse($subCategories as $subCategory)
            <option value="{{ $subCategory->id }}" {{ $subCategory->id == $Product_model->sub_category_id ? 'selected' : '' }}>
                {{ ucfirst($subCategory->title) }}
            </option>
            @empty
            <option value="" selected> ---------- لا يوجد أي فئة فرعية في قاعدة البيانات ---------- </option>
        @endforelse
    </select>
    @error('sub_category_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="type_id">النوع <span class="text-danger">*</span></label>
    <select name="type_id" class="form-control select border-1 border-dark @error('type_id') is-invalid @enderror">
        <option value="" class="@if($types->count() == 0) d-none @endif" selected> ---------- اختر النوع ---------- </option>
        @forelse($types as $type)
            <option value="{{ $type->id }}" {{ $type->id == $Product_model->type_id ? 'selected' : '' }}>
                {{ ucfirst($type->title) }}
            </option>
            @empty
            <option value="" selected> ---------- لا يوجد أي نوع في قاعدة البيانات ---------- </option>
        @endforelse
    </select>
    @error('type_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="company_id">الشركة <span class="text-danger">*</span></label>
    <select name="company_id" class="form-control select border-1 border-dark @error('company_id') is-invalid @enderror">
        <option value="" class="@if($companies->count() == 0) d-none @endif" selected> ---------- اختر الشركة ---------- </option>
        @forelse($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $Product_model->company_id ? 'selected' : '' }}>
                {{ ucfirst($company->title) }}
            </option>
            @empty
            <option value="" selected> ---------- لا يوجد أي شركة في قاعدة البيانات ---------- </option>
        @endforelse
    </select>
    @error('company_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="warning">التحذير <span class="text-danger">*</span></label>
    <input type="number" name="warning" class="form-control border-1 border-dark mb-2 @error('warning') is-invalid @enderror" id="warning" placeholder="أدخل تحذير المنتج هنا..."
    value="{{Request::old('warning') ? Request::old('warning') : $Product_model->warning}}">
    @error('warning')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
