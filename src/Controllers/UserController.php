<?php
namespace Src\Controllers;

use Src\Interfaces\UserRepositoryInterface;
use Src\Models\User;

class UserController {
    private UserRepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function index() {
        return $this->repository->getAll();
    }

    public function show(int $id) {
        return $this->repository->getById($id);
    }

    public function store(array $data) {
        $user = new User($data['id'], $data['name'], $data['email']);
        return $this->repository->create($user);
    }

    public function update(array $data) {
        $user = new User($data['id'], $data['name'], $data['email']);
        return $this->repository->update($user);
    }

    public function delete(int $id) {
        return $this->repository->delete($id);
    }
}
