<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductsByDish;
use App\Models\Product;
use App\Models\Dish;
use App\Http\Requests\ProductsByDish\Index;
use App\Http\Requests\ProductsByDish\Show;
use App\Http\Requests\ProductsByDish\Create;
use App\Http\Requests\ProductsByDish\Store;
use App\Http\Requests\ProductsByDish\Edit;
use App\Http\Requests\ProductsByDish\Update;
use App\Http\Requests\ProductsByDish\Destroy;


/**
 * Description of ProductsByDishController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class ProductsByDishController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.productsbydish.index', ['records' => ProductsByDish::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  ProductsByDish  $productsbydish
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, ProductsByDish $productsbydish)
    {
        return view('pages.productsbydish.show', [
                'record' =>$productsbydish,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {
		$product = Product::all(['id']);
		$dish = Dish::all(['id']);

        return view('pages.productsbydish.create', [
            'model' => new ProductsByDish,
			"product" => $product,
			"dish" => $dish,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new ProductsByDish;
        $model->fill($request->all());

        if ($model->save()) {

            session()->flash('app_message', 'ProductsByDish saved successfully');
            return redirect()->route('productsbydish.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving ProductsByDish');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  ProductsByDish  $productsbydish
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, ProductsByDish $productsbydish)
    {
		$product = Product::all(['id']);
		$dish = Dish::all(['id']);

        return view('pages.productsbydish.edit', [
            'model' => $productsbydish,
			"product" => $product,
			"dish" => $dish,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  ProductsByDish  $productsbydish
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,ProductsByDish $productsbydish)
    {
        $productsbydish->fill($request->all());

        if ($productsbydish->save()) {

            session()->flash('app_message', 'ProductsByDish successfully updated');
            return redirect()->route('productsbydish.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating ProductsByDish');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  ProductsByDish  $productsbydish
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, ProductsByDish $productsbydish)
    {
        if ($productsbydish->delete()) {
                session()->flash('app_message', 'ProductsByDish successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting ProductsByDish');
            }

        return redirect()->back();
    }
}
