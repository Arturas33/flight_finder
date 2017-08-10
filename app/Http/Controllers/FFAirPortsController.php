<?php namespace App\Http\Controllers;

use App\FFAirLine;
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
        $config['tableName'] = trans('airports');
        $config['title'] = trans('airports');
        $config['route'] = route('app.airports.create');


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
        $data = request()->all();
        FFAirPorts::create([
            'name' => $data['name'],
            'contry_id' => $data['contry_id'],
            'city' => $data['city'],
        ]);

        return redirect(route('app.airports.index'));

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
        $record = FFAirPorts::find($id)->toArray();
        $config = $this->getFormData();
        $config['record'] = $record;
        $config['titleFrom'] = $id;
        $config['route'] = route('app.airports.edit', $id);
        $config['back'] = 'app.airports.index';

        return view('form', $config);
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
        $data = request()->all();
        $record = FFAirPorts::find($id);
        $record->update($data);


        return redirect(route('app.airports.index'));
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
        FFCountry::destroy(FFCountry::where('name',$id)->pluck('id')->toArray());
        FFAirPorts::destroy($id);
        return["success" => true, "id" => $id];
    }


        private function getFormData()
    {

        $config['fields'][] = [
            'type' => 'single_line',
            'key' => 'city',

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