<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */


function viewadmin($name, $data = [])
{
    extract($data);

    return require "app/views/admin/{$name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
