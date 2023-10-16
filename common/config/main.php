<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],

        // rbac:
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
            'itemFile' => '@common/rbac/items/items.php',
            'assignmentFile' => '@common/rbac/items/assignments.php',
            'ruleFile' => '@common/rbac/items/rules.php',
            'defaultRoles' => ['user'],
        ],

    ],
];
