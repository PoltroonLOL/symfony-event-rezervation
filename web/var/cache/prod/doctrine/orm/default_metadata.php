<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Event__CLASSMETADATA__' => 0,
'App__Entity__User__CLASSMETADATA__' => 1,
'App__Entity__Role__CLASSMETADATA__' => 2,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Event',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Event',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\EventRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'place' => [
                            'fieldName' => 'place',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'place',
                        ],
                        'date' => [
                            'fieldName' => 'date',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'date',
                        ],
                        'description' => [
                            'fieldName' => 'description',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'description',
                        ],
                        'puserNub' => [
                            'fieldName' => 'puserNub',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'puser_nub',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'place' => 'place',
                        'date' => 'date',
                        'description' => 'description',
                        'puser_nub' => 'puserNub',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'place' => 'place',
                        'date' => 'date',
                        'description' => 'description',
                        'puserNub' => 'puser_nub',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'event',
                    ],
                ],
                'associationMappings' => [
                    [
                        'users' => [
                            'fieldName' => 'users',
                            'joinTable' => [],
                            'targetEntity' => 'App\\Entity\\User',
                            'mappedBy' => 'events',
                            'inversedBy' => null,
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Event',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'secondName' => [
                            'fieldName' => 'secondName',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'second_name',
                        ],
                        'nickName' => [
                            'fieldName' => 'nickName',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'nick_name',
                        ],
                        'telNumber' => [
                            'fieldName' => 'telNumber',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'tel_number',
                        ],
                        'social' => [
                            'fieldName' => 'social',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'social',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'password' => 'password',
                        'name' => 'name',
                        'second_name' => 'secondName',
                        'nick_name' => 'nickName',
                        'tel_number' => 'telNumber',
                        'social' => 'social',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'password' => 'password',
                        'name' => 'name',
                        'secondName' => 'second_name',
                        'nickName' => 'nick_name',
                        'telNumber' => 'tel_number',
                        'social' => 'social',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                    ],
                ],
                'associationMappings' => [
                    [
                        'events' => [
                            'fieldName' => 'events',
                            'joinTable' => [
                                'name' => 'user_event',
                                'joinColumns' => [
                                    [
                                        'name' => 'user_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                                'inverseJoinColumns' => [
                                    [
                                        'name' => 'event_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                            ],
                            'targetEntity' => 'App\\Entity\\Event',
                            'mappedBy' => null,
                            'inversedBy' => 'users',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\User',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'joinTableColumns' => [
                                'user_id',
                                'event_id',
                            ],
                            'isOnDeleteCascade' => true,
                            'relationToSourceKeyColumns' => [
                                'user_id' => 'id',
                            ],
                            'relationToTargetKeyColumns' => [
                                'event_id' => 'id',
                            ],
                        ],
                        'role' => [
                            'fieldName' => 'role',
                            'joinTable' => [
                                'name' => 'user_role',
                                'joinColumns' => [
                                    [
                                        'name' => 'user_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                                'inverseJoinColumns' => [
                                    [
                                        'name' => 'role_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                            ],
                            'targetEntity' => 'App\\Entity\\Role',
                            'mappedBy' => null,
                            'inversedBy' => 'users',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\User',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'joinTableColumns' => [
                                'user_id',
                                'role_id',
                            ],
                            'isOnDeleteCascade' => true,
                            'relationToSourceKeyColumns' => [
                                'user_id' => 'id',
                            ],
                            'relationToTargetKeyColumns' => [
                                'role_id' => 'id',
                            ],
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Role',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Role',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\RoleRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'roleName' => [
                            'fieldName' => 'roleName',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'role_name',
                        ],
                        'status' => [
                            'fieldName' => 'status',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'status',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'role_name' => 'roleName',
                        'status' => 'status',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'roleName' => 'role_name',
                        'status' => 'status',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'role',
                    ],
                ],
                'associationMappings' => [
                    [
                        'users' => [
                            'fieldName' => 'users',
                            'joinTable' => [],
                            'targetEntity' => 'App\\Entity\\User',
                            'mappedBy' => 'role',
                            'inversedBy' => null,
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Role',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];