<?php

namespace App\Repositories;


interface PostRepositoryConstract {
    public function all();
    public function create($data);
    public function find($id);
    public function delete($id);
    public function update($id, array $data);
    public function show($id); 
}