<?php

namespace App\Http\Controllers;

use App\Services\Resources\DestroyResourceService;
use App\Services\Resources\IndexResourceService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ResourceController extends Controller
{
    public Model $model;
    public string $resource;
    public array $relates = [];
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->query('search')) {
            $search = json_decode($request->query('search'));
            $query = $search->value;

            $data['data'] = $this->model
                ->where($search->field, 'LIKE', "%{$query}%")
                ->paginate(10)
                ->appends(['search' => $request->query('search')]);
        } else {
            $data['data'] = $this->model->paginate(10);
        }

        $data['resource'] = $this->resource;

        return Inertia::render('Resources/Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['resource'] = $this->resource;
        $data['relates'] = array_map(function ($item) {
            $item['data'] = DB::table($item['db'])->get();

            return $item;
        }, $this->relates);

        return Inertia::render('Resources/Create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $this->model->create($request->all());
        redirect()->route($this->resource . '.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['data'] = $this->model::find($id);
        $data['resource'] = $this->resource;

        if (count($this->relates))
        {
            foreach ($this->relates as $relate)
            {
                $property = $relate['resource'];
                $relate_data = $data['data']->$property;

                $data['relates'][] = [
                    'title' => $relate['title'],
                    'data' => $relate_data,
                    'resource' => $relate['resource']
                ];
            }
        } else {
            $data['relates'] = [];
        }

        return Inertia::render('Resources/Show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->model->destroy($id);
    }
}
