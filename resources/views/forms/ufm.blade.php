<form action="{{isset($route)?$route:route('ufm.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="Name_ufm">Название ед.измерения</label>
        <input type="text" class="form-control {{ $errors->has('Name_ufm') ? ' is-invalid' : '' }}" name="Name_ufm" id="Name_ufm" value="{{old('Name_ufm',$model->Name_ufm)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_ufm'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_ufm') }}</strong>
    </div>
  @endif
    </div>

    <div class="form-group">
        <label for="Designation">Обозначение</label>
        <input type="text" class="form-control {{ $errors->has('Designation') ? ' is-invalid' : '' }}" name="Designation" id="Designation" value="{{old('Designation',$model->Designation)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Designation'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Designation') }}</strong>
    </div>
  @endif
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Очистить"/>
        <input type="submit" class="btn btn-primary" value="Сохранить"/>

    </div>
</form>
