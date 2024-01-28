<?php

namespace App\Service;

use App\Entity\Bookmark;
use App\Entity\BookmarkType;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;

class BookmarkService
{
    public function __construct(
        protected EntityManagerInterface $em,
        protected Connection             $connection,
    )
    {
    }

    /**
     * @return array<int, mixed>
     */
    public function types(): array
    {
        $list = $this->em->getRepository(BookmarkType::class)->findBy(['status' => 1], ['order' => 'asc']);
        foreach ($list as &$item) {
            $item = [
                'id' => $item->getId(),
                'name' => $item->getName(),
                'order' => $item->getOrder(),
            ];
        }
        unset($item);

        return $list;
    }

    /**
     * @return array<int, mixed>
     */
    public function bookmark(): array
    {
        $list = $this->em->getRepository(Bookmark::class)->findBy(['status' => 1], ['type_id' => 'asc', 'order' => 'asc']);
        $result = [];
        foreach ($list as $item) {
            if (!($result[$item->getTypeId()] ?? null)) {
                $result[$item->getTypeId()] = [
                    'type' => $item->getType()?->getName(),
                    'type_id' => $item->getTypeId(),
                    'children' => [],
                ];
            }
            $result[$item->getTypeId()]['children'][] = [
                'id' => $item->getId(),
                'order' => $item->getOrder(),
                'name' => $item->getTitle(),
                'url' => $item->getLink(),
            ];
        }

        return array_values($result);
    }

    /**
     * @param array<string, mixed> $params
     */
    public function save(array $params): void
    {
        $id = $params['id'] ?? 0;
        $bookmark = new Bookmark();
        if ($id) {
            $bookmark = $this->em->find(Bookmark::class, $id);
        }
        $bookmark->setTypeId($params['bookmark_type_id']);
        $bookmark->setTitle($params['title'] ?? null);
        $bookmark->setLink($params['link'] ?? null);
        $bookmark->setOrder($params['order'] ?? 1000);
        $this->em->persist($bookmark);
        $this->em->flush();
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, int>
     */
    public function saveType(array $params): array
    {
        $id = $params['id'] ?? 0;
        $type = new BookmarkType();
        if ($id) {
            $type = $this->em->find(BookmarkType::class, $id);
        }
        $type->setOrder($params['order'] ?? 1000);
        $type->setName($params['name'] ?? null);
        $type->setPid($params['pid'] ?? 0);
        $type->setStatus($params['status'] ?? 1);
        $this->em->persist($type);
        $this->em->flush();

        return ['id' => $type->getId()];
    }
}
