<?php

namespace App\Controller\Api\Bookmark;

use App\Service\BookmarkService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bookmark', name: 'bookmark_')]
class IndexController extends AbstractController
{
    public function __construct(
        protected BookmarkService $service,
    ) {
    }

    #[Route(name: 'list', methods: 'GET')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'success!',
            'code' => 1,
            'data' => $this->service->bookmark(),
        ]);
    }

    #[Route('/types', name: 'types', methods: 'GET')]
    public function types(): JsonResponse
    {
        return $this->json([
            'message' => 'success!',
            'code' => 1,
            'data' => $this->service->types(),
        ]);
    }

    #[Route('/types', name: 'types_save', methods: 'POST')]
    public function type_save(Request $request): JsonResponse
    {
        return $this->json([
            'message' => 'success!',
            'code' => 1,
            'data' => $this->service->saveType(json_decode($request->getContent(), true)),
        ]);
    }
}
