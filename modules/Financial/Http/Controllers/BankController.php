<?php

namespace Modules\Financial\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Financial\Http\Requests\BankRequest;
use Modules\Financial\Models\Bank;
use Modules\Financial\Repositories\BankRepository;

class BankController extends Controller
{

    private BankRepository $bankRepository;

    public function __construct(BankRepository $bankRepository)
    {
        $this->bankRepository = $bankRepository;
    }

    public function index()
    {
        $banks = $this->bankRepository->all();

        return view('financial::banks.index', compact('banks'));
    }

    public function create()
    {
        return view('financial::banks.create');
    }

    public function store(BankRequest $request)
    {
        $this->bankRepository->create($request->all());

        return redirect()->route('financial.bank.index')->with('success', 'Bank created successfully');
    }

    public function show(Bank $bank)
    {
        $bank = $this->bankRepository->find($bank->id);

        return view('financial::banks.show')->with(
            'bank', $bank
        );
    }

    public function edit(Bank $bank)
    {
        $bank = $this->bankRepository->find($bank->id);

        return view('financial::banks.show')->with(
            'bank', $bank
        );
    }

    public function update(BankRequest $request, Bank $bank)
    {
        $this->bankRepository->update($request->all(), $bank->id);

        return redirect()->route('financial.bank.index')->with('success', 'Bank updated successfully');
    }

    public function destroy(Bank $bank)
    {
        $this->bankRepository->delete($bank->id);

        return redirect()->route('financial.bank.index')->with('success', 'Bank deleted successfully');
    }
}
