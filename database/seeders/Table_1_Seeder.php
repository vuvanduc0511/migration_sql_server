<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table_1_Model as MainModel;

class Table_1_Seeder extends Seeder
{
    // Maybe error with unique Factory
    private $quantity = 100;

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
