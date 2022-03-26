<?php

namespace Modules\Financial\Http\Controllers\Api;

use Modules\Financial\Http\Requests\BankRequest;
use Modules\Financial\Http\Resources\BankResource;
use Modules\Financial\Repositories\BankRepository;

class ApiBankController extends ApiBaseController
{

    private BankRepository $bankRepository;

    public function __construct(BankRepository $bankRepository)
    {
        $this->bankRepository = $bankRepository;
    }

    public function index()
    {
        $banks = $this->bankRepository->all();

        return $this->sendResponse(BankResource::collection($banks), 'Banks retrieved successfully.');
    }

    public function store(BankRequest $request)
    {
        $bank = $this->bankRepository->create($request->all());

        return $this->sendResponse(new BankResource($bank), 'Bank created successfully.');
    }

    public function show(int $id)
    {
        $bank = $this->bankRepository->find($id);

        return $this->sendResponse(new BankResource($bank), 'Bank retrieved successfully.');
    }

    public function update(BankRequest $request, int $id)
    {
        $bank = $this->bankRepository->update($request->all(), $id);

        return $this->sendResponse(new BankResource($bank), 'Bank updated successfully.');
    }

    public function destroy(int $id)
    {
        $this->bankRepository->delete($id);

        return $this->sendResponse([], 'Bank deleted successfully.');
    }
}
