<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'username' => '',
        'password' => '',
        'dsn' => 'mysql:dbname=;host=',
        'driver' => 'Pdo',
        'driver_options' => [
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
        ],
    ],
    'base_url' => 'https://analytics.mobiup.io',
    'payment_base_url' => 'https://analytics.mobiup.io',
    'wsdl_config' => [
        'url' => '',
        'WCFSRCoke_url' => '',
        'username' => '',
        'password' => '',
        'trace' => 1,
        'exceptions' => 1,
    ],
    'email_contato' => 'erick.queiroz@mobiup.com.br',
    'env' => 'prod',
    'push_notifications_defaults' => [
        'alerta' => true,
        'divida' => true,
        'boleto' => true,
        'campanha' => true,
        'enquete' => true,
        'clube_compras' => true,
        'pagamentos' => true,
        'uso_saldo' => true,
        'entrega_mercadorias' => true,
        'publicidade' => true
    ],
    'aws' => [
        's3' => [
            'aws_access_key_id' => '',
            'aws_secret_access_key' => '',
            'endpoint' => '',
            'bucket' => '',
            'region' => '',
            'version' => ''
        ]
    ],
    'coins' => [
        "ETH" => [
            "network" => "GOERLI_TEST",
            "scan"    => "https://goerli.etherscan.io/tx/",
            "address" => "https://goerli.etherscan.io/address/"
        ],
        "MATIC" => [
            "network" => "MUMBAI_TEST",
            "scan"    => "https://mumbai.polygonscan.com/tx/",
            "address" => "https://mumbai.polygonscan.com/address/"
        ]
    ],
    'inovaquant' => [
        'url'           => '',
        'private_key'   => '',
        'public_key'    => '',
        'party_id'      => ''
    ],
    'infura' => [
        'url' => 'https://goerli.infura.io/v3/ad2e8450449b4586aec54a266c55b261'
    ],
    'infura_nets' => [
        '5' => [
            'key'                   => '3ac68be0e4f44833bce00d483f3bd104',
            'endpoint'              => 'https://goerli.infura.io/v3/',
            'url'                   => 'https://goerli.infura.io/v3/3ac68be0e4f44833bce00d483f3bd104',
            'scan'                  => 'https://goerli.etherscan.io/tx/',
            'address'               => 'https://goerli.etherscan.io/address/',
            'chainId'               => 5,
            'crypto'                => 'ETH',
            'network_name'          => 'Goerli Testnet',
            'rpc_urls'              => 'https://goerli.infura.io/v3/',
            'block_explorer_urls'   => 'https://goerli.etherscan.io',
            'decimal'               => 18
        ],
        '1' => [
            'key'                   => '3ac68be0e4f44833bce00d483f3bd104',
            'endpoint'              => 'https://mainnet.infura.io/v3/',
            'url'                   => 'https://mainnet.infura.io/v3/3ac68be0e4f44833bce00d483f3bd104',
            'scan'                  => 'https://etherscan.io/tx/',
            'address'               => 'https://etherscan.io/address/',
            'chainId'               => 1,
            'crypto'                => 'ETH',
            'network_name'          => 'Ethereum Mainnet',
            'rpc_urls'              => 'https://mainnet.infura.io/v3/',
            'block_explorer_urls'   => 'https://etherscan.io',
            'decimal'               => 18
        ],
        '137' => [
            'key'                   => '3ac68be0e4f44833bce00d483f3bd104',
            'endpoint'              => 'https://polygon-mainnet.infura.io/v3/',
            'url'                   => 'https://polygon-mainnet.infura.io/v3/3ac68be0e4f44833bce00d483f3bd104',
            'scan'                  => 'https://polygonscan.com/tx/',
            'address'               => 'https://polygonscan.com/address/',
            'chainId'               => 137,
            'crypto'                => 'MATIC',
            'network_name'          => 'Polygon',
            'rpc_urls'              => 'https://polygon-rpc.com',
            'block_explorer_urls'   => 'https://polygonscan.com',
            'decimal'               => 18
        ],
        '80001' => [
            'key'                   => '3ac68be0e4f44833bce00d483f3bd104',
            'endpoint'              => 'https://polygon-mumbai.infura.io/v3/',
            'url'                   => 'https://polygon-mumbai.infura.io/v3/3ac68be0e4f44833bce00d483f3bd104',
            'scan'                  => 'https://mumbai.polygonscan.com/tx/',
            'address'               => 'https://mumbai.polygonscan.com/address/',
            'chainId'               => 80001,
            'crypto'                => 'MATIC',
            'network_name'          => 'Mumbai Polygon',
            'rpc_urls'              => 'https://rpc-mumbai.maticvigil.com',
            'block_explorer_urls'   => 'https://mumbai.polygonscan.com',
            'decimal'               => 18
        ],
        'key_wallet_connect' => '3ac68be0e4f44833bce00d483f3bd104'
    ],
    'api_node' => [
        'url' => 'https://compiler-smart-contract.web.app'
    ],
    'networks_allowed' => [1, 5, 80001, 137]
];
