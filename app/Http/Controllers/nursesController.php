<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatenursesRequest;
use App\Http\Requests\UpdatenursesRequest;
use App\Repositories\nursesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class nursesController extends AppBaseController
{
    /** @var  nursesRepository */
    private $nursesRepository;

    public function __construct(nursesRepository $nursesRepo)
    {
        $this->nursesRepository = $nursesRepo;
    }

    /**
     * Display a listing of the nurses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nurses = $this->nursesRepository->all();

        return view('nurses.index')
            ->with('nurses', $nurses);
    }

    /**
     * Show the form for creating a new nurses.
     *
     * @return Response
     */
    public function create()
    {
        return view('nurses.create');
    }

    /**
     * Store a newly created nurses in storage.
     *
     * @param CreatenursesRequest $request
     *
     * @return Response
     */
    public function store(CreatenursesRequest $request)
    {
        $input = $request->all();

        $nurses = $this->nursesRepository->create($input);

        Flash::success('Nurses saved successfully.');

        return redirect(route('nurses.index'));
    }

    /**
     * Display the specified nurses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nurses = $this->nursesRepository->find($id);

        if (empty($nurses)) {
            Flash::error('Nurses not found');

            return redirect(route('nurses.index'));
        }

        return view('nurses.show')->with('nurses', $nurses);
    }

    /**
     * Show the form for editing the specified nurses.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nurses = $this->nursesRepository->find($id);

        if (empty($nurses)) {
            Flash::error('Nurses not found');

            return redirect(route('nurses.index'));
        }

        return view('nurses.edit')->with('nurses', $nurses);
    }

    /**
     * Update the specified nurses in storage.
     *
     * @param int $id
     * @param UpdatenursesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatenursesRequest $request)
    {
        $nurses = $this->nursesRepository->find($id);

        if (empty($nurses)) {
            Flash::error('Nurses not found');

            return redirect(route('nurses.index'));
        }

        $nurses = $this->nursesRepository->update($request->all(), $id);

        Flash::success('Nurses updated successfully.');

        return redirect(route('nurses.index'));
    }

    /**
     * Remove the specified nurses from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nurses = $this->nursesRepository->find($id);

        if (empty($nurses)) {
            Flash::error('Nurses not found');

            return redirect(route('nurses.index'));
        }

        $this->nursesRepository->delete($id);

        Flash::success('Nurses deleted successfully.');

        return redirect(route('nurses.index'));
    }
}
