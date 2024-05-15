<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ufm;
use App\Http\Requests\Ufm\Index;
use App\Http\Requests\Ufm\Show;
use App\Http\Requests\Ufm\Create;
use App\Http\Requests\Ufm\Store;
use App\Http\Requests\Ufm\Edit;
use App\Http\Requests\Ufm\Update;
use App\Http\Requests\Ufm\Destroy;


/**
 * Description of UfmController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class UfmController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.ufm.index', ['records' => Ufm::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Ufm  $ufm
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Ufm $ufm)
    {
        return view('pages.ufm.show', [
                'record' =>$ufm,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
        return view('pages.ufm.create', [
            'model' => new Ufm,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Ufm;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'Ufm saved successfully');
            return redirect()->route('ufm.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Ufm');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Ufm  $ufm
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Ufm $ufm)
    {

        return view('pages.ufm.edit', [
            'model' => $ufm,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Ufm  $ufm
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Ufm $ufm)
    {
        $ufm->fill($request->all());

        if ($ufm->save()) {

            session()->flash('app_message', 'Ufm successfully updated');
            return redirect()->route('ufm.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Ufm');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Ufm  $ufm
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Ufm $ufm)
    {
        if ($ufm->delete()) {
                session()->flash('app_message', 'Ufm successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Ufm');
            }

        return redirect()->back();
    }
}
