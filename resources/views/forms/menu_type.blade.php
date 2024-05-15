<form action="{{isset($route)?$route:route('menutypes.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="Name_mt">Название типа меню</label>
        <input type="text" class="form-control {{ $errors->has('Name_mt') ? ' is-invalid' : '' }}" name="Name_mt" id="Name_mt" value="{{old('Name_mt',$model->Name_mt)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_mt'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_mt') }}</strong>
    </div>
  @endif
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Очистить"/>
        <input type="submit" class="btn btn-primary" value="Сохранить"/>

    </div>
</form>
