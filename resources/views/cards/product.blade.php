<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('product.show',$record->Code_product)}}"> {{$record->Code_product}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('product.edit',$record->Code_product)}}">
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
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Name Product</th>
			<td>{{$record->Name_product}}</td>
		</tr>
		<tr>
			<th>Code Pt</th>
			<td>{{$record->Code_pt}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
