<?php

namespace App\Storage\CSV;

use App\Encoder\EncoderModelInterface;
use App\Storage\Storage;
use App\Storage\StorageModelInterface;

class CsvStorage extends Storage
{
    public function list()
    {
        // TODO: return data by $this->getModel()
    }

    /**
     * @inheritDoc
     */
    function fetch(StorageModelInterface $model)
    {
        // TODO: Fetch data from file by model
    }

    /**
     * @inheritDoc
     */
    function save(EncoderModelInterface $encoderModel): bool
    {
        // TODO: Implement save() method.
    }
}