<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $task_type_id
 *
 * @property TaskType $taskType
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['task_type_id'], 'integer'],
            [['name'], 'string', 'max' => 150],
            [['task_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TaskType::className(), 'targetAttribute' => ['task_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'task_type_id' => 'Task Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaskType()
    {
        return $this->hasOne(TaskType::className(), ['id' => 'task_type_id']);
    }
}
