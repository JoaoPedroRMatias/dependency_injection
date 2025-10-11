<?php

return [
    'db.host' => $_ENV['HOST'],
    'db.database' => $_ENV['DBNAME'],
    'db.user' => $_ENV['USERNAME'],
    'db.pass' => $_ENV['PASSWORD'],
    'db.port' => $_ENV['PORT'] ?? 3306,
];