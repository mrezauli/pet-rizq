<?php

use App\Models\Company;
use App\Models\Designation;
use App\Models\Location;
use App\Models\Salary;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->longText('requirements')->nullable();
            $table->string('job_nature')->nullable();
            $table->string('address')->nullable();
            $table->boolean('top_rated')->nullable()->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreignIdFor(Company::class)->index();
            $table->foreignIdFor(Location::class)->index();
            $table->foreignIdFor(Designation::class)->index();
            $table->foreignIdFor(Salary::class)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};