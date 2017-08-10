<?php namespace App\Http\Controllers;

use App\FFAirLine;
use Illuminate\Routing\Controller;

class FFAirLineController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ffairline
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = FFAirLine::get()->toArray();
         $config['create'] = 'app.airline.create';
        $config['title'] = trans('Air line list');
         $config['show'] = 'app.airline.show';
         $config['delete'] = 'app.airline.destroy';
          $config['edit'] = 'app.airline.edit';
        //dd($config);
        return view('list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ffairline/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config = $this->getFormData();
        $config['tableName'] = trans('airline');
        $config['title'] = trans('airline');
        $config['route'] = route('app.airline.create');


        // dd($config);
        return view('form', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ffairline
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();
        FFAirLine::create($data);


        // dd($record);

        return redirect(route('app.airline.index'));
	}

	/**
	 * Display the specified resource.
	 * GET /ffairline/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ffairline/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $record = FFAirLine::find($id)->toArray();
        $config = $this->getFormData();
        $config['record'] = $record;
        $config['titleForm'] = $id;
        $config['route'] = route('app.airline.edit', $id);
        $config['back'] = 'app.airline.index';

        return view('form', $config);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ffairline/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $data = request()->all();
        $record = FFAirLine::find($id);
        $record->update($data);


        return redirect(route('app.airline.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ffairline/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    FFAirLine::destroy($id);
	    return["success" => true, "id" => $id];
	}

    private function getFormData()
    {


        $config['fields'][] = [
            'type' => 'single_line',
            'key' => 'name',
        ];


        return $config;
    }

}