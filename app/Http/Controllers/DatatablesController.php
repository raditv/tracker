<?php

namespace App\Http\Controllers;
use Datatables;
use Illuminate\Http\Request;

use App\Http\Requests;

class DatatablesController extends Controller
{
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }
}
