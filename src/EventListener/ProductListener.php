<?php

namespace Aropixel\SyliusStockMovementPlugin\EventListener;

use Aropixel\SyliusStockMovementPlugin\Persister\StockMovementPersisterInterface;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Sylius\Component\Core\Model\ProductInterface;

class ProductListener
{
    private StockMovementPersisterInterface $stockMovementPersister;

    public function __construct(StockMovementPersisterInterface $stockMovementPersister)
    {
        $this->stockMovementPersister = $stockMovementPersister;
    }

    public function onProductPreRegister(ResourceControllerEvent $event)
    {
        /** @var ProductInterface $product */
        $product = $event->getSubject();
        $productVariant = $product->getVariants()->first();

        if ($productVariant) {
            $this->stockMovementPersister->persistManualStockMovement($productVariant);
        }
    }
}
