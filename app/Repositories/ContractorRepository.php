<?php

namespace App\Repositories;

use App\Http\Requests\ContractorRequest;
use App\Models\Contractor;
use App\Repositories\Interfaces\ContractorRepositoryInterface;
use Brick\Math\BigInteger;

class ContractorRepository implements ContractorRepositoryInterface
{
    public function all()
    {
        return Contractor::all();
    }

    public function getById ($id)
    {
        return Contractor::find($id);
    }
    public function delete($id)
    {
        if(Contractor::find($id)){
            return Contractor::destroy($id);
        }
        else {
            return 0;
        }
    }
    public function create(ContractorRequest $req)
    {
        $contractor = new Contractor;
        $contractor->name = $req->name;
        $contractor->inn = $req->inn;
        $contractor->email = $req->email;
        return $contractor->save();
    }
    public function update(ContractorRequest $request, $id)
    {
        $contractor = Contractor::find($id);
        if ($contractor) {
            $contractor->name = $request->name;
            $contractor->inn = $request->inn;
            $contractor->email = $request->email;
            return $contractor->save();
        } else {
            return false;
        }
    }
}
