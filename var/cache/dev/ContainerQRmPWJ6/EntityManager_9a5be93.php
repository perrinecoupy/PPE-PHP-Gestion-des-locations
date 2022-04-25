<?php

namespace ContainerQRmPWJ6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7878b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd030d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties721f5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getConnection', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getMetadataFactory', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getExpressionBuilder', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'beginTransaction', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getCache', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'transactional', array('func' => $func), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'commit', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->commit();
    }

    public function rollback()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'rollback', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getClassMetadata', array('className' => $className), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'createQuery', array('dql' => $dql), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'createNamedQuery', array('name' => $name), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'createQueryBuilder', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'flush', array('entity' => $entity), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'clear', array('entityName' => $entityName), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->clear($entityName);
    }

    public function close()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'close', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->close();
    }

    public function persist($entity)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'persist', array('entity' => $entity), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'remove', array('entity' => $entity), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'refresh', array('entity' => $entity), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'detach', array('entity' => $entity), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'merge', array('entity' => $entity), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'contains', array('entity' => $entity), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getEventManager', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getConfiguration', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'isOpen', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getUnitOfWork', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getProxyFactory', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'initializeObject', array('obj' => $obj), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'getFilters', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'isFiltersStateClean', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'hasFilters', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return $this->valueHolder7878b->hasFilters();
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

        $instance->initializerd030d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7878b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7878b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7878b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, '__get', ['name' => $name], $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        if (isset(self::$publicProperties721f5[$name])) {
            return $this->valueHolder7878b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7878b;

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

        $targetObject = $this->valueHolder7878b;
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
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7878b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7878b;
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
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, '__isset', array('name' => $name), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7878b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7878b;
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
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, '__unset', array('name' => $name), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7878b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7878b;
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
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, '__clone', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        $this->valueHolder7878b = clone $this->valueHolder7878b;
    }

    public function __sleep()
    {
        $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, '__sleep', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;

        return array('valueHolder7878b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd030d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd030d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd030d && ($this->initializerd030d->__invoke($valueHolder7878b, $this, 'initializeProxy', array(), $this->initializerd030d) || 1) && $this->valueHolder7878b = $valueHolder7878b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7878b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7878b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
