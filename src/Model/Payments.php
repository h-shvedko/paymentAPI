<?php
/**
 * Paymnets.php
 * hennadii.shvedko
 * 04.10.2023
 */

namespace PaymentApi\Model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity, ORM\Table(name: 'payments')]
class Payments extends A_Model
{
    #[ORM\Id, ORM\Column(type: 'integer'), ORM\GeneratedValue(strategy: 'AUTO')]
    private int $id;

    #[ORM\Column(name: 'method_id', type: 'integer', nullable: false)]
    private int $methodId;

    #[ORM\Column(name: 'customer_id', type: 'integer', nullable: false)]
    private int $customerId;

    #[ORM\Column(name: 'basket_id', type: 'integer', nullable: false)]
    private int $basketId;

    #[ORM\Column(name: 'sum', type: 'float', nullable: false)]
    private float $sum;

    #[ORM\Column(name: 'is_finalized', type: 'boolean', nullable: false)]
    private bool $isFinalized;

    #[ORM\Column(name: 'transaction_date', type: 'date', nullable: false)]
    private string $transactionDate;

    public function getId(): int
    {
        return $this->id;
    }

    public function getMethodId(): int
    {
        return $this->methodId;
    }

    public function setMethodId(int $methodId): void
    {
        $this->methodId = $methodId;
    }

    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    public function setCustomerId(int $customerId): void
    {
        $this->customerId = $customerId;
    }

    public function getBasketId(): int
    {
        return $this->basketId;
    }

    public function setBasketId(int $basketId): void
    {
        $this->basketId = $basketId;
    }

    public function getSum(): float
    {
        return $this->sum;
    }

    public function setSum(float $sum): void
    {
        $this->sum = $sum;
    }

    public function isFinalized(): bool
    {
        return $this->isFinalized;
    }

    public function setIsFinalized(bool $isFinalized): void
    {
        $this->isFinalized = $isFinalized;
    }

    public function getTransactionDate(): string
    {
        return $this->transactionDate;
    }

    public function setTransactionDate(string $transactionDate): void
    {
        $this->transactionDate = $transactionDate;
    }
}
