<?php

namespace ContainerUTNxvHF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8e323 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd8fa9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfb5e0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getConnection', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getMetadataFactory', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getExpressionBuilder', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'beginTransaction', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getCache', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'transactional', array('func' => $func), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'commit', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->commit();
    }

    public function rollback()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'rollback', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getClassMetadata', array('className' => $className), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'createQuery', array('dql' => $dql), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'createNamedQuery', array('name' => $name), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'createQueryBuilder', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'flush', array('entity' => $entity), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'clear', array('entityName' => $entityName), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->clear($entityName);
    }

    public function close()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'close', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->close();
    }

    public function persist($entity)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'persist', array('entity' => $entity), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'remove', array('entity' => $entity), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'refresh', array('entity' => $entity), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'detach', array('entity' => $entity), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'merge', array('entity' => $entity), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'contains', array('entity' => $entity), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getEventManager', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getConfiguration', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'isOpen', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getUnitOfWork', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getProxyFactory', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'initializeObject', array('obj' => $obj), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'getFilters', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'isFiltersStateClean', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'hasFilters', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return $this->valueHolder8e323->hasFilters();
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

        $instance->initializerd8fa9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8e323) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8e323 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8e323->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, '__get', ['name' => $name], $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        if (isset(self::$publicPropertiesfb5e0[$name])) {
            return $this->valueHolder8e323->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e323;

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

        $targetObject = $this->valueHolder8e323;
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
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e323;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8e323;
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
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, '__isset', array('name' => $name), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e323;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8e323;
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
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, '__unset', array('name' => $name), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e323;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8e323;
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
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, '__clone', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        $this->valueHolder8e323 = clone $this->valueHolder8e323;
    }

    public function __sleep()
    {
        $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, '__sleep', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;

        return array('valueHolder8e323');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd8fa9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd8fa9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd8fa9 && ($this->initializerd8fa9->__invoke($valueHolder8e323, $this, 'initializeProxy', array(), $this->initializerd8fa9) || 1) && $this->valueHolder8e323 = $valueHolder8e323;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8e323;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8e323;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
