<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepatientsRequest;
use App\Http\Requests\UpdatepatientsRequest;
use App\Repositories\patientsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class patientsController extends AppBaseController
{
    /** @var  patientsRepository */
    private $patientsRepository;

    public function __construct(patientsRepository $patientsRepo)
    {
        $this->patientsRepository = $patientsRepo;
    }

    /**
     * Display a listing of the patients.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patients = $this->patientsRepository->all();

        return view('patients.index')
            ->with('patients', $patients);
    }

    /**
     * Show the form for creating a new patients.
     *
     * @return Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created patients in storage.
     *
     * @param CreatepatientsRequest $request
     *
     * @return Response
     */
    public function store(CreatepatientsRequest $request)
    {
        $input = $request->all();

        $patients = $this->patientsRepository->create($input);

        Flash::success('Patients saved successfully.');

        return redirect(route('patients.index'));
    }

    /**
     * Display the specified patients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patients = $this->patientsRepository->find($id);

        if (empty($patients)) {
            Flash::error('Patients not found');

            return redirect(route('patients.index'));
        }

        return view('patients.show')->with('patients', $patients);
    }

    /**
     * Show the form for editing the specified patients.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patients = $this->patientsRepository->find($id);

        if (empty($patients)) {
            Flash::error('Patients not found');

            return redirect(route('patients.index'));
        }

        return view('patients.edit')->with('patients', $patients);
    }

    /**
     * Update the specified patients in storage.
     *
     * @param int $id
     * @param UpdatepatientsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepatientsRequest $request)
    {
        $patients = $this->patientsRepository->find($id);

        if (empty($patients)) {
            Flash::error('Patients not found');

            return redirect(route('patients.index'));
        }

        $patients = $this->patientsRepository->update($request->all(), $id);

        Flash::success('Patients updated successfully.');

        return redirect(route('patients.index'));
    }

    /**
     * Remove the specified patients from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patients = $this->patientsRepository->find($id);

        if (empty($patients)) {
            Flash::error('Patients not found');

            return redirect(route('patients.index'));
        }

        $this->patientsRepository->delete($id);

        Flash::success('Patients deleted successfully.');

        return redirect(route('patients.index'));
    }
}
