<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHistoriesRequest;
use App\Http\Requests\UpdateHistoriesRequest;
use App\Models\Histories;
use App\Models\History;
use Illuminate\View\View;

class HistoryController extends Controller
{
    public function index()
    {
        return view('pages.history.index');
    }

    public function show(History $history)
    {
        return view('pages.history.show', ['history' => $history]);
    }
}
