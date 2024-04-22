<?php

/**
 * Initialization function for the 'disableactiontime' plugin
 */
function plugin_init_disableactiontime() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['disableactiontime'] = true;
    
   
        $PLUGIN_HOOKS['add_javascript']['disableactiontime'][] = 'scripts/hideactiontime.js';
    
}

/**
 * Plugin version and information
 */
function plugin_version_disableactiontime() {
    return [
        'name'           => 'Disable ActionTime',
        'version'        => '1.0.1',
        'author'         => 'Paulo Lima',
        'license'        => 'GPLv2+',
        'homepage'       => 'https://github.com/Gambware',
        'minGlpiVersion' => '10.0'  // Minimum version of GLPI required for this plugin
    ];
}

/**
 * Check prerequisites before installing the plugin
 */
function plugin_disableactiontime_check_prerequisites() {
    if (version_compare(GLPI_VERSION, '10.0', '<')) {
        echo "Este plugin requer GLPI versão 10.0 ou superior";
        return false;
    }
    return true;
}

/**
 * Installation function for the plugin
 */
function plugin_disableactiontime_install() {
    // Aqui você pode adicionar lógica para configurar seu plugin durante a instalação,
    // como configurar tabelas de banco de dados ou configurações iniciais.

    return true; // Indica que a instalação foi bem sucedida.
}

/**
 * Uninstallation function for the plugin
 */
function plugin_disableactiontime_uninstall() {
    // Aqui você pode adicionar lógica para limpar a configuração do seu plugin,
    // como remover tabelas de banco de dados ou limpar configurações.

    return true; // Indica que a desinstalação foi bem sucedida.
}

/**
 * Check if the plugin can be uninstalled
 */
function plugin_disableactiontime_check_config() {
    return true;
}

