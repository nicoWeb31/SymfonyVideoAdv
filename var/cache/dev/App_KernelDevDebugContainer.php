<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVKtrcqa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVKtrcqa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVKtrcqa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVKtrcqa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVKtrcqa\App_KernelDevDebugContainer([
    'container.build_hash' => 'VKtrcqa',
    'container.build_id' => 'f8d897e6',
    'container.build_time' => 1587319974,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVKtrcqa');
