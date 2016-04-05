<table class="table">
    <thead>
    <th>Codigo Especialidad</th>
			<th>Rama</th>
			<th>Descripcion</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($especialidadesExtranets as $especialidadesExtranet)
        <tr>
            <td>{!! $especialidadesExtranet->codigo_especialidad !!}</td>
			<td>{!! $especialidadesExtranet->rama !!}</td>
			<td>{!! $especialidadesExtranet->descripcion !!}</td>
            <td>
                <a href="{!! route('especialidadesExtranets.edit', [$especialidadesExtranet->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('especialidadesExtranets.delete', [$especialidadesExtranet->id]) !!}" onclick="return confirm('Are you sure wants to delete this Especialidades_Extranet?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
