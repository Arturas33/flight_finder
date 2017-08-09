<?php namespace App\Http\Controllers;

use App\FFCountry;
use Illuminate\Routing\Controller;

class FFCountryController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /ffcountry
     *
     * @return Response
     */
    public function index()
    {
        $config['list'] = FFCountry::get()->toArray();
       // $config['create'] = 'app.country.create';
        $config['title'] = trans('Country list');
       // $config['show'] = 'app.country.show';
       // $config['delete'] = 'app.country.destroy';
      //  $config['edit'] = 'app.country.edit';
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

        $config = $this->getFormData();
        $config['tableName'] = trans('country');
        $config['title'] = trans('country');
        $config['route'] = route('app.country.create');


        // dd($config);
        return view('form', $config);
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
     * @param  int $id
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
     * @param  int $id
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
     * @param  int $id
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

        return $config;
    }

}
