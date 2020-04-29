<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatewardsRequest;
use App\Http\Requests\UpdatewardsRequest;
use App\Repositories\wardsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class wardsController extends AppBaseController
{
    /** @var  wardsRepository */
    private $wardsRepository;

    public function __construct(wardsRepository $wardsRepo)
    {
        $this->wardsRepository = $wardsRepo;
    }

    /**
     * Display a listing of the wards.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $wards = $this->wardsRepository->all();

        return view('wards.index')
            ->with('wards', $wards);
    }

    /**
     * Show the form for creating a new wards.
     *
     * @return Response
     */
    public function create()
    {
        return view('wards.create');
    }

    /**
     * Store a newly created wards in storage.
     *
     * @param CreatewardsRequest $request
     *
     * @return Response
     */
    public function store(CreatewardsRequest $request)
    {
        $input = $request->all();

        $wards = $this->wardsRepository->create($input);

        Flash::success('Wards saved successfully.');

        return redirect(route('wards.index'));
    }

    /**
     * Display the specified wards.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $wards = $this->wardsRepository->find($id);

        if (empty($wards)) {
            Flash::error('Wards not found');

            return redirect(route('wards.index'));
        }

        return view('wards.show')->with('wards', $wards);
    }

    /**
     * Show the form for editing the specified wards.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $wards = $this->wardsRepository->find($id);

        if (empty($wards)) {
            Flash::error('Wards not found');

            return redirect(route('wards.index'));
        }

        return view('wards.edit')->with('wards', $wards);
    }

    /**
     * Update the specified wards in storage.
     *
     * @param int $id
     * @param UpdatewardsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatewardsRequest $request)
    {
        $wards = $this->wardsRepository->find($id);

        if (empty($wards)) {
            Flash::error('Wards not found');

            return redirect(route('wards.index'));
        }

        $wards = $this->wardsRepository->update($request->all(), $id);

        Flash::success('Wards updated successfully.');

        return redirect(route('wards.index'));
    }

    /**
     * Remove the specified wards from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $wards = $this->wardsRepository->find($id);

        if (empty($wards)) {
            Flash::error('Wards not found');

            return redirect(route('wards.index'));
        }

        $this->wardsRepository->delete($id);

        Flash::success('Wards deleted successfully.');

        return redirect(route('wards.index'));
    }
}
