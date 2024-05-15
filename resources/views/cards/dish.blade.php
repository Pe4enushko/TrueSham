<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('dishes.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-warning px-2 mx-2" href="{{route('dishes.edit',$record->id)}}">
    <span class="text-dark">Ред</span>
</a>
                    <form onsubmit="return confirm('Вы действительно хотите удалить?')"
      action="{{route('dishes.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-danger cursor-pointer">
        <i class="text-light fa fa-remove">Удал</i>
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
			<th>Code Ufm</th>
			<td>{{$record->Code_ufm}}</td>
		</tr>
		<tr>
			<th>Name Dish</th>
			<td>{{$record->Name_dish}}</td>
		</tr>
		<tr>
			<th>Description</th>
			<td>{{$record->Description}}</td>
		</tr>
		<tr>
			<th>Calorie</th>
			<td>{{$record->Calorie}}</td>
		</tr>
		<tr>
			<th>Price</th>
			<td>{{$record->Price}}</td>
		</tr>
		<tr>
			<th>Code Tod</th>
			<td>{{$record->Code_tod}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
