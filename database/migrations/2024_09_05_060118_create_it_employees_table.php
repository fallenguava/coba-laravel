<?php

// 2024_09_05_000001_create_it_employees_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');  // Date of Birth
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('address');
            $table->date('hired_date');
            $table->decimal('salary', 8, 2);  // Salary with 2 decimal places
            $table->timestamps();  // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('it_employees');
    }
}
