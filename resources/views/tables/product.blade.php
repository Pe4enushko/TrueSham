<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Name Product </th>
		<th>Code Pt </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->Name_product }} </td>
	 	<td> {{$record->Code_pt}} </td>
	<td><a class="btn btn-secondary" href="{{route('product.show',$record->Code_product)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('product.edit',$record->Code_product)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('product.destroy',$record->Code_product)}}"
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
