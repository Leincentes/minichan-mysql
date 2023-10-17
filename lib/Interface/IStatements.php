<?php
declare(strict_types=1);

namespace Leinc\MinichanMysql\Interface;

interface IStatements {
    public function distinct(bool $distinct): static;
    public function field(mixed $field): static;
    public function table(mixed $table, string $alias, bool $prefix): static;
    public function join(string|array $table, string|array $condition, string $type, bool $prefix): static;
    public function order(string|array $field, string $order): static;
    public function group(string|array $group, string $order): static;
    public function limit(int|string $offset, int $length): static;
    public function page(int|string $page, int $listRows): static;
    public function getOptions(string $name): mixed;
    public function where(mixed $condition, mixed $value): static;
    public function rawKey(string $key): string;
    public function bind(mixed $key, string $value): static;
    public function count(string $field): int;
    public function value(string $field): mixed;
    public function column(string $field): mixed;
    public function query(string $sql, array $bindData, bool $fetch, bool $unbuffered): mixed;
    public function getList( array|null $data, bool $unbuffered): array;
}