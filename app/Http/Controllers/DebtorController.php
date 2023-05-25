<?php

namespace App\Http\Controllers;
use App\Models\Debtor;
use Illuminate\Http\Request;

class DebtorController extends Controller
{
    public function index(){

        $debtors = Debtor::orderBy('id', 'desc')->paginate(4);
        return view('debtors.index', compact('debtors'));
    }

    public function create(){

        return view('debtors.create'); 
    }

    public function store(Request $request){

        $request->validate([
            'fullname'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'remarks'=>'required',
           
        ]); 
      Debtor::create($request->post());
      return redirect()->route('debtors.index')->with('success', 'Debtor is added');
    }
  


    public function show(Debtor $debtor){
        return view('debtors.show', compact('debtor'));
    }
    public function edit(Debtor $debtors){
      return view('debtors.edit', compact('debtor'));

    }
    public function update(Request $request, Debtor $debtor){
        $request->validate([
            'fullname'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'remarks'=>'required',
        ]); 
        //$employee->fill($request->post()->save());
        
        $debtor->fill([
            'fullname' => $request->fullname,
            'date' => $request->date,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
        ])->save();

  


        return redirect()->route('debtors.index')->with('sucess', 'Debtors has been updated!');
  
      }
    public function destroy(Debtor $debtor){

        $debtor->delete();
        return redirect()->route('debtors.index')->with('success', 'Debtor deleted!');
    }
}
