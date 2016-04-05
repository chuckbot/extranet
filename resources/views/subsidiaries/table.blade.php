<table class="table">
    <thead>
    <th>Name</th>
			<th>Lastname</th>
			<th>Cedula</th>
			<th>Birthday</th>
			<th>Email</th>
			<th>Sex</th>
			<th>Val User</th>
			<th>Subsidiary Type</th>
			<th>Telephone</th>
			<th>Cedula Titular</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($subsidiaries as $subsidiary)
        <tr>
            <td>{!! $subsidiary->name !!}</td>
			<td>{!! $subsidiary->lastname !!}</td>
			<td>{!! $subsidiary->cedula !!}</td>
			<td>{!! $subsidiary->birthday !!}</td>
			<td>{!! $subsidiary->email !!}</td>
			<td>{!! $subsidiary->sex !!}</td>
			<td>{!! $subsidiary->val_user !!}</td>
			<td>{!! $subsidiary->subsidiary_type !!}</td>
			<td>{!! $subsidiary->telephone !!}</td>
			<td>{!! $subsidiary->cedula_titular !!}</td>
            <td>
                <a href="{!! route('subsidiaries.edit', [$subsidiary->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('subsidiaries.delete', [$subsidiary->id]) !!}" onclick="return confirm('Are you sure wants to delete this Subsidiary?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
