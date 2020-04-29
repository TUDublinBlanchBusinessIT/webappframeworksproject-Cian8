<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateregisterRequest;
use App\Http\Requests\UpdateregisterRequest;
use App\Repositories\registerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class registerController extends AppBaseController
{
    /** @var  registerRepository */
    private $registerRepository;

    public function __construct(registerRepository $registerRepo)
    {
        $this->registerRepository = $registerRepo;
    }

    /**
     * Display a listing of the register.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $registers = $this->registerRepository->all();

        return view('registers.index')
            ->with('registers', $registers);
    }

    /**
     * Show the form for creating a new register.
     *
     * @return Response
     */
    public function create()
    {
        return view('registers.create');
    }

    /**
     * Store a newly created register in storage.
     *
     * @param CreateregisterRequest $request
     *
     * @return Response
     */
    public function store(CreateregisterRequest $request)
    {
        $input = $request->all();

        $register = $this->registerRepository->create($input);

        Flash::success('Register saved successfully.');

        return redirect(route('registers.index'));
    }

    /**
     * Display the specified register.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        return view('registers.show')->with('register', $register);
    }

    /**
     * Show the form for editing the specified register.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        return view('registers.edit')->with('register', $register);
    }

    /**
     * Update the specified register in storage.
     *
     * @param int $id
     * @param UpdateregisterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateregisterRequest $request)
    {
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        $register = $this->registerRepository->update($request->all(), $id);

        Flash::success('Register updated successfully.');

        return redirect(route('registers.index'));
    }

    /**
     * Remove the specified register from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $register = $this->registerRepository->find($id);

        if (empty($register)) {
            Flash::error('Register not found');

            return redirect(route('registers.index'));
        }

        $this->registerRepository->delete($id);

        Flash::success('Register deleted successfully.');

        return redirect(route('registers.index'));
    }
}
