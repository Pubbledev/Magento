<?php

$paths = array('pubble/messenger/method', 'pubble/messenger/code');
foreach ($paths as $path) {
    Mage::getConfig()->deleteConfig($path);
}

if (2 === Mage::getStoreConfigFlag('pubble/messenger/method')) {
    Mage::getConfig()->saveConfig('pubble/messenger/enabled', 0);
}
