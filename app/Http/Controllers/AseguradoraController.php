<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAseguradoraRequest;
use App\Http\Requests\UpdateAseguradoraRequest;
use App\Libraries\Repositories\AseguradoraRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class AseguradoraController extends AppBaseController
{

	/** @var  AseguradoraRepository */
	private $aseguradoraRepository;

	function __construct(AseguradoraRepository $aseguradoraRepo)
	{
		$this->aseguradoraRepository = $aseguradoraRepo;
	}

	/**
	 * Display a listing of the Aseguradora.
	 *
	 * @return Response
	 */
	public function index()
	{
		$aseguradoras = $this->aseguradoraRepository->paginate(10);

		return view('aseguradoras.index')
			->with('aseguradoras', $aseguradoras);
	}

	/**
	 * Show the form for creating a new Aseguradora.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('aseguradoras.create');
	}

	/**
	 * Store a newly created Aseguradora in storage.
	 *
	 * @param CreateAseguradoraRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAseguradoraRequest $request)
	{
		$input = $request->all();

		$aseguradora = $this->aseguradoraRepository->create($input);

		Flash::success('Aseguradora saved successfully.');

		return redirect(route('aseguradoras.index'));
	}

	/**
	 * Display the specified Aseguradora.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$aseguradora = $this->aseguradoraRepository->find($id);

		if(empty($aseguradora))
		{
			Flash::error('Aseguradora not found');

			return redirect(route('aseguradoras.index'));
		}

		return view('aseguradoras.show')->with('aseguradora', $aseguradora);
	}

	/**
	 * Show the form for editing the specified Aseguradora.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$aseguradora = $this->aseguradoraRepository->find($id);

		if(empty($aseguradora))
		{
			Flash::error('Aseguradora not found');

			return redirect(route('aseguradoras.index'));
		}

		return view('aseguradoras.edit')->with('aseguradora', $aseguradora);
	}

	/**
	 * Update the specified Aseguradora in storage.
	 *
	 * @param  int              $id
	 * @param UpdateAseguradoraRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateAseguradoraRequest $request)
	{
		$aseguradora = $this->aseguradoraRepository->find($id);

		if(empty($aseguradora))
		{
			Flash::error('Aseguradora not found');

			return redirect(route('aseguradoras.index'));
		}

		$this->aseguradoraRepository->updateRich($request->all(), $id);

		Flash::success('Aseguradora updated successfully.');

		return redirect(route('aseguradoras.index'));
	}

	/**
	 * Remove the specified Aseguradora from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$aseguradora = $this->aseguradoraRepository->find($id);

		if(empty($aseguradora))
		{
			Flash::error('Aseguradora not found');

			return redirect(route('aseguradoras.index'));
		}

		$this->aseguradoraRepository->delete($id);

		Flash::success('Aseguradora deleted successfully.');

		return redirect(route('aseguradoras.index'));
	}
}
