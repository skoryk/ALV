<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('alv_core_path', null, $modx->getOption('core_path') . 'components/alv/');
require_once $corePath . 'model/alv/alv.class.php';
$modx->alv = new ALV($modx);

$modx->lexicon->load('alv:default');

/* handle request */
$path = $modx->getOption('processorsPath', $modx->alv->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));