<?php

use yii\db\Migration;

class m160726_110502_create_table_task_type extends Migration
{
    public function up()
    {
        $this->createTable('task_type', [
           'id' => \yii\db\Schema::TYPE_PK,
            'description' => \yii\db\Schema::TYPE_STRING
        ]);
    }

    public function down()
    {
        $this->dropTable('task_type');
    }
}
