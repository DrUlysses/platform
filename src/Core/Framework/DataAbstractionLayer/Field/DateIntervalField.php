<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer\Field;

use Shopware\Core\Framework\DataAbstractionLayer\FieldSerializer\DateIntervalFieldSerializer;
use Shopware\Core\Framework\Log\Package;

#[Package('checkout')]
class DateIntervalField extends Field implements StorageAware
{
    private string $storageName;

    public function __construct(
        string $storageName,
        string $propertyName
    ) {
        $this->storageName = $storageName;
        parent::__construct($propertyName);
    }

    public function getStorageName(): string
    {
        return $this->storageName;
    }

    protected function getSerializerClass(): string
    {
        return DateIntervalFieldSerializer::class;
    }
}
