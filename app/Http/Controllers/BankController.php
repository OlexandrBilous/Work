<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Bank;
use App\Http\Requests\StoreBlogPost;
use App\Models\Categories;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function show(Request $request)
    {
        return view('welcome');
    }
    public function addTarif()
    {
        return view('addTarif');
    }
    public function saveTarif(StoreBlogPost $request)
    {
        $tarif = Bank::create($request->validated());
        return redirect()->back();
    }
    public function showTarif(Bank $banks)
    {
        $banks = Bank::all();
        return view('showTarif', [
            'bank' => $banks,
        ]);
    }
//    public function filtredTarif()
//    {
//        return view('filtredTarif');
//    }

//    public function store(Request $request)
//    {
//        $period = $request->input('Period');
//
//        //
//    }


    public function filtrationOfTarif(Request $request)
    {

        $period =(int) $request->input('test');
        $banks = Bank::query();
        if ($period != null) {
            $banks->where('period', '<=', $period);
        }
        return view('showTarif',
            [
                'bank' => $banks->get(),
                'period' => $period
            ]);
    }

//addssssssssssssss

}
