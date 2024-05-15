<form action="{{isset($route)?$route:route('producttypes.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="Name_pt">Название типа продуктов</label>
        <input type="text" class="form-control {{ $errors->has('Name_pt') ? ' is-invalid' : '' }}" name="Name_pt" id="Name_pt" value="{{old('Name_pt',$model->Name_pt)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_pt'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_pt') }}</strong>
    </div>
  @endif
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Очистить"/>
        <input type="submit" class="btn btn-primary" value="Сохранить"/>

    </div>
</form>
