<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('products.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-warning px-2 mx-2" href="{{route('products.edit',$record->id)}}">
                        <span class="text-dark">Ред</span>
</a>
                    <form onsubmit="return confirm('Вы уверены что хотите удалить?')"
      action="{{route('products.destroy',$record->id)}}"
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
			<th>Название продукта</th>
			<td>{{$record->Name_product}}</td>
		</tr>
		<tr>
			<th>Код продукта</th>
			<td>{{$record->Code_pt}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
