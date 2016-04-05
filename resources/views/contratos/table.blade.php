<table class="table">
    <thead>
    <th>Codigo Contrato</th>
			<th>Cedula Afiliado</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Codigo Colectivo</th>
			<th>Codigo Plan</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($contratos as $contratos)
        <tr>
            <td>{!! $contratos->codigo_contrato !!}</td>
			<td>{!! $contratos->cedula_afiliado !!}</td>
			<td>{!! $contratos->fecha_inicio !!}</td>
			<td>{!! $contratos->fecha_fin !!}</td>
			<td>{!! $contratos->codigo_colectivo !!}</td>
			<td>{!! $contratos->codigo_plan !!}</td>
            <td>
                <a href="{!! route('contratos.edit', [$contratos->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('contratos.delete', [$contratos->id]) !!}" onclick="return confirm('Are you sure wants to delete this Contratos?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
