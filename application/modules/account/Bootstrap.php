<?php
/**
 * Class Account_Bootstrap
 *
 * @category TheiaLive
 * @package Account
 */
class Account_Bootstrap extends Zend_Application_Module_Bootstrap
{
    public function _initAutoload()
    {
        $autoloader = new Zend_Application_Module_Autoloader([
            'namespace' => 'Account',
            'basePath'  => dirname(__FILE__),
        ]);
        return $autoloader;
    }
}
