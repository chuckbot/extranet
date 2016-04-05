<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateColectivoRequest;
use App\Http\Requests\UpdateColectivoRequest;
use App\Libraries\Repositories\ColectivoRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ColectivoController extends AppBaseController
{

	/** @var  ColectivoRepository */
	private $colectivoRepository;

	function __construct(ColectivoRepository $colectivoRepo)
	{
		$this->colectivoRepository = $colectivoRepo;
	}

	/**
	 * Display a listing of the Colectivo.
	 *
	 * @return Response
	 */
	public function index()
	{
		$colectivos = $this->colectivoRepository->paginate(10);

		return view('colectivos.index')
			->with('colectivos', $colectivos);
	}

	/**
	 * Show the form for creating a new Colectivo.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('colectivos.create');
	}

	/**
	 * Store a newly created Colectivo in storage.
	 *
	 * @param CreateColectivoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateColectivoRequest $request)
	{
		$input = $request->all();

		$colectivo = $this->colectivoRepository->create($input);

		Flash::success('Colectivo saved successfully.');

		return redirect(route('colectivos.index'));
	}

	/**
	 * Display the specified Colectivo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$colectivo = $this->colectivoRepository->find($id);

		if(empty($colectivo))
		{
			Flash::error('Colectivo not found');

			return redirect(route('colectivos.index'));
		}

		return view('colectivos.show')->with('colectivo', $colectivo);
	}

	/**
	 * Show the form for editing the specified Colectivo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$colectivo = $this->colectivoRepository->find($id);

		if(empty($colectivo))
		{
			Flash::error('Colectivo not found');

			return redirect(route('colectivos.index'));
		}

		return view('colectivos.edit')->with('colectivo', $colectivo);
	}

	/**
	 * Update the specified Colectivo in storage.
	 *
	 * @param  int              $id
	 * @param UpdateColectivoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateColectivoRequest $request)
	{
		$colectivo = $this->colectivoRepository->find($id);

		if(empty($colectivo))
		{
			Flash::error('Colectivo not found');

			return redirect(route('colectivos.index'));
		}

		$this->colectivoRepository->updateRich($request->all(), $id);

		Flash::success('Colectivo updated successfully.');

		return redirect(route('colectivos.index'));
	}

	/**
	 * Remove the specified Colectivo from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$colectivo = $this->colectivoRepository->find($id);

		if(empty($colectivo))
		{
			Flash::error('Colectivo not found');

			return redirect(route('colectivos.index'));
		}

		$this->colectivoRepository->delete($id);

		Flash::success('Colectivo deleted successfully.');

		return redirect(route('colectivos.index'));
	}
}
