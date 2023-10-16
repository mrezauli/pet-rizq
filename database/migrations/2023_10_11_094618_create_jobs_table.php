<?php

use App\Models\Age;
use App\Models\Company;
use App\Models\Designation;
use App\Models\Experience;
use App\Models\Location;
use App\Models\Qualification;
use App\Models\Salary;
use App\Models\Time;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('count');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignIdFor(Company::class)->index();
            $table->foreignIdFor(Location::class)->index();
            $table->foreignIdFor(Designation::class)->index();
            $table->foreignIdFor(Salary::class)->index();
            $table->foreignIdFor(Age::class)->index();
            $table->foreignIdFor(Qualification::class)->index();
            $table->foreignIdFor(Experience::class)->index();
            $table->foreignIdFor(Time::class)->index();
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