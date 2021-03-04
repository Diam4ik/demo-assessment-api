<?php

namespace App\Controller;

use App\Service\Question\QuestionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    private $questionService;

    /**
     * QuestionController constructor.
     * @param QuestionService $questionService
     */
    public function __construct(QuestionService $questionService)
    {
        $this->questionService = $questionService;
    }

    /**
     * @Route("/{version}/questions/{lang}", methods={"GET"}, requirements={"lang"="^[a-z]{2}$"}, defaults={"lang"="en"})
     * @param string|null $lang
     * @return JsonResponse
     */
    public function index(?string $lang): JsonResponse
    {
        return new JsonResponse($this->questionService->list($lang));
    }

    /**
     * TODO: add form builder
     * TODO: add params validation
     * @Route("/{version}/questions", methods={"POST"})
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function create(Request $request): Response
    {
        $questionModel = $this->questionService->create($request->request->all());

        return new JsonResponse($questionModel->toArray());
    }
}
