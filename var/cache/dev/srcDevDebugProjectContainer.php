<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKWHvDV1\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKWHvDV1/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKWHvDV1.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKWHvDV1\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerKWHvDV1\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'KWHvDV1',
    'container.build_id' => '3d6b4443',
    'container.build_time' => 1542314209,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerKWHvDV1');
