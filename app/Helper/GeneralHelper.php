<?php

namespace App\Helpers;

use Ulid\Ulid;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Support\Facades\Auth;

class GeneralHelper
{

    public static function generateNanoId($length = 21): string
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function generateULID(): string
    {
        $currentTime = strtotime('now WIB') * 1000;
        $ulid = Ulid::fromTimestamp($currentTime);
        return $ulid;
    }

    public static function getAuthInfo(): string
    {
        $user = Auth::user();
        $informationUser = [
            'id' => $user->id,
            'name' => $user->name
        ];
        return json_encode($informationUser);
    }
}
