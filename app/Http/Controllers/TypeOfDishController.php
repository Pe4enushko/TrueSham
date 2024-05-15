<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TypeOfDish;
use App\Http\Requests\TypeOfDish\Index;
use App\Http\Requests\TypeOfDish\Show;
use App\Http\Requests\TypeOfDish\Create;
use App\Http\Requests\TypeOfDish\Store;
use App\Http\Requests\TypeOfDish\Edit;
use App\Http\Requests\TypeOfDish\Update;
use App\Http\Requests\TypeOfDish\Destroy;


/**
 * Description of TypeOfDishController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class TypeOfDishController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.typeofdish.index', ['records' => TypeOfDish::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  TypeOfDish  $typeofdish
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, TypeOfDish $typeofdish)
    {
        return view('pages.typeofdish.show', [
                'record' =>$typeofdish,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.typeofdish.create', [
            'model' => new TypeOfDish,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new TypeOfDish;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'TypeOfDish saved successfully');
            return redirect()->route('typeofdish.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving TypeOfDish');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  TypeOfDish  $typeofdish
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, TypeOfDish $typeofdish)
    {

        return view('pages.typeofdish.edit', [
            'model' => $typeofdish,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  TypeOfDish  $typeofdish
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,TypeOfDish $typeofdish)
    {
        $typeofdish->fill($request->all());

        if ($typeofdish->save()) {

            session()->flash('app_message', 'TypeOfDish successfully updated');
            return redirect()->route('typeofdish.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating TypeOfDish');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  TypeOfDish  $typeofdish
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, TypeOfDish $typeofdish)
    {
        if ($typeofdish->delete()) {
                session()->flash('app_message', 'TypeOfDish successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting TypeOfDish');
            }

        return redirect()->back();
    }
}
