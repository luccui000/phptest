<?php
namespace App\Contracts\Pipelines;

use Closure;

use Illuminate\Support\Str;

abstract class QueryFilterContracts 
{
    public function handle($request, Closure $next)
    {
        if(!request()->has($this->getFilterName())) { 
            return $next($request);
        }
        $builder = $next($request);
        return $this->makeFilter($builder);
    }
    abstract protected function makeFilter($builder);
    protected function getFilterName()
    {
        return Str::snake(class_basename($this));
    }
}

