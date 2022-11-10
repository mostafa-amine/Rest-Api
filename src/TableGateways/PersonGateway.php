<?php

namespace Src\TableGateways;


use PDOException;
use Src\QueryBuilder\Builder;

class PersonGateway {

    private $table = "person";
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function all(): array
    {
        return (new Builder($this->db))->table($this->table)->findAll();
    }

    public function find($id): array
    {
        return (new Builder($this->db))->table($this->table)->find($id);
    }

    public function create(array $input): int
    {
        return (new Builder($this->db))->table($this->table)->insert($input);
    }

    public function update(): int
    {

    }

    public function delete(): int
    {

    }
}