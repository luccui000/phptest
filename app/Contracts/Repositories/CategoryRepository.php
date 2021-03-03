<?php


namespace App\Contracts\Repositories;
use App\Abstracts\AbstractRepository;


interface CategoryRepository extends AbstractRepository {
    public function getData($data = [], $with = [], $dataSelect = ['*']);
}