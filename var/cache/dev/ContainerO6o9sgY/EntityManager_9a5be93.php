<?php

namespace ContainerO6o9sgY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercee8c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereae38 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesca5de = [
        
    ];

    public function getConnection()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getConnection', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getMetadataFactory', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getExpressionBuilder', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'beginTransaction', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getCache', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getCache();
    }

    public function transactional($func)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'transactional', array('func' => $func), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'wrapInTransaction', array('func' => $func), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'commit', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->commit();
    }

    public function rollback()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'rollback', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getClassMetadata', array('className' => $className), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'createQuery', array('dql' => $dql), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'createNamedQuery', array('name' => $name), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'createQueryBuilder', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'flush', array('entity' => $entity), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'clear', array('entityName' => $entityName), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->clear($entityName);
    }

    public function close()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'close', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->close();
    }

    public function persist($entity)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'persist', array('entity' => $entity), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'remove', array('entity' => $entity), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'refresh', array('entity' => $entity), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'detach', array('entity' => $entity), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'merge', array('entity' => $entity), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getRepository', array('entityName' => $entityName), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'contains', array('entity' => $entity), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getEventManager', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getConfiguration', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'isOpen', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getUnitOfWork', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getProxyFactory', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'initializeObject', array('obj' => $obj), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'getFilters', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'isFiltersStateClean', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'hasFilters', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return $this->valueHoldercee8c->hasFilters();
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

        $instance->initializereae38 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercee8c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercee8c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercee8c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, '__get', ['name' => $name], $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        if (isset(self::$publicPropertiesca5de[$name])) {
            return $this->valueHoldercee8c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee8c;

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

        $targetObject = $this->valueHoldercee8c;
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
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee8c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercee8c;
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
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, '__isset', array('name' => $name), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee8c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercee8c;
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
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, '__unset', array('name' => $name), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercee8c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercee8c;
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
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, '__clone', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        $this->valueHoldercee8c = clone $this->valueHoldercee8c;
    }

    public function __sleep()
    {
        $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, '__sleep', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;

        return array('valueHoldercee8c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereae38 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereae38;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereae38 && ($this->initializereae38->__invoke($valueHoldercee8c, $this, 'initializeProxy', array(), $this->initializereae38) || 1) && $this->valueHoldercee8c = $valueHoldercee8c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercee8c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercee8c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
