<?php

use PrestaShopBundle\Api\Api;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;

if (!defined('_PS_ADMIN_DIR_')) {
    define('_PS_ADMIN_DIR_', __DIR__);
}

if (!defined('PS_ADMIN_DIR')) {
    define('PS_ADMIN_DIR', _PS_ADMIN_DIR_);
}

require _PS_ADMIN_DIR_.'/../config/config.inc.php';

//small test to clear cache after upgrade
if (Configuration::get('PS_UPGRADE_CLEAR_CACHE')) {
    header('Cache-Control: max-age=0, must-revalidate');
    header('Expires: Mon, 06 Jun 1985 06:06:00 GMT+1');
    Configuration::updateValue('PS_UPGRADE_CLEAR_CACHE', 0);
}

// For retrocompatibility with "tab" parameter
if (!isset($_GET['controller']) && isset($_GET['tab'])) {
    $_GET['controller'] = strtolower($_GET['tab']);
}
if (!isset($_POST['controller']) && isset($_POST['tab'])) {
    $_POST['controller'] = strtolower($_POST['tab']);
}
if (!isset($_REQUEST['controller']) && isset($_REQUEST['tab'])) {
    $_REQUEST['controller'] = strtolower($_REQUEST['tab']);
}

// Enable APC for autoloading to improve performance.
// You should change the ApcClassLoader first argument to a unique prefix
// in order to prevent cache key conflicts with other applications
// also using APC.
/*
$apcLoader = new ApcClassLoader(sha1(__FILE__), $loader);
$loader->unregister();
$apcLoader->register(true);
*/
if (_PS_MODE_DEV_) {
    Debug::enable();
}
require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel(_PS_ENV_, _PS_MODE_DEV_);
// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
Request::setTrustedProxies([], Request::HEADER_X_FORWARDED_ALL);

$catch = strpos($request->getRequestUri(), Api::API_BASE_PATH) !== false;

try {
    require_once __DIR__.'/../autoload.php';
    $response = $kernel->handle($request, HttpKernelInterface::MASTER_REQUEST, $catch);
    $response->send();
    $kernel->terminate($request, $response);
} catch (NotFoundHttpException $exception) {
    define('ADMIN_LEGACY_CONTEXT', true);
    // correct Apache charset (except if it's too late)
    if (!headers_sent()) {
        header('Content-Type: text/html; charset=utf-8');
    }

    // Prepare and trigger LEGACY admin dispatcher
    Dispatcher::getInstance()->dispatch();
}
