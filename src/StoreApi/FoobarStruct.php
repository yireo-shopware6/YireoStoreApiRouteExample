<?php declare(strict_types=1);

namespace Yireo\StoreApiRouteExample\StoreApi;

use Shopware\Core\Framework\Struct\Struct;

class FoobarStruct extends Struct
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getApiAlias(): string
    {
        return 'foobar_struct';
    }
}
