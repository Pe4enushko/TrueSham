<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Dish;
use App\Models\Month;
use App\Models\MenuType;
use App\Http\Requests\Menu\Index;
use App\Http\Requests\Menu\Show;
use App\Http\Requests\Menu\Create;
use App\Http\Requests\Menu\Store;
use App\Http\Requests\Menu\Edit;
use App\Http\Requests\Menu\Update;
use App\Http\Requests\Menu\Destroy;


/**
 * Description of MenuController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class MenuController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        $dates = Menu::groupBy(["menu_date","id"])->select(["menu_date","id"])->get()->all();
        $data = [];
        $ids = [];

        foreach ($dates as $date) {
            array_push($data, $date["menu_date"]->day);
            $ids = array_merge($ids, [$date["menu_date"]->format('Y-m-d') => $date["id"]]);
        }
        
        return view('pages.menu.index', ['records' => $data, 'ids' => $ids]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Menu $menu)
    {
        $data = Menu::where("menu_date", "=", $menu["menu_date"]->format('Y-m-d'))->get()->all();

        return view('pages.menu.show', [
                'records' =>$data,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
		$dish = Dish::all();
		$month = Month::all();
		$menu_type = MenuType::all();

        return view('pages.menu.create', [
            'model' => new Menu,
			"dish" => $dish,
			"month" => $month,
			"menu_type" => $menu_type,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Menu;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'menu saved successfully');
            return redirect()->route('menu.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving menu');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Menu $menu)
    {
		$dish = Dish::all(['id']);
		$month = Month::all(['id']);
		$menu_type = MenuType::all(['id']);

        return view('pages.menu.edit', [
            'model' => $menu,
			"dish" => $dish,
			"month" => $month,
			"menu_type" => $menu_type,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Menu $menu)
    {
        $menu->fill($request->all());

        if ($menu->save()) {

            session()->flash('app_message', 'menu successfully updated');
            return redirect()->route('menu.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating menu');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Menu  $menu
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Menu $menu)
    {
        if ($menu->delete()) {
                session()->flash('app_message', 'menu successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting menu');
            }

        return redirect()->back();
    }
}
