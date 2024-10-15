<?php

$gen = new Generate();

$gen->passwordCreate(1,2,3,4);

print_r($gen->hashes);