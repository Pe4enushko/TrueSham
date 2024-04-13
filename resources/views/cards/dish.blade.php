<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('dish.show',$record->Code_dish)}}"> {{$record->Code_dish}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('dish.edit',$record->Code_dish)}}">
    <span class="fa fa-pencil"></span>
</a>
                    <form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('dish.destroy',$record->Code_dish)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
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
