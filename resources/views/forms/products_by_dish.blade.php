<form action="{{isset($route)?$route:route('productsbydish.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="ufm_id">Ufm Id</label>
        <input type="number" class="form-control {{ $errors->has('ufm_id') ? ' is-invalid' : '' }}" name="ufm_id" id="ufm_id" value="{{old('ufm_id',$model->ufm_id)}}" placeholder="" required="required" >
          @if($errors->has('ufm_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('ufm_id') }}</strong>
    </div>
  @endif
    </div>

<div class="form-group">
    <label for="dish_id">Dish Id</label>
    <select class="form-control {{ $errors->has('dish_id') ? ' is-invalid' : '' }}" name="dish_id" id="dish_id">
        @if(isset($dish))
@foreach ($dish as $data)
<option value="{{$data->id}}" {{$data->id==$model->dish_id?'selected':''}}>{{$data->id}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('dish_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('dish_id') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="product_count">Product Count</label>
        <input type="number" class="form-control {{ $errors->has('product_count') ? ' is-invalid' : '' }}" name="product_count" id="product_count" value="{{old('product_count',$model->product_count)}}" placeholder="" required="required" >
          @if($errors->has('product_count'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('product_count') }}</strong>
    </div>
  @endif
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>
