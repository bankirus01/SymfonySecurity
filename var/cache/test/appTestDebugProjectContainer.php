<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCnixyum\appTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCnixyum/appTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCnixyum.legacy');

    return;
}

if (!\class_exists(appTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCnixyum\appTestDebugProjectContainer::class, appTestDebugProjectContainer::class, false);
}

return new \ContainerCnixyum\appTestDebugProjectContainer(array(
    'container.build_hash' => 'Cnixyum',
    'container.build_id' => 'a00d37a1',
    'container.build_time' => 1519078675,
));
