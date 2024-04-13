<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Code Ufm </th>
		<th>Name Dish </th>
		<th>Description </th>
		<th>Calorie </th>
		<th>Price </th>
		<th>Code Tod </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->Code_ufm }} </td>
	 	<td> {{$record->Name_dish }} </td>
	 	<td> {{$record->Description }} </td>
	 	<td> {{$record->Calorie }} </td>
	 	<td> {{$record->Price }} </td>
	 	<td> {{$record->Code_tod }} </td>
	<td><a class="btn btn-secondary" href="{{route('dish.show',$record->Code_dish)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('dish.edit',$record->Code_dish)}}">
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