<?php
/**
 * Get an Item
 */
class ALVItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'ALVItem';
	public $classKey = 'ALVItem';
	public $languageTopics = array('alv:default');
}

return 'ALVItemGetProcessor';