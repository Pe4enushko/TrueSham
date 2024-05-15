<form action="{{isset($route)?$route:route('months.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="Name_month">Название месяца</label>
        <input type="text" class="form-control {{ $errors->has('Name_month') ? ' is-invalid' : '' }}" name="Name_month" id="Name_month" value="{{old('Name_month',$model->Name_month)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_month'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_month') }}</strong>
    </div>
  @endif
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Очистить"/>
        <input type="submit" class="btn btn-primary" value="Сохранить"/>

    </div>
</form>
