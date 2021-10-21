<?php

function mediaVoti($voti)
{
    $sum = 0;
    foreach ($voti as $voto) {
        $sum += $voto;
    }
    return round($sum / count($voti), 1);
};