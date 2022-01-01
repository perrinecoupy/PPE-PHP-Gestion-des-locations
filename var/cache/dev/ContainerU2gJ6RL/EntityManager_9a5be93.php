<?php

namespace ContainerU2gJ6RL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder44d4a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf6718 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0234 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getConnection', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getMetadataFactory', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getExpressionBuilder', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'beginTransaction', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getCache', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'transactional', array('func' => $func), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'commit', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->commit();
    }

    public function rollback()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'rollback', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getClassMetadata', array('className' => $className), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'createQuery', array('dql' => $dql), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'createNamedQuery', array('name' => $name), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'createQueryBuilder', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'flush', array('entity' => $entity), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'clear', array('entityName' => $entityName), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->clear($entityName);
    }

    public function close()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'close', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->close();
    }

    public function persist($entity)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'persist', array('entity' => $entity), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'remove', array('entity' => $entity), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'refresh', array('entity' => $entity), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'detach', array('entity' => $entity), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'merge', array('entity' => $entity), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'contains', array('entity' => $entity), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getEventManager', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getConfiguration', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'isOpen', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getUnitOfWork', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getProxyFactory', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'initializeObject', array('obj' => $obj), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'getFilters', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'isFiltersStateClean', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'hasFilters', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return $this->valueHolder44d4a->hasFilters();
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

        $instance->initializerf6718 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder44d4a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder44d4a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder44d4a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, '__get', ['name' => $name], $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        if (isset(self::$publicPropertiesf0234[$name])) {
            return $this->valueHolder44d4a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d4a;

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

        $targetObject = $this->valueHolder44d4a;
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
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d4a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder44d4a;
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
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, '__isset', array('name' => $name), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d4a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder44d4a;
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
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, '__unset', array('name' => $name), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d4a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder44d4a;
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
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, '__clone', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        $this->valueHolder44d4a = clone $this->valueHolder44d4a;
    }

    public function __sleep()
    {
        $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, '__sleep', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;

        return array('valueHolder44d4a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf6718 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf6718;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf6718 && ($this->initializerf6718->__invoke($valueHolder44d4a, $this, 'initializeProxy', array(), $this->initializerf6718) || 1) && $this->valueHolder44d4a = $valueHolder44d4a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder44d4a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder44d4a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
