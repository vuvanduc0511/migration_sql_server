<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table_13_Model as MainModel;

class Table_13_Seeder extends Seeder
{
    // Maybe error with unique Factory
    private $quantity;

    public function __construct()
    {
      $this->quantity = config('settings.seeder_quantity.table_13');
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainModel::factory()->count($this->quantity)->create();
    }
}
