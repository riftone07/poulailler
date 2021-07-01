<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePoulayerRequest;
use App\Http\Requests\UpdatePoulayerRequest;
use App\Models\Lot;
use App\Repositories\PoulayerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PoulayerController extends AppBaseController
{
    /** @var  PoulayerRepository */
    private $poulayerRepository;

    public function __construct(PoulayerRepository $poulayerRepo)
    {
        $this->poulayerRepository = $poulayerRepo;
    }

    /**
     * Display a listing of the Poulayer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $poulayers = $this->poulayerRepository->all();

        return view('poulayers.index')
            ->with('poulayers', $poulayers);
    }

    /**
     * Show the form for creating a new Poulayer.
     *
     * @return Response
     */
    public function create()
    {
          $lots = Lot::all();

        return view('poulayers.create',compact('lots'));
    }

    /**
     * Store a newly created Poulayer in storage.
     *
     * @param CreatePoulayerRequest $request
     *
     * @return Response
     */
    public function store(CreatePoulayerRequest $request)
    {
        $input = $request->all();

        $poulayer = $this->poulayerRepository->create($input);

        Flash::success('Fiche créee avec succèss');

        return back();
    }

    /**
     * Display the specified Poulayer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $poulayer = $this->poulayerRepository->find($id);

        if (empty($poulayer)) {
            Flash::error('Poulayer not found');

            return redirect(route('poulayers.index'));
        }

        return view('poulayers.show')->with('poulayer', $poulayer);
    }

    /**
     * Show the form for editing the specified Poulayer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $poulayer = $this->poulayerRepository->find($id);

        if (empty($poulayer)) {
            Flash::error('Poulayer not found');

            return redirect(route('poulayers.index'));
        }
        $lots = Lot::all();

        return view('poulayers.edit')
            ->with('lots', $lots)
            ->with('poulayer', $poulayer);
    }

    /**
     * Update the specified Poulayer in storage.
     *
     * @param int $id
     * @param UpdatePoulayerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePoulayerRequest $request)
    {
        $poulayer = $this->poulayerRepository->find($id);

        if (empty($poulayer)) {
            Flash::error('Poulayer not found');

            return redirect(route('poulayers.index'));
        }

        $poulayer = $this->poulayerRepository->update($request->all(), $id);

        Flash::success('Poulayer updated successfully.');

        return redirect(route('poulayers.index'));
    }

    /**
     * Remove the specified Poulayer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $poulayer = $this->poulayerRepository->find($id);

        if (empty($poulayer)) {
            Flash::error('Poulayer not found');

            return redirect(route('poulayers.index'));
        }

        $this->poulayerRepository->delete($id);

        Flash::success('Poulayer deleted successfully.');

        return redirect(route('poulayers.index'));
    }
}
