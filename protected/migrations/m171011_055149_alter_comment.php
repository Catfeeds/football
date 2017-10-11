<?php

class m171011_055149_alter_comment extends CDbMigration
{
	public function up()
	{
		$sql="ALTER TABLE `comment` MODIFY COLUMN `content`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL AFTER `uid`;";
		$this->execute($sql);
		$this->refreshTableSchema('comment');
	}

	public function down()
	{
		return false;
	}
}