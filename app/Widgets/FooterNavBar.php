<?php

namespace App\Widgets;

use App\Services\Navigation;
use App\Support\Widget\AbstractWidget;

class FooterNavBar extends AbstractWidget
{
    protected $config = [
        'category' => null,
    ];

    public function getData(array $params = [])
    {
        $navigation = app(Navigation::class);
        return [
            'category' => $this->config['category'],
            'navigation' => $navigation,
            'childNavs' => $navigation->getChildsByParentNavId($this->config['category'])
        ];
    }
}
