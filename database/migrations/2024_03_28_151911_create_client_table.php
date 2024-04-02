<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('risk_manager')->nullable();
            $table->decimal('commercial_budget', 10, 2)->decimal();
            $table->string('currency', 3)->nullable();
            $table->string('industry_sector')->nullable();
            $table->text('description')->nullable();
            $table->string('facility')->nullable();
            $table->string('risk_owner')->nullable();
            $table->date('date_raised')->nullable();
            $table->date('risk_occurrence')->nullable();
            $table->string('risk_bearer')->nullable();
            $table->integer('probability')->nullable();
            $table->boolean('hsse_health_safety')->nullable();
            $table->boolean('hsse_security')->nullable();
            $table->boolean('hsse_environment')->nullable();
            $table->string('hsse_health_safety_level')->nullable();
            $table->string('hsse_security_level')->nullable();
            $table->string('hsse_environment_level')->nullable();
            $table->enum('status', ['Pending', 'Approve', 'Rejected', 'waiting'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
