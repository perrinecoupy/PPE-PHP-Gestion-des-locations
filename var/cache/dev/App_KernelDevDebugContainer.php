<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRmpxIek\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRmpxIek/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRmpxIek.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRmpxIek\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRmpxIek\App_KernelDevDebugContainer([
    'container.build_hash' => 'RmpxIek',
    'container.build_id' => '4b59ce37',
    'container.build_time' => 1646651180,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRmpxIek');
