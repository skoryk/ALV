<?php
/**
 * Remove an Item
 */
class ALVItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'ALVItem';
	public $classKey = 'ALVItem';
	public $languageTopics = array('alv');

}

return 'ALVItemRemoveProcessor';