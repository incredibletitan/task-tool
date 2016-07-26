<?php

use yii\db\Migration;
use yii\db\Schema;

class m160726_111258_create_table_task extends Migration
{
    public function up()
    {
        $this->createTable('task', [
           'id' => Schema::TYPE_PK,
            'name' => $this->string(150)->notNull(),
            'description' => $this->text()->notNull(),
            'task_type_id' => $this->integer()
        ]);

        $this->createIndex(
            'task_idx_task_type_id',
            'task',
            'task_type_id'
        );

        $this->addForeignKey(
            'fk_task_type_task',
            'task',
            'task_type_id',
            'task_type',
            'id',
            'RESTRICT',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk_task_type_task',
            'task'
        );

        $this->dropIndex(
            'task_idx_task_type_id',
            'task'
        );

        $this->dropTable('task');
    }
}
