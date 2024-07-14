<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContractorRequest;
use  App\Repositories\Interfaces\ContractorRepositoryInterface;

class ContractorController extends Controller
{
    /**
     * contractorRepository injection
     */
    private $contractorRepository;
    public function __construct(ContractorRepositoryInterface $contractorRepository)
    {
        $this->contractorRepository = $contractorRepository;
    }
    /**
     * Display a listing of the contractors.
     */
    public function list()
    {
        return $this->contractorRepository->all();
    }

    /**
     * Display the specified contractor.
     */
    public function show($id)
    {
        return $this->contractorRepository->getById($id);
    }

    /**
     * Store a new contractor.
     */

    public function store(ContractorRequest $request)
    {
        return $this->contractorRepository->create($request);
    }

    /**
     * Update the specified contractor.
     */

    public function update(ContractorRequest $request, $id)
    {
        return $this->contractorRepository->update($request, $id);
    }

    /**
     * Remove the specified contractor.
     */
    public function destroy($id)
    {
        return $this->contractorRepository->delete($id);
    }
}
