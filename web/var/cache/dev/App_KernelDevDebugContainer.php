<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQTaQ23O\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQTaQ23O/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQTaQ23O.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQTaQ23O\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQTaQ23O\App_KernelDevDebugContainer([
    'container.build_hash' => 'QTaQ23O',
    'container.build_id' => '3f7a9f43',
    'container.build_time' => 1674332884,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQTaQ23O');
