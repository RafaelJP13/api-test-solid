<?php
namespace Src\Repositories;

use Src\Interfaces\UserRepositoryInterface;
use Src\Models\User;

class MockUserRepository implements UserRepositoryInterface {
    private array $users = [];

    public function __construct() {
        $this->users = [
            new User(1, 'Alice', 'alice@example.com'),
            new User(2, 'Bob', 'bob@example.com'),
        ];
    }

    public function getAll(): array {
        return $this->users;
    }

    public function getById(int $id): ?User {
        foreach ($this->users as $user) {
            if ($user->id === $id) {
                return $user;
            }
        }
        return null;
    }

    public function create(User $user): bool {
        $this->users[] = $user;
        return true;
    }

    public function update(User $user): bool {
        foreach ($this->users as &$u) {
            if ($u->id === $user->id) {
                $u = $user;
                return true;
            }
        }
        return false;
    }

    public function delete(int $id): bool {
        foreach ($this->users as $key => $user) {
            if ($user->id === $id) {
                unset($this->users[$key]);
                return true;
            }
        }
        return false;
    }
}
