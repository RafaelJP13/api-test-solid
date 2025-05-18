<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Src\Controllers\UserController;
use Src\Repositories\MockUserRepository;

$repository = new MockUserRepository();
$controller = new UserController($repository);

echo "All users:\n";
print_r($controller->index());

echo "Create user:\n";
$controller->store(['id' => 3, 'name' => 'Charlie', 'email' => 'charlie@example.com']);
print_r($controller->index());

echo "Show user 3:\n";
print_r($controller->show(3));

echo "Update user 3:\n";
$controller->update(['id' => 3, 'name' => 'Charles', 'email' => 'charles@example.com']);
print_r($controller->show(3));

echo "Delete user 2:\n";
$controller->delete(2);
print_r($controller->index());
