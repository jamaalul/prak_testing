<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $tableData;
    public $model;
    public $idField;

    public function __construct($tableData = [], $model = null, $idField = 'id')
    {
        \Log::info('DataTable component constructor called.', ['count' => count($tableData)]);
        $this->tableData = $tableData;
        $this->model = $model;
        $this->idField = $idField;
    }

    public function render()
    {
        return view('components.data-table');
    }
}
