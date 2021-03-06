<?php
/**
 * MODX ANYTHING ELSE INSTALLER
 *
 * @author Bert Oost at OostDesign.com <bert@oostdesign.com>
 */

require_once(dirname(__FILE__) . '/includes/initializer.php');

$modx->log(modX::LOG_LEVEL_INFO, 'Ready to install anything you want? Hooks will be fired!');

loadHooks('install-any');

$modx->log(modX::LOG_LEVEL_INFO, 'DONE!');