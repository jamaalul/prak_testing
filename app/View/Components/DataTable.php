<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $tableData;
    public $model;
    public $idField;
    public $editRoute;

    public function __construct($tableData = [], $model = null, $idField = 'id', $editRoute = null)
    {
        \Log::info('DataTable component constructor called.', ['count' => count($tableData)]);
        $this->tableData = $tableData;
        $this->model = $model;
        $this->idField = $idField;
        $this->editRoute = $editRoute;
    }

    public function render()
    {
        return view('components.data-table');
    }
}
