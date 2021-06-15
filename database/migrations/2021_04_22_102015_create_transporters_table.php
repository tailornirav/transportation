<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportersTable extends Migration{
  public function up(){
    Schema::create('transporters', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('businessname', 50)->nullable(true);
      $table->string('type', 10)->nullable(true);
      $table->Integer('rating')->nullable(true);
      $table->string('ratingstring', 10)->nullable(true);
      $table->string('ownername', 30)->nullable(true);
      $table->string('email', 50)->nullable(true);
      $table->bigInteger('whatsappnumber')->nullable(true);
      $table->bigInteger('aadhar')->nullable(true);
      $table->string('pan', 12)->nullable(true);
      $table->string('gst', 20)->nullable(true);
      $table->string('address', 100)->nullable(true);
      $table->string('area', 25)->nullable(true);
      $table->string('state', 5)->nullable(true);
      $table->string('statestring', 50)->nullable(true);
      $table->string('city', 5)->nullable(true);
      $table->string('citystring', 50)->nullable(true);
      $table->Integer('headbranch')->nullable(true);
      $table->string('headbranchname', 50)->nullable(true);
      $table->string('referrername', 30)->nullable(true);
      $table->bigInteger('referrermobile')->nullable(true);
      $table->string('documentid', 50)->nullable(true);
      $table->text('documentstring')->nullable(true);
      $table->string('visitingcardid', 50)->nullable(true);
      $table->text('visitingcardstring')->nullable(true);

      $table->string('name1', 30)->nullable(true);
      $table->string('name2', 30)->nullable(true);
      $table->string('name3', 30)->nullable(true);
      $table->string('name4', 30)->nullable(true);
      $table->bigInteger('mobile11')->nullable(true);
      $table->bigInteger('mobile12')->nullable(true);
      $table->bigInteger('mobile13')->nullable(true);
      $table->bigInteger('mobile14')->nullable(true);
      $table->bigInteger('mobile21')->nullable(true);
      $table->bigInteger('mobile22')->nullable(true);
      $table->bigInteger('mobile23')->nullable(true);
      $table->bigInteger('mobile24')->nullable(true);
      $table->bigInteger('whatsappnumber1')->nullable(true);
      $table->bigInteger('whatsappnumber2')->nullable(true);
      $table->bigInteger('whatsappnumber3')->nullable(true);
      $table->bigInteger('whatsappnumber4')->nullable(true);

      $table->string('holdername1', 30)->nullable(true);
      $table->string('holdername2', 30)->nullable(true);
      $table->string('holdername3', 30)->nullable(true);
      $table->bigInteger('accountnumber1')->nullable(true);
      $table->bigInteger('accountnumber2')->nullable(true);
      $table->bigInteger('accountnumber3')->nullable(true);
      $table->string('bankname1', 20)->nullable(true);
      $table->string('bankname2', 20)->nullable(true);
      $table->string('bankname3', 20)->nullable(true);
      $table->string('branch1', 20)->nullable(true);
      $table->string('branch2', 20)->nullable(true);
      $table->string('branch3', 20)->nullable(true);
      $table->string('ifsccode1', 15)->nullable(true);
      $table->string('ifsccode2', 15)->nullable(true);
      $table->string('ifsccode3', 15)->nullable(true);

      $table->string('fromstate1', 5)->nullable(true);
      $table->string('fromstate2', 5)->nullable(true);
      $table->string('fromstate3', 5)->nullable(true);
      $table->string('fromstate4', 5)->nullable(true);
      $table->string('fromstate5', 5)->nullable(true);
      $table->string('fromstatestring1', 50)->nullable(true);
      $table->string('fromstatestring2', 50)->nullable(true);
      $table->string('fromstatestring3', 50)->nullable(true);
      $table->string('fromstatestring4', 50)->nullable(true);
      $table->string('fromstatestring5', 50)->nullable(true);
      $table->text('fromcity1')->nullable(true);
      $table->text('fromcity2')->nullable(true);
      $table->text('fromcity3')->nullable(true);
      $table->text('fromcity4')->nullable(true);
      $table->text('fromcity5')->nullable(true);
      $table->text('fromcitystring1')->nullable(true);
      $table->text('fromcitystring2')->nullable(true);
      $table->text('fromcitystring3')->nullable(true);
      $table->text('fromcitystring4')->nullable(true);
      $table->text('fromcitystring5')->nullable(true);
      $table->string('tostate1', 5)->nullable(true);
      $table->string('tostate2', 5)->nullable(true);
      $table->string('tostate3', 5)->nullable(true);
      $table->string('tostate4', 5)->nullable(true);
      $table->string('tostate5', 5)->nullable(true);
      $table->string('tostatestring1', 50)->nullable(true);
      $table->string('tostatestring2', 50)->nullable(true);
      $table->string('tostatestring3', 50)->nullable(true);
      $table->string('tostatestring4', 50)->nullable(true);
      $table->string('tostatestring5', 50)->nullable(true);
      $table->text('tocity1')->nullable(true);
      $table->text('tocity2')->nullable(true);
      $table->text('tocity3')->nullable(true);
      $table->text('tocity4')->nullable(true);
      $table->text('tocity5')->nullable(true);
      $table->text('tocitystring1')->nullable(true);
      $table->text('tocitystring2')->nullable(true);
      $table->text('tocitystring3')->nullable(true);
      $table->text('tocitystring4')->nullable(true);
      $table->text('tocitystring5')->nullable(true);
      $table->text('truck1')->nullable(true);
      $table->text('truck2')->nullable(true);
      $table->text('truck3')->nullable(true);
      $table->text('truck4')->nullable(true);
      $table->text('truck5')->nullable(true);
      $table->text('truckstring1')->nullable(true);
      $table->text('truckstring2')->nullable(true);
      $table->text('truckstring3')->nullable(true);
      $table->text('truckstring4')->nullable(true);
      $table->text('truckstring5')->nullable(true);
      $table->text('commodity1')->nullable(true);
      $table->text('commodity2')->nullable(true);
      $table->text('commodity3')->nullable(true);
      $table->text('commodity4')->nullable(true);
      $table->text('commodity5')->nullable(true);

      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down(){
    Schema::dropIfExists('transporters');
  }
}
