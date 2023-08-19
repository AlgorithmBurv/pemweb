@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.food.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.foods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.food.fields.id') }}
                        </th>
                        <td>
                            {{ $food->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.food.fields.foodname') }}
                        </th>
                        <td>
                            {{ $food->foodname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.food.fields.customernote') }}
                        </th>
                        <td>
                            {{ $food->customernote }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.food.fields.price') }}
                        </th>
                        <td>
                            {{ $food->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.food.fields.amount') }}
                        </th>
                        <td>
                            {{ $food->amount }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.foods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection