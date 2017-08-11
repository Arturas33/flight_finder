<?php namespace App\Http\Controllers;

use App\FFAirPorts;
use App\FFFlights;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class FrontEndController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /frontend
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['departure'] = FFAirPorts::pluck('name', 'id')->toArray();
        $config['arrivel'] = FFAirPorts::pluck('name', 'id')->toArray();
        $config['date'] = Carbon::now()->format('Y-m-d');
        $config['route'] = route( 'app.search.index');

        $data = request()->all();

        if($data)
        {
           $config['flights'] = $this->getFlight($data);
     //   dd($config);
        }

    //    dd($config);

        return view('welcome', $config);
	}

	public function  getFlight($data)
    {

	    return FFFlights::where('origin_id', $data['from'])
            ->where('destination_id', $data['to'])
            ->where('departure', '>=', $data['date'].'23:59:59')
            ->get()->toArray();
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /frontend/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /frontend
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /frontend/{id}
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
	 * GET /frontend/{id}/edit
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
	 * PUT /frontend/{id}
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
	 * DELETE /frontend/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}