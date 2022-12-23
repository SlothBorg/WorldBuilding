<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHistoriesRequest;
use App\Http\Requests\UpdateHistoriesRequest;
use App\Models\Histories;
use Illuminate\View\View;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('history');
    }
}
