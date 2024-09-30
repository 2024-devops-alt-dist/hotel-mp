<?php

namespace App\Enums;

enum BookingStatusEnum: string
{
    case inProgress = 'inProgress';
    case Cancelled = 'cancelled';
    case Ended = 'ended';
}