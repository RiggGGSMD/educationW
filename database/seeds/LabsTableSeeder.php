<?php

use Illuminate\Database\Seeder;
use App\Models\Lab;

class LabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        $links = factory(Lab::class)->times(1)->make();

        // 将数据集合转换为数组，并插入到数据库中
        Lab::insert($links->toArray());
    }
}
