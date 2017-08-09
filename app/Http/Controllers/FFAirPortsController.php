<?php namespace App\Http\Controllers;

use App\FFAirPorts;
use App\FFCountry;
use Illuminate\Routing\Controller;

class FFAirPortsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /ffairports
     *
     * @return Response
     */
    public function index()
    {
        $config['list'] = FFAirPorts::get()->toArray();
        $config['create'] = 'app.airports.create';
        $config['title'] = trans('Air ports list');
        $config['show'] = 'app.airports.show';
        $config['delete'] = 'app.airports.destroy';
        $config['edit'] = 'app.airports.edit';

        return view('list', $config);
    }

    /**
     * Show the form for creating a new resource.
     * GET /ffairports/create
     *
     * @return Response
     */
    public function create()
    {
        $config = $this->getFormData();
        $config['tableName'] = trans('country');
        $config['title'] = trans('country');
        $config['route'] = route('app.country.create');


        // dd($config);
        return view('form', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /ffairports
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /ffairports/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /ffairports/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /ffairports/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /ffairports/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


        private function getFormData()
    {

        $config['fields'][] = [
            'type' => 'single_line',
            'key' => 'id',

        ];
        $config['fields'][] = [
            'type' => 'single_line',
            'key' => 'name',
        ];

        $config['fields'][] = [
            'type' => 'drop_down',
            'key' => 'contry_id',
            'options' => FFCountry::pluck('name', 'id')->toArray(),
        ];

        return $config;
    }


}