<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSokhnaRequest;
use App\Http\Requests\UpdateSokhnaRequest;
use App\Repositories\SokhnaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SokhnaController extends AppBaseController
{
    /** @var  SokhnaRepository */
    private $sokhnaRepository;

    public function __construct(SokhnaRepository $sokhnaRepo)
    {
        $this->sokhnaRepository = $sokhnaRepo;
    }

    /**
     * Display a listing of the Sokhna.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sokhnas = $this->sokhnaRepository->all();

        return view('sokhnas.index')
            ->with('sokhnas', $sokhnas);
    }

    /**
     * Show the form for creating a new Sokhna.
     *
     * @return Response
     */
    public function create()
    {
        return view('sokhnas.create');
    }

    /**
     * Store a newly created Sokhna in storage.
     *
     * @param CreateSokhnaRequest $request
     *
     * @return Response
     */
    public function store(CreateSokhnaRequest $request)
    {
        $input = $request->all();

        $sokhna = $this->sokhnaRepository->create($input);

        Flash::success('Sokhna saved successfully.');

        return redirect(route('sokhnas.index'));
    }

    /**
     * Display the specified Sokhna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sokhna = $this->sokhnaRepository->find($id);

        if (empty($sokhna)) {
            Flash::error('Sokhna not found');

            return redirect(route('sokhnas.index'));
        }

        return view('sokhnas.show')->with('sokhna', $sokhna);
    }

    /**
     * Show the form for editing the specified Sokhna.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sokhna = $this->sokhnaRepository->find($id);

        if (empty($sokhna)) {
            Flash::error('Sokhna not found');

            return redirect(route('sokhnas.index'));
        }

        return view('sokhnas.edit')->with('sokhna', $sokhna);
    }

    /**
     * Update the specified Sokhna in storage.
     *
     * @param int $id
     * @param UpdateSokhnaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSokhnaRequest $request)
    {
        $sokhna = $this->sokhnaRepository->find($id);

        if (empty($sokhna)) {
            Flash::error('Sokhna not found');

            return redirect(route('sokhnas.index'));
        }

        $sokhna = $this->sokhnaRepository->update($request->all(), $id);

        Flash::success('Sokhna updated successfully.');

        return redirect(route('sokhnas.index'));
    }

    /**
     * Remove the specified Sokhna from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sokhna = $this->sokhnaRepository->find($id);

        if (empty($sokhna)) {
            Flash::error('Sokhna not found');

            return redirect(route('sokhnas.index'));
        }

        $this->sokhnaRepository->delete($id);

        Flash::success('Sokhna deleted successfully.');

        return redirect(route('sokhnas.index'));
    }
}
