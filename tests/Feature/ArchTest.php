<?php

it('will not use debugging functions')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'var_export', 'print_r'])
    ->each
    ->not
    ->toBeUsed();
