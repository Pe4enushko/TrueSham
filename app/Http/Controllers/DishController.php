<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Ufm;
use App\Models\TypeOfDish;
use App\Http\Requests\Dish\Index;
use App\Http\Requests\Dish\Show;
use App\Http\Requests\Dish\Create;
use App\Http\Requests\Dish\Store;
use App\Http\Requests\Dish\Edit;
use App\Http\Requests\Dish\Update;
use App\Http\Requests\Dish\Destroy;


/**
 * Description of DishController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class DishController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.dish.index', ['records' => Dish::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Dish $dish)
    {
        return view('pages.dish.show', [
                'record' =>$dish,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
		$ufm = Ufm::all(['Code_ufm', 'Name_ufm']);
		$type_of_dish = TypeOfDish::all(['Code_tod', 'Name_dish']);

        return view('pages.dish.create', [
            'model' => new Dish,
			"ufm" => $ufm,
			"type_of_dish" => $type_of_dish,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Dish;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'Dish saved successfully');
            return redirect()->route('dish.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Dish');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Dish $dish)
    {
		$ufm = Ufm::all();
		$type_of_dish = TypeOfDish::all();

        return view('pages.dish.edit', [
            'model' => $dish,
			"ufm" => $ufm,
			"type_of_dish" => $type_of_dish,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Dish $dish)
    {
        $dish->fill($request->all());

        if ($dish->save()) {

            session()->flash('app_message', 'Dish successfully updated');
            return redirect()->route('dish.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Dish');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Dish  $dish
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Dish $dish)
    {
        if ($dish->delete()) {
                session()->flash('app_message', 'Dish successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Dish');
            }

        return redirect()->back();
    }
}
