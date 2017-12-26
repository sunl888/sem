<?php

namespace App\Widgets;

use App\Services\VisitorService;
use App\Support\Widget\AbstractWidget;

class Visitor extends AbstractWidget
{
    protected $config = [];

    public function getData(array $params = [])
    {
        $pvs = 0;
        $uvs = 0;
        $visitorService = app(VisitorService::class);
        $recentlyPVUV = $visitorService->getRecentlyPVUVFromCache();
        foreach ($recentlyPVUV as $item) {
            $pvs += $item['page_view'];
            $uvs += $item['unique_visitor'];
        }
        return [
            'pvs' => $pvs,
            'uvs' => $uvs,
        ];
    }
}
