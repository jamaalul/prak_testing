<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $tableData;
    public $model;
    public $idField;
    public $editRoute;
    public $createRoute;

    public function __construct($tableData = [], $model = null, $idField = 'id', $editRoute = null, $createRoute = null)
    {
        $this->tableData = $tableData;
        $this->model = $model;
        $this->idField = $idField;
        $this->editRoute = $editRoute;
        $this->createRoute = $createRoute;
    }

    public function render()
    {
        return view('components.data-table');
    }
}
