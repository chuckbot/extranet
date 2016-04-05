<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEspecialidades_ExtranetRequest;
use App\Http\Requests\UpdateEspecialidades_ExtranetRequest;
use App\Libraries\Repositories\Especialidades_ExtranetRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class Especialidades_ExtranetController extends AppBaseController
{

	/** @var  Especialidades_ExtranetRepository */
	private $especialidadesExtranetRepository;

	function __construct(Especialidades_ExtranetRepository $especialidadesExtranetRepo)
	{
		$this->especialidadesExtranetRepository = $especialidadesExtranetRepo;
	}

	/**
	 * Display a listing of the Especialidades_Extranet.
	 *
	 * @return Response
	 */
	public function index()
	{
		$especialidadesExtranets = $this->especialidadesExtranetRepository->paginate(10);

		return view('especialidadesExtranets.index')
			->with('especialidadesExtranets', $especialidadesExtranets);
	}

	/**
	 * Show the form for creating a new Especialidades_Extranet.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('especialidadesExtranets.create');
	}

	/**
	 * Store a newly created Especialidades_Extranet in storage.
	 *
	 * @param CreateEspecialidades_ExtranetRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEspecialidades_ExtranetRequest $request)
	{
		$input = $request->all();

		$especialidadesExtranet = $this->especialidadesExtranetRepository->create($input);

		Flash::success('Especialidades_Extranet saved successfully.');

		return redirect(route('especialidadesExtranets.index'));
	}

	/**
	 * Display the specified Especialidades_Extranet.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$especialidadesExtranet = $this->especialidadesExtranetRepository->find($id);

		if(empty($especialidadesExtranet))
		{
			Flash::error('Especialidades_Extranet not found');

			return redirect(route('especialidadesExtranets.index'));
		}

		return view('especialidadesExtranets.show')->with('especialidadesExtranet', $especialidadesExtranet);
	}

	/**
	 * Show the form for editing the specified Especialidades_Extranet.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$especialidadesExtranet = $this->especialidadesExtranetRepository->find($id);

		if(empty($especialidadesExtranet))
		{
			Flash::error('Especialidades_Extranet not found');

			return redirect(route('especialidadesExtranets.index'));
		}

		return view('especialidadesExtranets.edit')->with('especialidadesExtranet', $especialidadesExtranet);
	}

	/**
	 * Update the specified Especialidades_Extranet in storage.
	 *
	 * @param  int              $id
	 * @param UpdateEspecialidades_ExtranetRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateEspecialidades_ExtranetRequest $request)
	{
		$especialidadesExtranet = $this->especialidadesExtranetRepository->find($id);

		if(empty($especialidadesExtranet))
		{
			Flash::error('Especialidades_Extranet not found');

			return redirect(route('especialidadesExtranets.index'));
		}

		$this->especialidadesExtranetRepository->updateRich($request->all(), $id);

		Flash::success('Especialidades_Extranet updated successfully.');

		return redirect(route('especialidadesExtranets.index'));
	}

	/**
	 * Remove the specified Especialidades_Extranet from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$especialidadesExtranet = $this->especialidadesExtranetRepository->find($id);

		if(empty($especialidadesExtranet))
		{
			Flash::error('Especialidades_Extranet not found');

			return redirect(route('especialidadesExtranets.index'));
		}

		$this->especialidadesExtranetRepository->delete($id);

		Flash::success('Especialidades_Extranet deleted successfully.');

		return redirect(route('especialidadesExtranets.index'));
	}
}
