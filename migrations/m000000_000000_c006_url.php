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

        self::down();


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
        $this->insert('{{%alias_url}}', ['id' => '29', 'is_frontend' => '0', 'public' => '/user/login', 'private' => 'user/login']);
        $this->insert('{{%alias_url}}', ['id' => '30', 'is_frontend' => '0', 'public' => '/user/password-rest', 'private' => 'user/request-password-reset']);
        $this->insert('{{%alias_url}}', ['id' => '31', 'is_frontend' => '0', 'public' => '/dashboard', 'private' => 'site/index']);
        $this->insert('{{%alias_url}}', ['id' => '32', 'is_frontend' => '0', 'public' => '/banner', 'private' => 'banner']);
        $this->insert('{{%alias_url}}', ['id' => '33', 'is_frontend' => '0', 'public' => '/cms', 'private' => 'cms']);
        $this->insert('{{%alias_url}}', ['id' => '34', 'is_frontend' => '0', 'public' => '/email', 'private' => 'email/index']);
        $this->insert('{{%alias_url}}', ['id' => '37', 'is_frontend' => '0', 'public' => '/utility', 'private' => 'utility']);
        $this->insert('{{%alias_url}}', ['id' => '38', 'is_frontend' => '1', 'public' => '/account/dashboard', 'private' => 'account/dashboard']);
        $this->insert('{{%alias_url}}', ['id' => '39', 'is_frontend' => '1', 'public' => '/user/login', 'private' => 'user/login']);
        $this->insert('{{%alias_url}}', ['id' => '40', 'is_frontend' => '1', 'public' => '/user/logout', 'private' => 'user/logout']);
        $this->insert('{{%alias_url}}', ['id' => '41', 'is_frontend' => '1', 'public' => '/user/signup', 'private' => 'user/signup']);
        $this->insert('{{%alias_url}}', ['id' => '42', 'is_frontend' => '1', 'public' => '/user/password-reset', 'private' => 'user/request-password-reset']);
        $this->insert('{{%alias_url}}', ['id' => '43', 'is_frontend' => '1', 'public' => '/account/add-job', 'private' => 'account/jobs/add-job']);
        $this->insert('{{%alias_url}}', ['id' => '44', 'is_frontend' => '1', 'public' => '/user/reset-password', 'private' => 'user/reset-password']);
        $this->insert('{{%alias_url}}', ['id' => '45', 'is_frontend' => '1', 'public' => '/contact', 'private' => 'site/contact']);
        $this->insert('{{%alias_url}}', ['id' => '46', 'is_frontend' => '1', 'public' => '/account/vault', 'private' => 'account/vault']);
        $this->insert('{{%alias_url}}', ['id' => '47', 'is_frontend' => '1', 'public' => '/account/preferences', 'private' => 'user/preferences']);
        $this->insert('{{%alias_url}}', ['id' => '48', 'is_frontend' => '1', 'public' => '/account/jobs/manage', 'private' => 'account/jobs/manage']);
        $this->insert('{{%alias_url}}', ['id' => '49', 'is_frontend' => '1', 'public' => '/account', 'private' => 'account/dashboard']);
        $this->insert('{{%alias_url}}', ['id' => '50', 'is_frontend' => '1', 'public' => '/account/jobs', 'private' => 'account/jobs/list']);
        $this->insert('{{%alias_url}}', ['id' => '51', 'is_frontend' => '1', 'public' => '/account/payment', 'private' => 'account/payment/index']);
        $this->insert('{{%alias_url}}', ['id' => '53', 'is_frontend' => '0', 'public' => '/user/password-reset', 'private' => 'user/request-password-reset']);
        $this->insert('{{%alias_url}}', ['id' => '54', 'is_frontend' => '0', 'public' => '/user/reset-password', 'private' => 'user/reset-password']);
        $this->insert('{{%alias_url}}', ['id' => '55', 'is_frontend' => '0', 'public' => '/user/logout', 'private' => 'user/logout']);
        $this->insert('{{%alias_url}}', ['id' => '56', 'is_frontend' => '0', 'public' => '/account/jobs/manage', 'private' => 'account/jobs/manage']);
        $this->insert('{{%alias_url}}', ['id' => '57', 'is_frontend' => '1', 'public' => '/account/jobs/hold', 'private' => 'account/jobs/hold']);
        $this->insert('{{%alias_url}}', ['id' => '58', 'is_frontend' => '1', 'public' => '/account/jobs/cancel', 'private' => 'account/jobs/cancel']);
        $this->insert('{{%alias_url}}', ['id' => '59', 'is_frontend' => '1', 'public' => '/account/jobs/resume', 'private' => 'account/jobs/resume']);
        $this->insert('{{%alias_url}}', ['id' => '61', 'is_frontend' => '1', 'public' => '/services', 'private' => 'site/services']);
        $this->insert('{{%alias_url}}', ['id' => '63', 'is_frontend' => '1', 'public' => '/privacy-policy', 'private' => 'site/privacy-policy']);
        $this->insert('{{%alias_url}}', ['id' => '64', 'is_frontend' => '1', 'public' => '/terms-of-use', 'private' => 'site/terms-of-use']);
        $this->insert('{{%alias_url}}', ['id' => '67', 'is_frontend' => '1', 'public' => '/account/jobs/complete', 'private' => 'account/jobs/complete']);
        $this->insert('{{%alias_url}}', ['id' => '68', 'is_frontend' => '1', 'public' => '/account/jobs/groups', 'private' => 'account/jobs-groups/index']);
        $this->insert('{{%alias_url}}', ['id' => '69', 'is_frontend' => '1', 'public' => '/account/jobs/export', 'private' => 'account/jobs/export']);
        $this->insert('{{%alias_url}}', ['id' => '70', 'is_frontend' => '0', 'public' => '/billing', 'private' => 'billing/index']);
        $this->insert('{{%alias_url}}', ['id' => '71', 'is_frontend' => '1', 'public' => '/user/success', 'private' => 'user/success']);
        $this->insert('{{%alias_url}}', ['id' => '72', 'is_frontend' => '1', 'public' => '/user/confirm', 'private' => 'user/confirm']);
        $this->insert('{{%alias_url}}', ['id' => '74', 'is_frontend' => '1', 'public' => '/checkout', 'private' => 'checkout/index']);
        $this->insert('{{%alias_url}}', ['id' => '77', 'is_frontend' => '1', 'public' => '/cart', 'private' => 'cart/index']);
        $this->insert('{{%alias_url}}', ['id' => '78', 'is_frontend' => '1', 'public' => '/cart/add', 'private' => 'cart/add']);
        $this->insert('{{%alias_url}}', ['id' => '79', 'is_frontend' => '1', 'public' => '/cart/update', 'private' => 'cart/update']);
        $this->insert('{{%alias_url}}', ['id' => '80', 'is_frontend' => '1', 'public' => '/cart/delete', 'private' => 'cart/delete']);
        $this->insert('{{%alias_url}}', ['id' => '81', 'is_frontend' => '1', 'public' => '/checkout/2', 'private' => 'checkout/2']);
        $this->insert('{{%alias_url}}', ['id' => '82', 'is_frontend' => '1', 'public' => '/checkout/3', 'private' => 'checkout/3']);
        $this->insert('{{%alias_url}}', ['id' => '83', 'is_frontend' => '1', 'public' => '/checkout/4', 'private' => 'checkout/4']);
        $this->insert('{{%alias_url}}', ['id' => '84', 'is_frontend' => '1', 'public' => '/checkout/5', 'private' => 'checkout/5']);
        $this->insert('{{%alias_url}}', ['id' => '85', 'is_frontend' => '1', 'public' => '/checkout/success', 'private' => 'checkout/success']);
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
