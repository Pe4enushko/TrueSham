<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Month;
use App\Http\Requests\Month\Index;
use App\Http\Requests\Month\Show;
use App\Http\Requests\Month\Create;
use App\Http\Requests\Month\Store;
use App\Http\Requests\Month\Edit;
use App\Http\Requests\Month\Update;
use App\Http\Requests\Month\Destroy;


/**
 * Description of MonthController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class MonthController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.months.index', ['records' => Month::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Month  $month
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Month $month)
    {
        return view('pages.months.show', [
                'record' =>$month,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.months.create', [
            'model' => new Month,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Month;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'Month saved successfully');
            return redirect()->route('months.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Month');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Month  $month
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Month $month)
    {

        return view('pages.months.edit', [
            'model' => $month,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Month  $month
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Month $month)
    {
        $month->fill($request->all());

        if ($month->save()) {

            session()->flash('app_message', 'Month successfully updated');
            return redirect()->route('months.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Month');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Month  $month
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Month $month)
    {
        if ($month->delete()) {
                session()->flash('app_message', 'Month successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Month');
            }

        return redirect()->back();
    }
}
