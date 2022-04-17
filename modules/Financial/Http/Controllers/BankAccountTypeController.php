<?php

namespace Modules\Financial\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Financial\Http\Requests\BankAccountTypeRequest;
use Modules\Financial\Models\BankAccountType;
use Modules\Financial\Repositories\BankAccountTypeRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class BankAccountTypeController extends Controller
{
    private BaseRepository $bankAccountTypeRepository;

    public function __construct(BankAccountTypeRepository $bankAccountTypeRepository)
    {
        $this->bankAccountTypeRepository = $bankAccountTypeRepository;
    }

    public function index()
    {
        $bankAccountTypes = $this->bankAccountTypeRepository->all();

        return view('financial::banks_account_types.index', compact('bankAccountTypes'));
    }

    public function create()
    {
        return view('financial::banks_account_types.create');
    }

    public function store(BankAccountTypeRequest $request)
    {
        $this->bankAccountTypeRepository->create($request->all());

        return redirect()->route('financial.bankAccountType.index')->with('success', 'Banks account type created successfully');
    }

    public function show(BankAccountType $bankAccountType)
    {
        $bankAccountType = $this->bankAccountTypeRepository->find($bankAccountType->id);

        return view('financial::banks_account_types.show')->with(
            'bankAccountType', $bankAccountType
        );
    }

    public function edit(BankAccountType $bankAccountType)
    {
        $bankAccountType = $this->bankAccountTypeRepository->find($bankAccountType->id);

        return view('financial::banks_account_types.show')->with(
            'bankAccountType', $bankAccountType
        );
    }

    public function update(BankAccountTypeRequest $request, BankAccountType $bankAccountType)
    {
        $this->bankAccountTypeRepository->update($request->all(), $bankAccountType->id);

        return redirect()->route('financial.bankAccountType.index')->with('success', 'Banks account type updated successfully');
    }

    public function destroy(BankAccountType $bankAccountType)
    {
        $this->bankAccountTypeRepository->delete($bankAccountType->id);

        return redirect()->route('financial.bank.index')->with('success', 'Banks account type deleted successfully');
    }
}
