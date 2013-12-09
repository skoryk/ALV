<?php
/**
 * Update an Item
 */
class ALVItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'ALVItem';
	public $classKey = 'ALVItem';
	public $languageTopics = array('alv');
	public $permission = 'update_document';
}

return 'ALVItemUpdateProcessor';