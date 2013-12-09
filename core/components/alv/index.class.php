<?php

/**
 * Class ALVMainController
 */
abstract class ALVMainController extends modExtraManagerController {
	/** @var ALV $ALV */
	public $ALV;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('alv_core_path', null, $this->modx->getOption('core_path') . 'components/alv/');
		require_once $corePath . 'model/sendex/sendex.class.php';

		$this->ALV = new ALV($this->modx);

		$this->addCss($this->ALV->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->ALV->config['jsUrl'] . 'mgr/alv.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			ALV.config = ' . $this->modx->toJSON($this->ALV->config) . ';
			ALV.config.connector_url = "' . $this->ALV->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('alv:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends ALVMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}