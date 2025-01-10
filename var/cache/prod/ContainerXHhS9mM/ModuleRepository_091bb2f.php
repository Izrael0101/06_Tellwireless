<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder37477 = null;
    private $initializera7fa7 = null;
    private static $publicProperties5061e = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getList', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getInstalledModules', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getMustBeConfiguredModules', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getUpgradableModules', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getModule', array('moduleName' => $moduleName), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'setActionUrls', array('collection' => $collection), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializera7fa7 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder37477) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder37477 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder37477->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, '__get', ['name' => $name], $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        if (isset(self::$publicProperties5061e[$name])) {
            return $this->valueHolder37477->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37477;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder37477;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37477;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder37477;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, '__isset', array('name' => $name), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37477;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder37477;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, '__unset', array('name' => $name), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37477;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder37477;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, '__clone', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        $this->valueHolder37477 = clone $this->valueHolder37477;
    }
    public function __sleep()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, '__sleep', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return array('valueHolder37477');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera7fa7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera7fa7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'initializeProxy', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder37477;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder37477;
    }
}
