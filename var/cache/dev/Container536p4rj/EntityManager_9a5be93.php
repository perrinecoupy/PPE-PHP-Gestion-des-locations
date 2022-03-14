<?php

namespace Container536p4rj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder37eae = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6db27 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4cbb5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getConnection', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getMetadataFactory', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getExpressionBuilder', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'beginTransaction', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getCache', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'transactional', array('func' => $func), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'commit', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->commit();
    }

    public function rollback()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'rollback', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getClassMetadata', array('className' => $className), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'createQuery', array('dql' => $dql), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'createNamedQuery', array('name' => $name), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'createQueryBuilder', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'flush', array('entity' => $entity), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'clear', array('entityName' => $entityName), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->clear($entityName);
    }

    public function close()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'close', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->close();
    }

    public function persist($entity)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'persist', array('entity' => $entity), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'remove', array('entity' => $entity), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'refresh', array('entity' => $entity), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'detach', array('entity' => $entity), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'merge', array('entity' => $entity), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'contains', array('entity' => $entity), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getEventManager', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getConfiguration', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'isOpen', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getUnitOfWork', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getProxyFactory', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'initializeObject', array('obj' => $obj), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'getFilters', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'isFiltersStateClean', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'hasFilters', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return $this->valueHolder37eae->hasFilters();
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

        $instance->initializer6db27 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder37eae) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder37eae = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder37eae->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, '__get', ['name' => $name], $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        if (isset(self::$publicProperties4cbb5[$name])) {
            return $this->valueHolder37eae->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37eae;

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

        $targetObject = $this->valueHolder37eae;
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
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37eae;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder37eae;
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
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, '__isset', array('name' => $name), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37eae;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder37eae;
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
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, '__unset', array('name' => $name), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37eae;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder37eae;
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
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, '__clone', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        $this->valueHolder37eae = clone $this->valueHolder37eae;
    }

    public function __sleep()
    {
        $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, '__sleep', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;

        return array('valueHolder37eae');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6db27 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6db27;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6db27 && ($this->initializer6db27->__invoke($valueHolder37eae, $this, 'initializeProxy', array(), $this->initializer6db27) || 1) && $this->valueHolder37eae = $valueHolder37eae;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder37eae;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder37eae;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
