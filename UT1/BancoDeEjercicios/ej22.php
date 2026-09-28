<?php

function EsLargo (int $NumPáginas): bool {
    if ($NumPáginas < 500) {
        return false;
    } else {
        return true;
    }
}

echo(EsLargo(510));