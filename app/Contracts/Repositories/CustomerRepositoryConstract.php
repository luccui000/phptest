<?php

namespace App\Contracts\Repositories;

interface CustomerRepositoryConstract {
    public function anyData();
    
    public function all();
    
    public function find($id);

    public function create($input);

    public function delete($id);

    public function update($id, $input);

    public function show($id); 
}