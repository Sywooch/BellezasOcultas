<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `user_verify`.
 */
class m170704_003350_create_user_verify_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

        $this->createTable('{{%user_verify}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_BIGINT.' NOT NULL',
            'email_verified' => Schema::TYPE_SMALLINT.' NOT NULL',
            'email_verify_token' => Schema::TYPE_STRING.' NOT NULL',
            'email_verify_token_expire' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
        $this->addForeignKey('fk_user_verify_user_id', '{{%user_verify}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
      $this->dropForeignKey('fk_user_verify_user_id', '{{%user_verify}}');
      $this->dropTable('{{%user_verify}}');
    }
  }
