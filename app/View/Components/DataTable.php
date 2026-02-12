<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DataTable extends Component
{
    public $tableData;

    public function __construct($tableData = [])
    {
        \Log::info('DataTable component constructor called.', ['count' => count($tableData)]);
        $this->tableData = $tableData;
    }

    public function render()
    {
        return view('components.data-table');
    }
}
