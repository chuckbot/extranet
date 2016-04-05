<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSubsidiaryRequest;
use App\Http\Requests\UpdateSubsidiaryRequest;
use App\Libraries\Repositories\SubsidiaryRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class SubsidiaryController extends AppBaseController
{

	/** @var  SubsidiaryRepository */
	private $subsidiaryRepository;

	function __construct(SubsidiaryRepository $subsidiaryRepo)
	{
		$this->subsidiaryRepository = $subsidiaryRepo;
	}

	/**
	 * Display a listing of the Subsidiary.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subsidiaries = $this->subsidiaryRepository->paginate(10);

		return view('subsidiaries.index')
			->with('subsidiaries', $subsidiaries);
	}

	/**
	 * Show the form for creating a new Subsidiary.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('subsidiaries.create');
	}

	/**
	 * Store a newly created Subsidiary in storage.
	 *
	 * @param CreateSubsidiaryRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSubsidiaryRequest $request)
	{
		$input = $request->all();

		$subsidiary = $this->subsidiaryRepository->create($input);

		Flash::success('Subsidiary saved successfully.');

		return redirect(route('subsidiaries.index'));
	}

	/**
	 * Display the specified Subsidiary.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$subsidiary = $this->subsidiaryRepository->find($id);

		if(empty($subsidiary))
		{
			Flash::error('Subsidiary not found');

			return redirect(route('subsidiaries.index'));
		}

		return view('subsidiaries.show')->with('subsidiary', $subsidiary);
	}

	/**
	 * Show the form for editing the specified Subsidiary.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$subsidiary = $this->subsidiaryRepository->find($id);

		if(empty($subsidiary))
		{
			Flash::error('Subsidiary not found');

			return redirect(route('subsidiaries.index'));
		}

		return view('subsidiaries.edit')->with('subsidiary', $subsidiary);
	}

	/**
	 * Update the specified Subsidiary in storage.
	 *
	 * @param  int              $id
	 * @param UpdateSubsidiaryRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateSubsidiaryRequest $request)
	{
		$subsidiary = $this->subsidiaryRepository->find($id);

		if(empty($subsidiary))
		{
			Flash::error('Subsidiary not found');

			return redirect(route('subsidiaries.index'));
		}

		$this->subsidiaryRepository->updateRich($request->all(), $id);

		Flash::success('Subsidiary updated successfully.');

		return redirect(route('subsidiaries.index'));
	}

	/**
	 * Remove the specified Subsidiary from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$subsidiary = $this->subsidiaryRepository->find($id);

		if(empty($subsidiary))
		{
			Flash::error('Subsidiary not found');

			return redirect(route('subsidiaries.index'));
		}

		$this->subsidiaryRepository->delete($id);

		Flash::success('Subsidiary deleted successfully.');

		return redirect(route('subsidiaries.index'));
	}
}
