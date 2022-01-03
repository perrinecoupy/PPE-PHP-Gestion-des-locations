<?php

namespace ContainerQJNTvM8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbbc60 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer18490 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties10639 = [
        
    ];

    public function getConnection()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getConnection', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getMetadataFactory', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getExpressionBuilder', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'beginTransaction', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getCache', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getCache();
    }

    public function transactional($func)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'transactional', array('func' => $func), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'wrapInTransaction', array('func' => $func), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'commit', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->commit();
    }

    public function rollback()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'rollback', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getClassMetadata', array('className' => $className), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'createQuery', array('dql' => $dql), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'createNamedQuery', array('name' => $name), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'createQueryBuilder', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'flush', array('entity' => $entity), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'clear', array('entityName' => $entityName), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->clear($entityName);
    }

    public function close()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'close', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->close();
    }

    public function persist($entity)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'persist', array('entity' => $entity), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'remove', array('entity' => $entity), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'refresh', array('entity' => $entity), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'detach', array('entity' => $entity), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'merge', array('entity' => $entity), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getRepository', array('entityName' => $entityName), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'contains', array('entity' => $entity), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getEventManager', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getConfiguration', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'isOpen', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getUnitOfWork', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getProxyFactory', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'initializeObject', array('obj' => $obj), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'getFilters', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'isFiltersStateClean', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'hasFilters', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return $this->valueHolderbbc60->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer18490 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbbc60) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbbc60 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbbc60->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, '__get', ['name' => $name], $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        if (isset(self::$publicProperties10639[$name])) {
            return $this->valueHolderbbc60->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbc60;

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

        $targetObject = $this->valueHolderbbc60;
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
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbc60;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbbc60;
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
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, '__isset', array('name' => $name), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbc60;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbbc60;
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
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, '__unset', array('name' => $name), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbbc60;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbbc60;
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
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, '__clone', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        $this->valueHolderbbc60 = clone $this->valueHolderbbc60;
    }

    public function __sleep()
    {
        $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, '__sleep', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;

        return array('valueHolderbbc60');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer18490 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer18490;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer18490 && ($this->initializer18490->__invoke($valueHolderbbc60, $this, 'initializeProxy', array(), $this->initializer18490) || 1) && $this->valueHolderbbc60 = $valueHolderbbc60;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbbc60;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbbc60;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
