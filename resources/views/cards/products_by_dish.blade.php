<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('productsbydish.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-warning px-2 mx-2" href="{{route('productsbydish.edit',$record->id)}}">
                        <span class="text-dark">Ред</span>
</a>
                    <form onsubmit="return confirm('AВы действительно хотите удалить?')"
      action="{{route('productsbydish.destroy',$record->id)}}"
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
			<th>Код ед.измерения</th>
			<td>{{$record->ufm_id}}</td>
		</tr>
		<tr>
			<th>Код блюда</th>
			<td>{{$record->dish_id}}</td>
		</tr>
		<tr>
			<th>Количесвто продуктов</th>
			<td>{{$record->product_count}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
