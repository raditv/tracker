<?php

namespace App\Http\Controllers;

use Datatables;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Visitor;

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
        return Datatables::of(Visitor::query())->make(true);
    }
}
