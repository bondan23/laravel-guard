<?php namespace Szykra\Guard\Contracts;

interface Permissible
{

    public function is($role);

    public function able($action);

}
