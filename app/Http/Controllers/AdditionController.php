<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaction;

class AdditionController extends Controller
{
    public function index(Request $request)
    {
        $data = Transaction::getAll();
        return view('hal01', ['data' => $data]);
    }

    public function count(Request $request)
    {
        $a = $request->input('bil1');
        $b = $request->input('bil2');

        Transaction::saveTransaction($a, $b);

        $data = Transaction::getAll();
        $result = $a + $b;

        return view('hal01', ['data' => $data, 'result' => $result]);
    }
}
