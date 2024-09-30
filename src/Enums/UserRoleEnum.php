<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    case Visitor = 'visitor';
    case Manager = 'manager';
    case Admin = 'admin';
    case Client = 'client';

    public function label(): string
    {
        return match ($this) {
            UserRoleEnum::Visitor => 'Visiteur',
            UserRoleEnum::Manager => 'Gérant',
            UserRoleEnum::Admin => 'Administrateur',
            UserRoleEnum::Client => 'Client',
        };
    }
}