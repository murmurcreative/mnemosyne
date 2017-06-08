<?php namespace Murmur\WP\Mnemosyne;

use Mnemosyne;
use MnemosyneException;

/**
 * Return the value for the key.
 *
 * @see     Murmur\WP\Mnemosyne::remember()
 */
function __m($key, $override, $validation = false)
{
    $Mnemosyne = new Mnemosyne;
    try {
        $value = $Mnemosyne->remember($key, $override, $validation = false)
    } catch (MnemosyneException $mError) {
        $GLOBALS['Murmur_WP_Mnemosyne_default_errors'][] = $mError->getMessage();
        $value = null;
    }
    return $value;
}

/**
 * Echo the value for the key.
 *
 * @see     Murmur\WP\Mnemosyne\__m()
 */
function __mE($key, $override, $validation = false)
{
    echo __m($key, $override, $validation = false);
}
