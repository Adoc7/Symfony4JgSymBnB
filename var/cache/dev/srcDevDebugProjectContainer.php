<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAx95ve2\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAx95ve2/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAx95ve2.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAx95ve2\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerAx95ve2\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Ax95ve2',
    'container.build_id' => '0ca64d96',
    'container.build_time' => 1543528918,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerAx95ve2');
