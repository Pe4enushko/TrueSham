<form action="{{isset($route)?$route:route('typesofdish.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="Name_tod">Name Tod</label>
        <input type="text" class="form-control {{ $errors->has('Name_tod') ? ' is-invalid' : '' }}" name="Name_tod" id="Name_tod" value="{{old('Name_tod',$model->Name_tod)}}" placeholder="" maxlength="255" required="required" >
          @if($errors->has('Name_tod'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('Name_tod') }}</strong>
    </div>
  @endif
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>
