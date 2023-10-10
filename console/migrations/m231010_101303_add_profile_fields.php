<?php

use yii\db\Migration;

/**
 * Class m231010_101303_add_profile_fields
 */
class m231010_101303_add_profile_fields extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        // php yii migrate/create add_profile_fields
        $this->addColumn('{{%user}}', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropColumn('{{%user}}', 'description');
    }
}
