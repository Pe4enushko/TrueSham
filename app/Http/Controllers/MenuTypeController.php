<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MenuType;
use App\Http\Requests\MenuType\Index;
use App\Http\Requests\MenuType\Show;
use App\Http\Requests\MenuType\Create;
use App\Http\Requests\MenuType\Store;
use App\Http\Requests\MenuType\Edit;
use App\Http\Requests\MenuType\Update;
use App\Http\Requests\MenuType\Destroy;


/**
 * Description of MenuTypeController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class MenuTypeController extends Controller
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
        return view('pages.menutypes.index', ['records' => MenuType::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  MenuType  $menutype
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, MenuType $menutype)
    {
        return view('pages.menutypes.show', [
                'record' =>$menutype,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.menutypes.create', [
            'model' => new MenuType,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new MenuType;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'MenuType saved successfully');
            return redirect()->route('menutypes.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving MenuType');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  MenuType  $menutype
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, MenuType $menutype)
    {

        return view('pages.menutypes.edit', [
            'model' => $menutype,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  MenuType  $menutype
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,MenuType $menutype)
    {
        $menutype->fill($request->all());

        if ($menutype->save()) {

            session()->flash('app_message', 'MenuType successfully updated');
            return redirect()->route('menutypes.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating MenuType');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  MenuType  $menutype
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, MenuType $menutype)
    {
        if ($menutype->delete()) {
                session()->flash('app_message', 'MenuType successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting MenuType');
            }

        return redirect()->back();
    }
}
