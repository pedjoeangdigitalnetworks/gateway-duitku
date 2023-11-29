<?php return array(
    'root' => array(
        'name' => 'blesta/duitku',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => '8d9a07c56758e37c0ca4be4addc1bdebfa7b794b',
        'type' => 'blesta-gateway-nonmerchant',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'blesta/composer-installer' => array(
            'pretty_version' => '1.1.0',
            'version' => '1.1.0.0',
            'reference' => 'f0529f892e4cb0db5e9e949031965f212c7da269',
            'type' => 'composer-installer',
            'install_path' => __DIR__ . '/../blesta/composer-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'blesta/duitku' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '8d9a07c56758e37c0ca4be4addc1bdebfa7b794b',
            'type' => 'blesta-gateway-nonmerchant',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'duitkupg/duitku-php' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '983001aefdce35f2d994bfa1e84825169c1b930f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../duitkupg/duitku-php',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
