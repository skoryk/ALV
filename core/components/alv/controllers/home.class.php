<?php
/**
 * The home manager controller for ALV.
 *
 */
class ALVHomeManagerController extends ALVMainController {
	/* @var ALV $ALV */
	public $ALV;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('alv');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->ALV->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->ALV->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->ALV->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "alv-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->ALV->config['templatesPath'] . 'home.tpl';
	}
}