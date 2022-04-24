<?php

namespace ContainerG4UJRP0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5932d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf3780 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties16add = [
        
    ];

    public function getConnection()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getConnection', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getMetadataFactory', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getExpressionBuilder', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'beginTransaction', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getCache', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'transactional', array('func' => $func), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'commit', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->commit();
    }

    public function rollback()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'rollback', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getClassMetadata', array('className' => $className), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'createQuery', array('dql' => $dql), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'createNamedQuery', array('name' => $name), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'createQueryBuilder', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'flush', array('entity' => $entity), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'clear', array('entityName' => $entityName), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->clear($entityName);
    }

    public function close()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'close', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->close();
    }

    public function persist($entity)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'persist', array('entity' => $entity), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'remove', array('entity' => $entity), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'refresh', array('entity' => $entity), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'detach', array('entity' => $entity), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'merge', array('entity' => $entity), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'contains', array('entity' => $entity), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getEventManager', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getConfiguration', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'isOpen', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getUnitOfWork', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getProxyFactory', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'initializeObject', array('obj' => $obj), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'getFilters', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'isFiltersStateClean', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'hasFilters', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return $this->valueHolder5932d->hasFilters();
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

        $instance->initializerf3780 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5932d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5932d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5932d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, '__get', ['name' => $name], $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        if (isset(self::$publicProperties16add[$name])) {
            return $this->valueHolder5932d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5932d;

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

        $targetObject = $this->valueHolder5932d;
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
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5932d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5932d;
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
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, '__isset', array('name' => $name), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5932d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5932d;
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
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, '__unset', array('name' => $name), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5932d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5932d;
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
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, '__clone', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        $this->valueHolder5932d = clone $this->valueHolder5932d;
    }

    public function __sleep()
    {
        $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, '__sleep', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;

        return array('valueHolder5932d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf3780 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf3780;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf3780 && ($this->initializerf3780->__invoke($valueHolder5932d, $this, 'initializeProxy', array(), $this->initializerf3780) || 1) && $this->valueHolder5932d = $valueHolder5932d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5932d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5932d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
