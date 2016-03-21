<?php

return [
    'default_layout' => 'default',
    'application_name' => 'Elvenar Stats',

    'app_path' => 'src/',

    'layout_templates' => [
        'default' => 'layout/default',
        'admin' => 'layout/admin',
    ],

    'entity_paths' => [
        Loo\Helper\ClassHelper::namespaceToPath(\Admin\Entity\Points::class, 'src/', true),
    ],
];
