<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFoodRequest;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Models\Food;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('food_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Food::query()->select(sprintf('%s.*', (new Food)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'food_show';
                $editGate      = 'food_edit';
                $deleteGate    = 'food_delete';
                $crudRoutePart = 'foods';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('foodname', function ($row) {
                return $row->foodname ? $row->foodname : '';
            });
            $table->editColumn('customernote', function ($row) {
                return $row->customernote ? $row->customernote : '';
            });
            $table->editColumn('price', function ($row) {
                return $row->price ? $row->price : '';
            });
            $table->editColumn('amount', function ($row) {
                return $row->amount ? $row->amount : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.foods.index');
    }

    public function create()
    {
        abort_if(Gate::denies('food_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.foods.create');
    }

    public function store(StoreFoodRequest $request)
    {
        $food = Food::create($request->all());

        return redirect()->route('admin.foods.index');
    }

    public function edit(Food $food)
    {
        abort_if(Gate::denies('food_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.foods.edit', compact('food'));
    }

    public function update(UpdateFoodRequest $request, Food $food)
    {
        $food->update($request->all());

        return redirect()->route('admin.foods.index');
    }

    public function show(Food $food)
    {
        abort_if(Gate::denies('food_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.foods.show', compact('food'));
    }

    public function destroy(Food $food)
    {
        abort_if(Gate::denies('food_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $food->delete();

        return back();
    }

    public function massDestroy(MassDestroyFoodRequest $request)
    {
        $foods = Food::find(request('ids'));

        foreach ($foods as $food) {
            $food->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
