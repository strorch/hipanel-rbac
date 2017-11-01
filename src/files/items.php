<?php
return [
    'role:unauthorized' => [
        'type' => 1,
        'children' => [
            'restore-password',
            'deposit',
        ],
    ],
    'role:client' => [
        'type' => 1,
        'children' => [
            'role:unauthorized',
            'domain.pay',
            'domain.push',
            'server.pay',
        ],
    ],
    'role:support' => [
        'type' => 1,
        'children' => [
            'support',
        ],
    ],
    'role:admin' => [
        'type' => 1,
        'children' => [
            'role:support',
            'admin',
            'contact.force-verify',
        ],
    ],
    'role:manager' => [
        'type' => 1,
        'children' => [
            'role:support',
            'role:document.manager',
            'manage',
            'domain.pay',
            'domain.push',
            'server.pay',
            'contact.force-verify',
            'mailing.prepare',
            'mailing.send',
            'server.sell',
        ],
    ],
    'role:reseller' => [
        'type' => 1,
        'children' => [
            'role:manager',
            'role:bill.manager',
            'resell',
            'deposit',
        ],
    ],
    'role:owner' => [
        'type' => 1,
        'children' => [
            'role:manager',
            'role:bill.manager',
            'resell',
            'own',
        ],
    ],
    'role:employee' => [
        'type' => 1,
        'children' => [
            'role:client',
            'employee.read',
        ],
    ],
    'role:domain.master' => [
        'type' => 1,
        'children' => [
            'domain.delete',
            'domain.freeze',
            'domain.unfreeze',
            'domain.push',
            'domain.force-push',
        ],
    ],
    'role:bill.manager' => [
        'type' => 1,
        'children' => [
            'bill.create',
            'bill.update',
            'bill.delete',
        ],
    ],
    'role:employee.manager' => [
        'type' => 1,
        'children' => [
            'employee.read',
            'employee.create',
            'employee.update',
            'employee.delete',
        ],
    ],
    'role:document.manager' => [
        'type' => 1,
        'children' => [
            'document.manage',
            'document.generate',
        ],
    ],
    'role:document.master' => [
        'type' => 1,
        'children' => [
            'document.generate-all',
        ],
    ],
    'restore-password' => [
        'type' => 2,
    ],
    'deposit' => [
        'type' => 2,
    ],
    'domain.pay' => [
        'type' => 2,
    ],
    'domain.push' => [
        'type' => 2,
    ],
    'server.pay' => [
        'type' => 2,
    ],
    'support' => [
        'type' => 2,
    ],
    'admin' => [
        'type' => 2,
    ],
    'contact.force-verify' => [
        'type' => 2,
    ],
    'manage' => [
        'type' => 2,
    ],
    'mailing.prepare' => [
        'type' => 2,
    ],
    'mailing.send' => [
        'type' => 2,
    ],
    'server.sell' => [
        'type' => 2,
    ],
    'resell' => [
        'type' => 2,
    ],
    'own' => [
        'type' => 2,
    ],
    'employee.read' => [
        'type' => 2,
    ],
    'domain.delete' => [
        'type' => 2,
    ],
    'domain.freeze' => [
        'type' => 2,
    ],
    'domain.unfreeze' => [
        'type' => 2,
    ],
    'domain.force-push' => [
        'type' => 2,
    ],
    'bill.create' => [
        'type' => 2,
    ],
    'bill.update' => [
        'type' => 2,
    ],
    'bill.delete' => [
        'type' => 2,
    ],
    'employee.create' => [
        'type' => 2,
    ],
    'employee.update' => [
        'type' => 2,
    ],
    'employee.delete' => [
        'type' => 2,
    ],
    'document.manage' => [
        'type' => 2,
    ],
    'document.generate' => [
        'type' => 2,
    ],
    'document.generate-all' => [
        'type' => 2,
    ],
    'deny:deposit' => [
        'type' => 2,
    ],
    'deny:domain.push' => [
        'type' => 2,
    ],
    'deny:server.pay' => [
        'type' => 2,
    ],
];
