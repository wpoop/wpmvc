<?php

namespace Amostajo\WPPluginCore\Contracts;

/**
 * Plugable contract.
 * Interface for ADDONS.
 *
 * @author Alejandro Mostajo
 * @license MIT
 * @package Amostajo\WPPluginCore
 * @version 1.0
 */
interface Plugable
{
    /**
     * Called on Plugin's init function.
     * @since 1.0
     * @param object &$main Main plugin object as reference.
     */
    public function init( &$main );

    /**
     * Called on Plugin's on_admin function.
     * Admin Dashboard.
     * @since 1.0
     * @param object &$main Main plugin object as reference.
     */
    public function on_admin( &$main );
}
