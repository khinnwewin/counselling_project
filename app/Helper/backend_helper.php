<?php
use App\User;
use App\Model\Category;
use App\Model\Appointment;
function showPrettyStatus($status)
{
    switch ($status) {
        case TRUE:
            return '<i class="fa fa-check-circle text-green"></i>';
            break;
        case FALSE:
            return '<i class="fa fa-times-circle-o text-red"></i>';
            break;
    }
}

function getUser($user_id) {
    $user = User::where('id', $user_id)->first();
    return $user->name;
}
