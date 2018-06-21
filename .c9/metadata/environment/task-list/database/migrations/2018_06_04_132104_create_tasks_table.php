{"filter":false,"title":"2018_06_04_132104_create_tasks_table.php","tooltip":"/task-list/database/migrations/2018_06_04_132104_create_tasks_table.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('tasks');","    }","}"],"id":2},{"start":{"row":0,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class AddStatusToTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","   public function up()","    {","        Schema::table('tasks', function (Blueprint $table) {","            $table->string('status');","        });","    }","","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::table('tasks', function (Blueprint $table) {","            $table->dropColumn('status');","        });","    }","}"]}],[{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":[","],"id":3},{"start":{"row":16,"column":36},"end":{"row":16,"column":37},"action":"insert","lines":["1"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":38},"action":"insert","lines":["0"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":33,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528086191472,"hash":"a6d85cae371d898ebfbf4f12c34d9fcb020e20f4"}