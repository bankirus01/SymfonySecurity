<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTm07qfc\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTm07qfc/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTm07qfc.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTm07qfc\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerTm07qfc\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Tm07qfc',
    'container.build_id' => 'c37b8657',
    'container.build_time' => 1519079686,
));
