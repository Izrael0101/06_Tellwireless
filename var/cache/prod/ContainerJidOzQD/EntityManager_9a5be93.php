<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder37477 = null;
    private $initializera7fa7 = null;
    private static $publicProperties5061e = [
        
    ];
    public function getConnection()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getConnection', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getMetadataFactory', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getExpressionBuilder', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'beginTransaction', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getCache', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getCache();
    }
    public function transactional($func)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'transactional', array('func' => $func), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'wrapInTransaction', array('func' => $func), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'commit', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->commit();
    }
    public function rollback()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'rollback', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getClassMetadata', array('className' => $className), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'createQuery', array('dql' => $dql), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'createNamedQuery', array('name' => $name), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'createQueryBuilder', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'flush', array('entity' => $entity), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'clear', array('entityName' => $entityName), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->clear($entityName);
    }
    public function close()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'close', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->close();
    }
    public function persist($entity)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'persist', array('entity' => $entity), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'remove', array('entity' => $entity), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'refresh', array('entity' => $entity), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'detach', array('entity' => $entity), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'merge', array('entity' => $entity), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getRepository', array('entityName' => $entityName), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'contains', array('entity' => $entity), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getEventManager', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getConfiguration', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'isOpen', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getUnitOfWork', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getProxyFactory', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'initializeObject', array('obj' => $obj), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'getFilters', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'isFiltersStateClean', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, 'hasFilters', array(), $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        return $this->valueHolder37477->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera7fa7 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder37477) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder37477 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder37477->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera7fa7 && ($this->initializera7fa7->__invoke($valueHolder37477, $this, '__get', ['name' => $name], $this->initializera7fa7) || 1) && $this->valueHolder37477 = $valueHolder37477;
        if (isset(self::$publicProperties5061e[$name])) {
            return $this->valueHolder37477->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
