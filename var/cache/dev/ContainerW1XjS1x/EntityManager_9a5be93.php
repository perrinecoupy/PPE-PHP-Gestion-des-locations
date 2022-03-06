<?php

namespace ContainerW1XjS1x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9c8a1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfe8a4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties384f3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getConnection', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getMetadataFactory', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getExpressionBuilder', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'beginTransaction', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getCache', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'transactional', array('func' => $func), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'commit', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->commit();
    }

    public function rollback()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'rollback', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getClassMetadata', array('className' => $className), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'createQuery', array('dql' => $dql), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'createNamedQuery', array('name' => $name), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'createQueryBuilder', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'flush', array('entity' => $entity), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'clear', array('entityName' => $entityName), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->clear($entityName);
    }

    public function close()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'close', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->close();
    }

    public function persist($entity)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'persist', array('entity' => $entity), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'remove', array('entity' => $entity), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'refresh', array('entity' => $entity), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'detach', array('entity' => $entity), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'merge', array('entity' => $entity), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'contains', array('entity' => $entity), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getEventManager', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getConfiguration', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'isOpen', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getUnitOfWork', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getProxyFactory', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'initializeObject', array('obj' => $obj), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'getFilters', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'isFiltersStateClean', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'hasFilters', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return $this->valueHolder9c8a1->hasFilters();
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

        $instance->initializerfe8a4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9c8a1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9c8a1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9c8a1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, '__get', ['name' => $name], $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        if (isset(self::$publicProperties384f3[$name])) {
            return $this->valueHolder9c8a1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c8a1;

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

        $targetObject = $this->valueHolder9c8a1;
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
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c8a1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9c8a1;
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
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, '__isset', array('name' => $name), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c8a1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9c8a1;
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
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, '__unset', array('name' => $name), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c8a1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9c8a1;
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
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, '__clone', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        $this->valueHolder9c8a1 = clone $this->valueHolder9c8a1;
    }

    public function __sleep()
    {
        $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, '__sleep', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;

        return array('valueHolder9c8a1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfe8a4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfe8a4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfe8a4 && ($this->initializerfe8a4->__invoke($valueHolder9c8a1, $this, 'initializeProxy', array(), $this->initializerfe8a4) || 1) && $this->valueHolder9c8a1 = $valueHolder9c8a1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c8a1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c8a1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
