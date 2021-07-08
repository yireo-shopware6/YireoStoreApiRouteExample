<?php declare(strict_types=1);

namespace Yireo\StoreApiRouteExample\StoreApi;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\Framework\Routing\Annotation\Since;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"store-api"})
 */
class YireoExampleRoute
{
    /**
     * @Since("6.4.0.0")
     * @Route("/store-api/yireo/example", name="store-api.yireo.example", methods={"GET"})
     */
    public function getSampleData(): YireoExampleRouteResponse
    {
        return new YireoExampleRouteResponse(['foo' => 'bar']);
    }
}
