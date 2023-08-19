<?php

namespace App\Http\Requests;

use App\Models\Food;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFoodRequest extends FormRequest
{
    public function customernoteize()
    {
        return Gate::allows('food_edit');
    }

    public function rules()
    {
        return [
            'foodname' => [
                'string',
                'required',
            ],
            'customernote' => [
                'string',
                'required',
            ],
            'price' => [
                'integer',
                'required',
            ],
            'amount' => [
                'integer',
                'required',
            ],
        ];
    }
}
