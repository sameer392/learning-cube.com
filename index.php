<?php

/**
 * Front controller shim for shared-hosting setups where the web root
 * cannot be pointed directly to the Laravel `public` directory.
 *
 * All requests that reach this file simply load the real front controller
 * from `public/index.php`.
 */
require __DIR__ . '/public/index.php';

