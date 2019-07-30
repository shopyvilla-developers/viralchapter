<?php
return [
    'admin.posts' => [
        'index' => 'post::permissions.index',
        'create' => 'post::permissions.create',
        'edit' => 'post::permissions.edit',
        'destroy' => 'post::permissions.destroy',
    ],
    'admin.withdraw' => [
        'index' => 'post::permissions.windex',
        'create' => 'post::permissions.wcreate',
        'edit' => 'post::permissions.wedit',
        'destroy' => 'post::permissions.wdestroy',
    ],
];
