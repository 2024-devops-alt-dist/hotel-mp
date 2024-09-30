<?php

namespace App\Entity;

use App\Enums\BookingStatusEnum;
use App\Repository\BookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\ManyToOne(inversedBy: 'bookings')]
    private ?suite $suite = null;

    #[ORM\ManyToOne(inversedBy: 'bookings')]
    private ?user $userId = null;

    #[ORM\Column(nullable: true, enumType: BookingStatusEnum::class)]
    private ?BookingStatusEnum $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getSuite(): ?suite
    {
        return $this->suite;
    }

    public function setSuite(?suite $suite): static
    {
        $this->suite = $suite;

        return $this;
    }

    public function getUserId(): ?user
    {
        return $this->userId;
    }

    public function setUserId(?user $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getStatus(): ?BookingStatusEnum
    {
        return $this->status;
    }

    public function setStatus(?BookingStatusEnum $status): static
    {
        $this->status = $status;

        return $this;
    }
}
