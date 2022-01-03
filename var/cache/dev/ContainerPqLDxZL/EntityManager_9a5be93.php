<?php

namespace ContainerPqLDxZL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder108c3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraed84 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties512ec = [
        
    ];

    public function getConnection()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getConnection', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getMetadataFactory', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getExpressionBuilder', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'beginTransaction', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getCache', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'transactional', array('func' => $func), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'commit', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->commit();
    }

    public function rollback()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'rollback', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getClassMetadata', array('className' => $className), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'createQuery', array('dql' => $dql), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'createNamedQuery', array('name' => $name), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'createQueryBuilder', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'flush', array('entity' => $entity), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'clear', array('entityName' => $entityName), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->clear($entityName);
    }

    public function close()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'close', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->close();
    }

    public function persist($entity)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'persist', array('entity' => $entity), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'remove', array('entity' => $entity), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'refresh', array('entity' => $entity), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'detach', array('entity' => $entity), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'merge', array('entity' => $entity), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'contains', array('entity' => $entity), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getEventManager', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getConfiguration', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'isOpen', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getUnitOfWork', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getProxyFactory', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'initializeObject', array('obj' => $obj), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'getFilters', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'isFiltersStateClean', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'hasFilters', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return $this->valueHolder108c3->hasFilters();
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

        $instance->initializeraed84 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder108c3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder108c3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder108c3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, '__get', ['name' => $name], $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        if (isset(self::$publicProperties512ec[$name])) {
            return $this->valueHolder108c3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder108c3;

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

        $targetObject = $this->valueHolder108c3;
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
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder108c3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder108c3;
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
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, '__isset', array('name' => $name), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder108c3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder108c3;
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
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, '__unset', array('name' => $name), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder108c3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder108c3;
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
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, '__clone', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        $this->valueHolder108c3 = clone $this->valueHolder108c3;
    }

    public function __sleep()
    {
        $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, '__sleep', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;

        return array('valueHolder108c3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraed84 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraed84;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraed84 && ($this->initializeraed84->__invoke($valueHolder108c3, $this, 'initializeProxy', array(), $this->initializeraed84) || 1) && $this->valueHolder108c3 = $valueHolder108c3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder108c3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder108c3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
