<?php

use yii\db\Migration;
use yii\db\Schema;

class m160726_110502_create_table_task_type extends Migration
{
    public function up()
    {
        $this->createTable('task_type', [
           'id' => Schema::TYPE_PK,
            'description' => Schema::TYPE_STRING
        ]);
    }

    public function down()
    {
        $this->dropTable('task_type');
    }
}
