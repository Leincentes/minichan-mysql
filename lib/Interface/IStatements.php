<?php
declare(strict_types=1);

namespace MinichanMysql\Interface;

/**
 * 
 * Defines a set of methods for building and executing SQL statements.
 */
interface IStatements {
    /**
     * Specify whether to retrieve distinct rows in the query result.
     *
     * @param bool $distinct Whether to retrieve distinct rows.
     * @return static
     */
    public function distinct(bool $distinct): static;

    /**
     * Specify the field(s) to be selected in the query.
     *
     * @param mixed $field The field(s) to be selected.
     * @return static
     */
    public function field(mixed $field): static;

    /**
     * Specify the main table in the query with an optional alias and prefix.
     *
     * @param mixed $table The main table in the query.
     * @param string $alias The alias for the table.
     * @param bool $prefix Whether to apply a prefix to the table.
     * @return static
     */
    public function table(mixed $table, string $alias, bool $prefix): static;

    /**
     * Specify a join operation in the query.
     *
     * @param string|array $table The table(s) to join.
     * @param string|array $condition The join condition(s).
     * @param string $type The type of join (e.g., INNER, LEFT).
     * @param bool $prefix Whether to apply a prefix to the table.
     * @return static
     */
    public function join(string|array $table, string|array $condition, string $type, bool $prefix): static;

    /**
     * Specify the order of the query result.
     *
     * @param string|array $field The field(s) to order by.
     * @param string $order The order (e.g., ASC, DESC).
     * @return static
     */
    public function order(string|array $field, string $order): static;

    /**
     * Specify the grouping of the query result.
     *
     * @param string|array $group The field(s) to group by.
     * @param string $order The order of the grouping.
     * @return static
     */
    public function group(string|array $group, string $order): static;

    /**
     * Specify the limit of rows to retrieve in the query.
     *
     * @param int|string $offset The offset (starting position) of the result set.
     * @param int $length The number of rows to retrieve.
     * @return static
     */
    public function limit(int|string $offset, int $length): static;

    /**
     * Specify the page and number of rows per page for pagination.
     *
     * @param int|string $page The page number.
     * @param int $listRows The number of rows per page.
     * @return static
     */
    public function page(int|string $page, int $listRows): static;

    /**
     * Get a specific option by name.
     *
     * @param string $name The name of the option.
     * @return mixed The value of the option.
     */
    public function getOptions(string $name): mixed;

    /**
     * Specify a WHERE condition in the query.
     *
     * @param mixed $condition The WHERE condition.
     * @param mixed $value The value for the condition.
     * @return static
     */
    public function where(mixed $condition, mixed $value): static;

    /**
     * Specify a raw key for the query.
     *
     * @param string $key The raw key.
     * @return string The formatted raw key.
     */
    public function rawKey(string $key): string;

    /**
     * Bind a parameter to a placeholder in the query.
     *
     * @param mixed $key The key or placeholder.
     * @param string $value The value to bind.
     * @return static
     */
    public function bind(mixed $key, string $value): static;

    /**
     * Count the number of rows in the query result.
     *
     * @param string $field The field to count.
     * @return int The count of rows.
     */
    public function count(string $field): int;

    /**
     * Retrieve a single value from the query result.
     *
     * @param string $field The field to retrieve.
     * @return mixed The value of the field.
     */
    public function value(string $field): mixed;

    /**
     * Retrieve a single column from the query result.
     *
     * @param string $field The field to retrieve.
     * @return mixed The value of the column.
     */
    public function column(string $field): mixed;

    /**
     * Execute a custom SQL query with optional data binding and result fetching options.
     *
     * @param string $sql The SQL query.
     * @param array $bindData The data to bind to the query.
     * @param bool $fetch Whether to fetch the result.
     * @param bool $unbuffered Whether to use unbuffered query.
     * @return mixed The query result.
     */
    public function query(string $sql, array $bindData, bool $fetch, bool $unbuffered): mixed;

    /**
     * Retrieve a list of results from the query with optional data and unbuffered query option.
     *
     * @param array|null $data Additional data for the query.
     * @param bool $unbuffered Whether to use unbuffered query.
     * @return array The list of query results.
     */
    public function getList(array|null $data, bool $unbuffered): array;
}
