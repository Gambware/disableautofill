<?php

/**
 * Initialization function for the 'disableautofill' plugin
 */
function plugin_init_disableautofill() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['disableautofill'] = true;
    
   
        $PLUGIN_HOOKS['add_javascript']['disableautofill'][] = 'scripts/disableautofill.js';
    
}

/**
 * Plugin version and information
 */
function plugin_version_disableautofill() {
    return [
        'name'           => 'Disable AutoFill',
        'version'        => '1.0.0',
        'author'         => 'Paulo Lima',
        'license'        => 'GPLv2+',
        'homepage'       => 'https://github.com/Gambware',
        'minGlpiVersion' => '10.0'  // Minimum version of GLPI required for this plugin
    ];
}

/**
 * Check prerequisites before installing the plugin
 */
function plugin_disableautofill_check_prerequisites() {
    if (version_compare(GLPI_VERSION, '10.0', '<')) {
        echo "Este plugin requer GLPI versão 10.0 ou superior";
        return false;
    }
    return true;
}

/**
 * Installation function for the plugin
 */
function plugin_disableautofill_install() {
    // Aqui você pode adicionar lógica para configurar seu plugin durante a instalação,
    // como configurar tabelas de banco de dados ou configurações iniciais.

    return true; // Indica que a instalação foi bem sucedida.
}

/**
 * Uninstallation function for the plugin
 */
function plugin_disableautofill_uninstall() {
    // Aqui você pode adicionar lógica para limpar a configuração do seu plugin,
    // como remover tabelas de banco de dados ou limpar configurações.

    return true; // Indica que a desinstalação foi bem sucedida.
}

/**
 * Check if the plugin can be uninstalled
 */
function plugin_disableautofill_check_config() {
    return true;
}

