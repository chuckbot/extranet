<table class="table">
    <thead>
    <th>Codigo Colectivo</th>
			<th>Nombre</th>
			<th>Codigo Aseguradora</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($colectivos as $colectivo)
        <tr>
            <td>{!! $colectivo->codigo_colectivo !!}</td>
			<td>{!! $colectivo->nombre !!}</td>
			<td>{!! $colectivo->codigo_aseguradora !!}</td>
            <td>
                <a href="{!! route('colectivos.edit', [$colectivo->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('colectivos.delete', [$colectivo->id]) !!}" onclick="return confirm('Are you sure wants to delete this Colectivo?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
