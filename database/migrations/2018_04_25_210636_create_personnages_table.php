<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->increments('id');
            
            //Generation aléatoire--------------------------------------------------------
            $table->string('espece');
            $table->string('race');
            $table->string('sexe');
            $table->integer('age');
            $table->string('ageType');
            $table->string('cadre');
            $table->integer('capForce');
            $table->integer('capEndurence');
            $table->integer('capCordination');
            $table->integer('capAparence');
            $table->integer('capInteligence');
            $table->integer('capStabilite');
            $table->integer('capEmpatie');
            $table->integer('capReflexe');
            $table->string('appCouleurPeau');
            $table->string('appCouleurFourure')->nullable();
            $table->string('appTypeFourure')->nullable();
            $table->string('appCouleurCheveux');
            $table->string('appTypeCheveux');
            $table->string('appTypeVisage');
            $table->string('appTypeOreille');
            $table->string('appTypeTeteRace')->nullable();
            $table->string('appTypeAutre')->nullable();
            $table->string('culture');
            $table->string('nom');
            $table->string('prenom');
            $table->string('origine');
            $table->string('classeSocial');
            $table->string('education');
            $table->string('personalite');
            $table->string('trais');
            $table->string('handicape');
            $table->string('maladieMalediction');
            
            //Fournie par l'utilisateur---------------------------------------------------
            $table->text('description')->nullable();
            $table->string('image');
            $table->integer('imageH');
            $table->integer('imageW');
            
            $table->integer('user_id');
            $table->foreign('user_id')
                ->on('users')
                ->references('id');
            
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
        Schema::dropIfExists('personnages');
    }
}
