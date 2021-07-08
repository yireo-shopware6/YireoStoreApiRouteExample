<?php declare(strict_types=1);

namespace Yireo\StoreApiRouteExample\StoreApi;

use Shopware\Core\System\SalesChannel\StoreApiResponse;

class YireoExampleRouteResponse extends StoreApiResponse
{
    public function __construct(array $data)
    {
        $struct = new FoobarStruct($data);
        parent::__construct($struct);
    }
}
