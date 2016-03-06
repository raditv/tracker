<?php

namespace App\DataTables;

use App\Visitor;
use Yajra\Datatables\Services\DataTable;

class VisitorDataTable extends DataTable
{
    // protected $printPreview  = 'path.to.print.preview.view';

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $visitors = Visitor::select();

        return $this->applyScopes($visitors);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->ajax('')
                    ->table(['class' => 'display'])
                   // ->parameters($this->getBuilderParameters());
		            ->parameters([
           		       'dom' => 'Bfrtip',
                       'colReorder' => true,
           		       'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
        	           ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'id',
            'tanggal',
            'objek_masuk',
	        'objek_keluar',
	        'total_masuk',
	        'total_keluar',
	        'total_didalam',
         ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'visitors';
    }
}
