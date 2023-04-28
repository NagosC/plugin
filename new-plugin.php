<?php
/*
 * Plugin Name:       Plugin teste
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Manipulador básico
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Leandro Castilione
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


 function agradecimento ($content): string
 {
    $agradecimento = '<div> Obrigado Pela leitura! </div>';

    return $content.=$agradecimento;
 }

 add_action("the_content", "agradecimento");
 