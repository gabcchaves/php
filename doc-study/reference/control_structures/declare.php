<?php
/* tick directive */
declare(ticks=1);

// Procedure to be executed upon each tick
function tick_handler() { print 'A tick happend.' . PHP_EOL; }
register_tick_function('tick_handler'); // Special event to be executed upon each tick
// (It also causes a tick)

$a = 1; // Causes a tick too

$b = 2; // Another one

// So, 3 ticks happend

/* econding directive */
declare(encoding='UTF-8'); // Defines script enconding

// EOF

