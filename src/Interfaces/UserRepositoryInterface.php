<?php
namespace Interfaces;

interface UserRepositoryInterface
{
    function create(array $data): array;
    function read(string $id): ?array;
    function update(string $id, array $data): ?array;
    function delete(string $id): bool;
    function listAll(): array;
}