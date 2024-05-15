<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('typeofdish.show', $record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-warning px-2 mx-2" href="{{route('typeofdish.edit', $record->id)}}">
                        <span class="text-dark">Ред</span>
</a>
                    <form onsubmit="return confirm('Вы уверены что хотите удалить?')"
      action="{{route('typeofdish.destroy',$record->id)}}"
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
			<th>Название вида блюда</th>
			<td>{{$record->Name_tod}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
