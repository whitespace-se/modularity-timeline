<?php

namespace ModularityTimeline;

class App
{
    public function __construct()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueueStyles'));
        add_action('admin_enqueue_scripts', array($this, 'enqueueScripts'));

        add_action('plugins_loaded', function () {
            modularity_register_module(
                MODULARITYTIMELINE_PATH . 'source/php/', // The directory path of the module
                'Module' // The class' file and class name (should be the same) withot .php extension
            );
        });
    }

    /**
     * Enqueue required style
     * @return void
     */
    public function enqueueStyles()
    {

    }

    /**
     * Enqueue required scripts
     * @return void
     */
    public function enqueueScripts()
    {

    }
}
