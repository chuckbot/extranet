<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Libraries\Repositories\UserRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class UserController extends AppBaseController
{

	/** @var  UserRepository */
	private $userRepository;

	function __construct(UserRepository $userRepo)
	{
		$this->userRepository = $userRepo;
	}

	/**
	 * Display a listing of the User.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userRepository->paginate(10);

		return view('users.index')
			->with('users', $users);
	}

	/**
	 * Show the form for creating a new User.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.create');
	}

	/**
	 * Store a newly created User in storage.
	 *
	 * @param CreateUserRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
		$input = $request->all();

		$user = $this->userRepository->create($input);

		Flash::success('User saved successfully.');

		return redirect(route('users.index'));
	}

	/**
	 * Display the specified User.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->userRepository->find($id);

		if(empty($user))
		{
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		return view('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified User.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->userRepository->find($id);

		if(empty($user))
		{
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		return view('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified User in storage.
	 *
	 * @param  int              $id
	 * @param UpdateUserRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateUserRequest $request)
	{
		$user = $this->userRepository->find($id);

		if(empty($user))
		{
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		$this->userRepository->updateRich($request->all(), $id);

		Flash::success('User updated successfully.');

		return redirect(route('users.index'));
	}

	/**
	 * Remove the specified User from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = $this->userRepository->find($id);

		if(empty($user))
		{
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		$this->userRepository->delete($id);

		Flash::success('User deleted successfully.');

		return redirect(route('users.index'));
	}
}
