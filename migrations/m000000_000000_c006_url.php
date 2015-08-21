<?php


/**
 * Class m000000_000000_c006_url
 */
class m000000_000000_c006_url extends \yii\db\Migration
{
    /**
     *  ~CONSOLE~
     *  php yii migrate --migrationPath=@vendor/c006/yii2-alias-url/migrations
     */

    /**
     *
     */
    public function up()
    {
        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('alias_url', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%alias_url}}', [
                    'id'          => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
                    0             => 'PRIMARY KEY (`id`)',
                    'is_frontend' => 'TINYINT(1) NULL DEFAULT \'1\'',
                    'public'      => 'VARCHAR(100) NOT NULL',
                    'private'     => 'VARCHAR(100) NOT NULL',
                ], $tableOptions_mysql);
            }
        }

        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%alias_url}}', ['id' => '1', 'is_frontend' => '0', 'public' => 'admin', 'private' => '?r=user/login']);
        $this->execute('SET foreign_key_checks = 1;');
    }


    /**
     * @return bool
     */
    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `alias_url`');
        $this->execute('SET foreign_key_checks = 1;');
    }
}
