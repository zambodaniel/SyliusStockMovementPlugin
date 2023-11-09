<?php


namespace Aropixel\SyliusStockMovementPlugin\Entity;


use Sylius\Component\Core\Model\AdminUserInterface;
use Sylius\Component\Core\Model\ProductVariantInterface;
use Sylius\Component\Order\Model\OrderInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

class StockMovement  implements ResourceInterface, StockMovementInterface
{
    private ?int $id = null;

    private ?\DateTimeInterface $createdAt = null;

    private ?int $quantity = null;

    private ?int $movement = null;

    private ?string $origin = null;

    private ?OrderInterface $order = null;

    private ?AdminUserInterface $adminUser = null;

    private ?ProductVariantInterface $productVariant = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     */
    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @return OrderInterface|null
     */
    public function getOrder(): ?OrderInterface
    {
        return $this->order;
    }

    /**
     * @param OrderInterface|null $order
     */
    public function setOrder(?OrderInterface $order): void
    {
        $this->order = $order;
    }

    /**
     * @return AdminUserInterface|null
     */
    public function getAdminUser(): ?AdminUserInterface
    {
        return $this->adminUser;
    }

    /**
     * @param AdminUserInterface|null $adminUser
     */
    public function setAdminUser(?AdminUserInterface $adminUser): void
    {
        $this->adminUser = $adminUser;
    }

    /**
     * @return ProductVariantInterface
     */
    public function getProductVariant(): ProductVariantInterface
    {
        return $this->productVariant;
    }

    /**
     * @param ProductVariantInterface $productVariant
     */
    public function setProductVariant(ProductVariantInterface $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    /**
     * @return int
     */
    public function getMovement(): int
    {
        return $this->movement;
    }

    /**
     * @param int $movement
     */
    public function setMovement(int $movement): void
    {
        $this->movement = $movement;
    }

}
