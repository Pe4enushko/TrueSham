<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Month Id </th>
		<th>Menu Date </th>
		<th>Menu Type Id </th>
		<th>Dish Count </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->month_id }} </td>
	 	<td> {{$record->menu_date }} </td>
	 	<td> {{$record->menu_type_id }} </td>
	 	<td> {{$record->dish_count }} </td>
	<td><a class="btn btn-secondary" href="{{route('menu.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('menu.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('menu.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form></td></tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            {{{$records->render()}}}
        </td>
    </tr>
    </tfoot>
</table>
