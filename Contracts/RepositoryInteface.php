<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 11/1/15
 * Time: 11:42 AM
 */

namespace Repository\Contracts;


interface RepositoryInteface
{
    public function all($columns = array('*'));

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));
}