<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHcqj4xu\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHcqj4xu/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHcqj4xu.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHcqj4xu\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHcqj4xu\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Hcqj4xu',
    'container.build_id' => '24a70e47',
    'container.build_time' => 1586027845,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHcqj4xu');
