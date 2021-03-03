<?php

namespace App\Abstracts;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository {
     /**
     * @var Model
     */
    protected $model;

    /**
     * @var array
     */
    public $errors = [];

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function getData() 
    {
        return $this->modal->get();
    }
}