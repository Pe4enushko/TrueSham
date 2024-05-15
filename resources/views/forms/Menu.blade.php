<form action="{{isset($route)?$route:route('menu.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>


    <div class="form-group">
        <label for="dish_id">Номер блюда</label>
        <select class="form-control {{ $errors->has('dish_id') ? ' is-invalid' : '' }}" name="dish_id" id="dish_id">
            @if(isset($dish))
                @foreach ($dish as $data)
                    <option value="{{$data->id}}" {{$data->id==$model->dish_id?'selected':''}}>{{$data->Name_dish}}</option>
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
    <label for="month_id">Номер месяца</label>
    <select class="form-control {{ $errors->has('month_id') ? ' is-invalid' : '' }}" name="month_id" id="month_id">
        @if(isset($month))
@foreach ($month as $data)
<option value="{{$data->id}}" {{$data->id==$model->month_id?'selected':''}}>{{$data->Name_month}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('month_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('month_id') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="menu_date">Дата меню</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('menu_date') ? ' is-invalid' : '' }}" name="menu_date" id="menu_date"
               value="{{old('menu_date',$model->menu_date)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="menu_date" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('menu_date'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('menu_date') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="menu_type_id">Вид меню</label>
    <select class="form-control {{ $errors->has('menu_type_id') ? ' is-invalid' : '' }}" name="menu_type_id" id="menu_type_id">
        @if(isset($menu_type))
@foreach ($menu_type as $data)
<option value="{{$data->id}}" {{$data->id==$model->menu_type_id?'selected':''}}>{{$data->id}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('menu_type_id'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('menu_type_id') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="dish_count">Количество</label>
        <input type="number" class="form-control {{ $errors->has('dish_count') ? ' is-invalid' : '' }}" name="dish_count" id="dish_count" value="{{old('dish_count',$model->dish_count)}}" placeholder="" required="required" >
          @if($errors->has('dish_count'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('dish_count') }}</strong>
    </div>
  @endif
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Очистить"/>
        <input type="submit" class="btn btn-primary" value="Сохранить"/>

    </div>
</form>
