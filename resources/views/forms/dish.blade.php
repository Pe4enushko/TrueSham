<form action="{{isset($route)?$route:route('dish.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
    <div class="form-group">
    <label for="Code_ufm">Code Ufm</label>
    <select class="form-control {{ $errors->has('Code_ufm') ? ' is-invalid' : '' }}" name="Code_ufm" id="Code_ufm">
        @if(isset($ufm))
@foreach ($ufm as $data)
<option value="{{$data->Code_ufm}}" {{$data->Code_ufm==$model->Code_ufm?'selected':''}}>{{$data->Name_ufm}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('Code_ufm'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Code_ufm') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="Name_dish">Name Dish</label>
        <input type="text" class="form-control {{ $errors->has('Name_dish') ? ' is-invalid' : '' }}" name="Name_dish" id="Name_dish" value="{{old('Name_dish',$model->Name_dish)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_dish'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_dish') }}</strong>
    </div>
  @endif
    </div>

    <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" class="form-control {{ $errors->has('Description') ? ' is-invalid' : '' }}" name="Description" id="Description" value="{{old('Description',$model->Description)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Description'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Description') }}</strong>
    </div>
  @endif
    </div>

    <div class="form-group">
        <label for="Calorie">Calorie</label>
        <input type="number" class="form-control {{ $errors->has('Calorie') ? ' is-invalid' : '' }}" name="Calorie" id="Calorie" value="{{old('Calorie',$model->Calorie)}}" placeholder="" required="required" >
          @if($errors->has('Calorie'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Calorie') }}</strong>
    </div>
  @endif
    </div>

    <div class="form-group">
        <label for="Price">Price</label>
        <input type="number" class="form-control {{ $errors->has('Price') ? ' is-invalid' : '' }}" name="Price" id="Price" value="{{old('Price',$model->Price)}}" placeholder="" required="required" >
          @if($errors->has('Price'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Price') }}</strong>
    </div>
  @endif
    </div>

<div class="form-group">
    <label for="Code_tod">Code Tod</label>
    <select class="form-control {{ $errors->has('Code_tod') ? ' is-invalid' : '' }}" name="Code_tod" id="Code_tod">
        @if(isset($type_of_dish))
@foreach ($type_of_dish as $data)
<option value="{{$data->Code_tod}}" {{$data->Code_tod==$model->Code_tod?'selected':''}}>{{$data->Name_tod}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('Code_tod'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Code_tod') }}</strong>
    </div>
  @endif
</div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>
