<form action="{{isset($route)?$route:route('dishes.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
    <div class="form-group">
    <label for="Code_ufm">Код единиц измерения</label>
    <select class="form-control {{ $errors->has('Code_ufm') ? ' is-invalid' : '' }}" name="Code_ufm" id="Code_ufm">
        @if(isset($ufm))
@foreach ($ufm as $data)
<option value="{{$data->id}}" {{$data->id==$model->Code_ufm?'selected':''}}>{{$data->id}}</option>
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
        <label for="Name_dish">Название блюда</label>
        <input type="text" class="form-control {{ $errors->has('Name_dish') ? ' is-invalid' : '' }}" name="Name_dish" id="Name_dish" value="{{old('Name_dish',$model->Name_dish)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_dish'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_dish') }}</strong>
    </div>
  @endif
    </div>

    <div class="form-group">
        <label for="Description">Описание</label>
        <input type="text" class="form-control {{ $errors->has('Description') ? ' is-invalid' : '' }}" name="Description" id="Description" value="{{old('Description',$model->Description)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Description'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Description') }}</strong>
    </div>
  @endif
    </div>

    <div class="form-group">
        <label for="Calorie">Калории</label>
        <input type="number" class="form-control {{ $errors->has('Calorie') ? ' is-invalid' : '' }}" name="Calorie" id="Calorie" value="{{old('Calorie',$model->Calorie)}}" placeholder="" required="required" >
          @if($errors->has('Calorie'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Calorie') }}</strong>
    </div>
  @endif
    </div>

    <div class="form-group">
        <label for="Price">Цена</label>
        <input type="number" class="form-control {{ $errors->has('Price') ? ' is-invalid' : '' }}" name="Price" id="Price" value="{{old('Price',$model->Price)}}" placeholder="" required="required" >
          @if($errors->has('Price'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Price') }}</strong>
    </div>
  @endif
    </div>

<div class="form-group">
    <label for="Code_tod">Код типа блюда</label>
    <select class="form-control {{ $errors->has('Code_tod') ? ' is-invalid' : '' }}" name="Code_tod" id="Code_tod">
        @if(isset($type_of_dish))
@foreach ($type_of_dish as $data)
<option value="{{$data->id}}" {{$data->id==$model->Code_tod?'selected':''}}>{{$data->id}}</option>
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
        <input type="reset" class="btn btn-default" value="Очистить"/>
        <input type="submit" class="btn btn-primary" value="Сохранить"/>

    </div>
</form>
