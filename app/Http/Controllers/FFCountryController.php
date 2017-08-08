<?php namespace App\Http\Controllers;

use App\FFCountry;
use Illuminate\Routing\Controller;

class FFCountryController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ffcountry
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = FFCountry::get()->toArray();

        //dd($config);

        return view('list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ffcountry/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ffcountry
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ffcountry/{id}
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
	 * GET /ffcountry/{id}/edit
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
	 * PUT /ffcountry/{id}
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
	 * DELETE /ffcountry/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}