@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.food.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.foods.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="foodname">{{ trans('cruds.food.fields.foodname') }}</label>
                <input class="form-control {{ $errors->has('foodname') ? 'is-invalid' : '' }}" type="text" name="foodname" id="foodname" value="{{ old('foodname', '') }}" required>
                @if($errors->has('foodname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('foodname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.foodname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="customernote">{{ trans('cruds.food.fields.customernote') }}</label>
                <input class="form-control {{ $errors->has('customernote') ? 'is-invalid' : '' }}" type="text" name="customernote" id="customernote" value="{{ old('customernote', '') }}" required>
                @if($errors->has('customernote'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customernote') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.customernote_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.food.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price', '') }}" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.food.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="text" name="amount" id="amount" value="{{ old('amount', '') }}" required>
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.food.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection