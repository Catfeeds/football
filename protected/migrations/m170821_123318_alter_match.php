<?php

class m170821_123318_alter_match extends CDbMigration
{
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$sql="ALTER TABLE `match` MODIFY COLUMN `old_id`  bigint(100) NOT NULL DEFAULT 0  AFTER `lid` ;";
		$this->execute($sql);
		$this->refreshTableSchema('match');
	}

	public function safeDown()
	{
		return false;
	}
	
}