<?php

namespace App\Repositories\Interfaces;

use Brick\Math\BigInteger;
use App\Http\Requests\ContractorRequest;

interface ContractorRepositoryInterface
{
    public function all();
    public function getById($id);
    public function create(ContractorRequest $request);
    public function update(ContractorRequest $request, BigInteger $id);
    public function delete($id);
}
