<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductType;
use App\Http\Requests\ProductType\Index;
use App\Http\Requests\ProductType\Show;
use App\Http\Requests\ProductType\Create;
use App\Http\Requests\ProductType\Store;
use App\Http\Requests\ProductType\Edit;
use App\Http\Requests\ProductType\Update;
use App\Http\Requests\ProductType\Destroy;


/**
 * Description of ProductTypeController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class ProductTypeController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.producttypes.index', ['records' => ProductType::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  ProductType  $producttype
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, ProductType $producttype)
    {
        return view('pages.producttypes.show', [
                'record' =>$producttype,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.producttypes.create', [
            'model' => new ProductType,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new ProductType;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'ProductType saved successfully');
            return redirect()->route('producttypes.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving ProductType');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  ProductType  $producttype
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, ProductType $producttype)
    {

        return view('pages.producttypes.edit', [
            'model' => $producttype,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  ProductType  $producttype
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,ProductType $producttype)
    {
        $producttype->fill($request->all());

        if ($producttype->save()) {

            session()->flash('app_message', 'ProductType successfully updated');
            return redirect()->route('producttypes.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating ProductType');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  ProductType  $producttype
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, ProductType $producttype)
    {
        if ($producttype->delete()) {
                session()->flash('app_message', 'ProductType successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting ProductType');
            }

        return redirect()->back();
    }
}
