<?php

function DateFormat($date)
{
    $dateTime = date_create($date);
    return date_format($dateTime, 'H:i:s');
}
