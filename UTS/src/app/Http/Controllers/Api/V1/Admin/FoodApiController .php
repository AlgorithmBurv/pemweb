<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Http\Resources\Admin\FoodResource;
use App\Models\Food;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FoodApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('food_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FoodResource(Food::all());
    }

    public function store(StoreFoodRequest $request)
    {
        $food = Food::create($request->all());

        return (new FoodResource($food))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Food $food)
    {
        abort_if(Gate::denies('food_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FoodResource($food);
    }

    public function update(UpdateFoodRequest $request, Food $food)
    {
        $food->update($request->all());

        return (new FoodResource($food))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Food $food)
    {
        abort_if(Gate::denies('food_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $food->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
