<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('app:prune-log-files --days=90')->daily();
Schedule::command('app:generate-sitemap --images')->daily();
