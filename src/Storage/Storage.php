<?php

namespace App\Storage;

use App\Encoder\EncoderModelInterface;

abstract class Storage extends \SplObjectStorage
{
    public $data;
    public $model;

    /**
     * @param StorageModelInterface $model
     * @return mixed
     */
    abstract function fetch(StorageModelInterface $model);

    /**
     * @param EncoderModelInterface $encoderModel
     * @return mixed
     */
    abstract function save(EncoderModelInterface $encoderModel): bool;
}