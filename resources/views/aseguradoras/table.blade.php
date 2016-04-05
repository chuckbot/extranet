<table class="table">
    <thead>
    <th>Codigo Aseguradora</th>
			<th>Nombre</th>
			<th>Rif</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($aseguradoras as $aseguradora)
        <tr>
            <td>{!! $aseguradora->codigo_aseguradora !!}</td>
			<td>{!! $aseguradora->nombre !!}</td>
			<td>{!! $aseguradora->rif !!}</td>
            <td>
                <a href="{!! route('aseguradoras.edit', [$aseguradora->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('aseguradoras.delete', [$aseguradora->id]) !!}" onclick="return confirm('Are you sure wants to delete this Aseguradora?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
