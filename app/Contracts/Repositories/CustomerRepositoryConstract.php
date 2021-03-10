<?php

namespace App\Contracts\Repositories;

interface CustomerRepositoryConstract {
    public function all();
    
    public function find($id);

    public function create($input);

    public function delete($id);
    
    public function update($id, array $data);

    public function show($id); 
}