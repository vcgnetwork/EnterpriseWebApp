<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountingController extends Controller
{
    // AP
    public function ap(Request $request)
    {
        return view('accounting.ap');
    }

    public function apCreate(Request $request)
    {
        return view('accounting.ap-create');
    }

    // AR
    public function ar(Request $request)
    {
        return view('accounting.ar');
    }

    public function arCreate(Request $request)
    {
        return view('accounting.ar-create');
    }

    // COA
    public function coa(Request $request)
    {
        return view('accounting/coa');
    }

    public function coaCreate(Request $request)
    {
        return view('accounting/coa-create');
    }

    // FINANCIALS
    public function financials(Request $request)
    {
        return view('accounting/financials');
    }

    public function financialCreate(Request $request)
    {
        return view('accounting/financial-create');
    }

    //JOURNAL-ENTRY
    public function journalEntries(Request $request)
    {
        return view('accounting/journal-entries');
    }

    public function journalEntryCreate(Request $request)
    {
        return view('accounting/journal-entry-create');
    }

}
