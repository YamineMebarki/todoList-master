<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXCidtB8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXCidtB8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXCidtB8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXCidtB8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXCidtB8\App_KernelDevDebugContainer([
    'container.build_hash' => 'XCidtB8',
    'container.build_id' => 'f588e0fa',
    'container.build_time' => 1598826048,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXCidtB8');
