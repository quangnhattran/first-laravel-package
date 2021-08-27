<?php

namespace Qt\FirstLaravelPackage\Tests\Feature;

use Illuminate\Support\Facades\DB;
use Qt\FirstLaravelPackage\Models\MyModel;
use Qt\FirstLaravelPackage\Tests\TestCase;

class MyModelTest extends TestCase
{
    /** @test */
    public function create_my_model()
    {
        /** @var MyModel $model */
        $model = MyModel::factory()->create(['name' => 'Qt']);
        //$model = MyModel::create(['name' => 'qT']);

        $this->assertDatabaseCount('my_models', 1);
        $this->assertEquals('QT', $model->getUpperCasedName());
    }

    /** @test */
    public function test_can_query_json_column()
    {
        $models = DB::table('my_models')
            ->whereJsonContains('options->language', 'en')
            ->get();

        $this->assertCount(0, $models);
    }
}
