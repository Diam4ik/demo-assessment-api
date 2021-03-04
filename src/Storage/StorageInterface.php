<?php

namespace App\Storage;

interface StorageInterface
{
    public function list();

    public function add();
}
