<table class="table">
    <thead>
    <th>Name</th>
			<th>Email</th>
			<th>Department</th>
			<th>Role</th>
			<th>User</th>
			<th>Salt</th>
			<th>Password</th>
			<th>Act</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->name !!}</td>
			<td>{!! $user->email !!}</td>
			<td>{!! $user->department !!}</td>
			<td>{!! $user->role !!}</td>
			<td>{!! $user->user !!}</td>
			<td>{!! $user->salt !!}</td>
			<td>{!! $user->password !!}</td>
			<td>{!! $user->act !!}</td>
            <td>
                <a href="{!! route('users.edit', [$user->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('users.delete', [$user->id]) !!}" onclick="return confirm('Are you sure wants to delete this User?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
