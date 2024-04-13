<form action="{{isset($route)?$route:route('product.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="Name_product">Name Product</label>
        <input type="text" class="form-control {{ $errors->has('Name_product') ? ' is-invalid' : '' }}" name="Name_product" id="Name_product" value="{{old('Name_product',$model->Name_product)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_product'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_product') }}</strong>
    </div>
  @endif
    </div>

<div class="form-group">
    <label for="Code_pt">Code Pt</label>
    <select class="form-control {{ $errors->has('Code_pt') ? ' is-invalid' : '' }}" name="Code_pt" id="Code_pt">
        @if(isset($product_type))

@foreach ($product_type as $data)
<option value="{{$data->Code_pt}}" {{$data->Code_pt==$model->Code_pt?'selected':''}}>{{$data->Name_pt}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('Code_pt'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Code_pt') }}</strong>
    </div>
  @endif
</div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>
