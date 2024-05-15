<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('menu.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-warning px-2 mx-2" href="{{route('dishes.edit',$record->dish->id)}}">
                        <span class="text-dark">Ред</span>
</a>
                    <form onsubmit="return confirm('Вы действительно хотите удалить?')"
      action="{{route('menu.destroy',$record->dish->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger cursor-pointer">
                            <i class="text-light fa fa-remove">Удалить</i>
                        </button>
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Месяц</th>
			<td>{{$record->month->Name_month}}</td>
		</tr>
		<tr>
			<th>Дата</th>
			<td>{{$record->menu_date}}</td>
		</tr>
		<tr>
			<th>Вид меню</th>
			<td>{{$record->menuType->Name_mt}}</td>
		</tr>
		<tr>
			<th>Количество</th>
			<td>{{$record->dish_count}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
