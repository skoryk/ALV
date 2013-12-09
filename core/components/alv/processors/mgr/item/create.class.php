<?php
/**
 * Create an Item
 */
class ALVItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'ALVItem';
	public $classKey = 'ALVItem';
	public $languageTopics = array('alv');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('ALVItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('alv_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'ALVItemCreateProcessor';