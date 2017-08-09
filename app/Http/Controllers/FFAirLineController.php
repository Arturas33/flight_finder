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
		//
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
		//
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
		//
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
		//
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