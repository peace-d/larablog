<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->timestamps();
        });


        $defaultStatuses = [
            [
                'id' => 1,
                'name' => 'Pending',
                'description' => 'Awaiting some for of action.'
            ],
            [
                'id' => 2,
                'name' => 'Active',
                'description' => 'Active status.'
            ]
        ];

        $this->createDefaultData($defaultStatuses);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }

    /**
     * @param array $dataItems
     */
    private function createDefaultData(array $dataItems): void
    {
        foreach ($dataItems as $item) {
            \Illuminate\Support\Facades\DB::table('statuses')->insert($item);
        }
    }
}
