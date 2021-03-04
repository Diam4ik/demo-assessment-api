<?php

namespace App\Service\Question;

use App\Decoder\Decoder;
use App\Encoder\Encoder;
use App\Model\Question;
use App\Storage\Storage;
use App\Storage\StorageModelInterface;
use App\Service\Translator\TranslatorInterface;

class QuestionService
{
    private $storage;
    private $encoder;
    private $decoder;
    private $storageModel;
    private $translator;

    /**
     * QuestionService constructor.
     * @param Storage $storage
     * @param Encoder $encoder
     * @param Decoder $decoder
     * @param StorageModelInterface $storageModel
     * @param TranslatorInterface $translator
     */
    public function __construct(
        Storage $storage,
        Encoder $encoder,
        Decoder $decoder,
        StorageModelInterface $storageModel,
        TranslatorInterface $translator
    ) {
        $this->storage = $storage;
        $this->storageModel = $storageModel;
        $this->encoder = $encoder;
        $this->decoder = $decoder;
        $this->translator = $translator;
    }

    /**
     * @param array $questionModels
     * @param string $lang
     * @return array
     */
    private function translate(array $questionModels, string $lang = 'en'): array
    {
        return array_map(
            function(Question $questionModel) use ($lang) {
                $questionModel->setText($this->translator->translateFromTo($questionModel->getText(), $lang));

                return $questionModel->toArray();
            },
            $questionModels
        );
    }

    /**
     * @param string $lang
     * @return array
     */
    public function list(string $lang): array
    {
        $dataSource = $this->storage->fetch($this->storageModel);
        $questionModels = $this->decoder->decode($dataSource);

        return $this->translate($questionModels, $lang);
    }

    /**
     * @param array $data
     * @return Question
     * @throws \Exception
     */
    public function create(array $data): Question
    {
        $questionModel = new Question($data);
        $encoderModel = $this->encoder->encode($questionModel);
        // TODO: handle successful status from saving operation
        $result = $this->storage->save($encoderModel);

        return $questionModel;
    }
}
