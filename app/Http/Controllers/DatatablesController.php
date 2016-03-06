<?php

namespace App\Http\Controllers;

use App\DataTables\VisitorDataTable;
use App\Http\Requests;

class DatatablesController extends Controller
{
    public function index(VisitorDataTable $dataTable)
    {
        return $dataTable->render('visitors');
    }
}
