<div class="form-group">
    <div class="row">
        <div class="col-6">
            <label for="title">{{__('Title')}} <span class="text-danger">*</span></label>
            <input type="text" name="title" required class="form-control border-1 border-dark mb-2 @error('title') is-invalid @enderror" id="title" value="{{old('title', $Product_model->title)}}">
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-6">
            <label for="quantity">{{__('Quantity')}}<span class="text-danger">*</span></label>
            <input type="number" name="quantity" required class="form-control border-1 border-dark mb-2 @error('quantity') is-invalid @enderror" id="quantity"
                   value="{{old('quantity', $Product_model->quantity)}}">
            @error('quantity')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-4">
            <label for="unit_id">{{__('Unit')}}</label>
            <select name="unit_id" id="unit_id" class="form-control border-1 border-dark select @error('unit_id') is-invalid @enderror">
                <option value="" class="@if($units->count() == 0) d-none @endif" selected>{{__('Select Unit')}}</option>
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}" {{ $unit->id == $Product_model->unit_id ? 'selected' : '' }}>
                        {{ ucfirst($unit->title) }}
                    </option>
                @endforeach
            </select>
            @error('unit_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="col-4">
            <label for="category_id">الفئة</label>
            <select name="category_id" id="category_id" class="form-control border-1 border-dark select @error('category_id') is-invalid @enderror">
                <option value="" class="@if($categories->count() == 0) d-none @endif" selected>{{__('Select category')}} </option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $Product_model->category_id ? 'selected' : '' }}>
                        {{ ucfirst($category->title) }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-4">
            <label for="sub_category_id">{{__('Sub Category')}}</label>
            <select name="sub_category_id" id="sub_category_id" class="form-control border-1 border-dark select @error('sub_category_id') is-invalid @enderror">
                <option value="" class="@if($subCategories->count() == 0) d-none @endif" selected>{{__('Select subcategory')}}</option>
                @foreach($subCategories as $subCategory)
                    <option value="{{ $subCategory->id }}" {{ $subCategory->id == $Product_model->sub_category_id ? 'selected' : '' }}>
                        {{ ucfirst($subCategory->title) }}
                    </option>
                @endforeach
            </select>
            @error('sub_category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">

        <div class="col-4">

            <label for="type_id">{{__('Type')}}</label>
            <select name="type_id" id="type_id" class="form-control border-1 border-dark select @error('type_id') is-invalid @enderror">
                <option value="" class="@if($types->count() == 0) d-none @endif" selected> {{__('Select Type')}} </option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ $type->id == $Product_model->type_id ? 'selected' : '' }}>
                        {{ ucfirst($type->title) }}
                    </option>
                @endforeach
            </select>
            @error('type_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="col-4">
            <label for="company_id">{{__('Company')}}</label>
            <select name="company_id" id="company_id" class="form-control border-1 border-dark select @error('company_id') is-invalid @enderror">
                <option value="" class="@if($companies->count() == 0) d-none @endif" selected>{{__('Select Company')}}</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $company->id == $Product_model->company_id ? 'selected' : '' }}>
                        {{ ucfirst($company->title) }}
                    </option>
                @endforeach
            </select>
            @error('company_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-4">
            <label for="warning" class="text-danger">{{__('Warning')}}</label>
            <input type="number" name="warning" class="form-control border-1 border-danger mb-2 @error('warning') is-invalid @enderror" id="warning"
                   value="{{old('warning', $Product_model->warning)}}">
            @error('warning')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-12">
            <label for="description">{{__('Description')}}</label>
            <textarea name="description" rows="5" required class="form-control border-1 border-dark @error('description') is-invalid @enderror" id="description">{{old('description', $Product_model->description)}}</textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

</div>



<div class="form-group">
    <div class="row">
        @foreach(\App\Models\NamePrice::get() as $name)
        <div class="col-6">
            <label class="col-4 col-form-label text-start">{{$name->name}}</label>

            <div class="col-8">
                <div class="input-group">
                    <label for="price"></label>
                    <input class="form-control border-1 border-dark @error('price') is-invalid @enderror" type="number" id="price" value="" name="price[]">
                </div>
            </div>
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        @endforeach
    </div>
</div>

