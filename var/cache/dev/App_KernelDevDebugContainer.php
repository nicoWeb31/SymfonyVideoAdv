<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4gCaxFV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4gCaxFV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4gCaxFV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4gCaxFV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4gCaxFV\App_KernelDevDebugContainer([
    'container.build_hash' => '4gCaxFV',
    'container.build_id' => 'c10c884b',
    'container.build_time' => 1586954584,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4gCaxFV');
