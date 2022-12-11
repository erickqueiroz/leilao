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
        'username' => 'mobiup_analytics',
        'password' => 'Analytics!@#',
        'dsn' => 'mysql:dbname=mobiup_analytics;host=107.161.183.203',
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
    'app_links' => [
        'android' => '',
        'ios' => '',
        'link_redirecionador' => 'https://itsnft.io/app'
    ],
    'manual_sap_actions_allowed' => [
        'admin@email.com', 'rodrigo@mobiup.com.br', 'suporte@mobiup.com.br', ''
    ],
    'aws' => [
        's3' => [
            'aws_access_key_id' => 'AKIA5MEP6DCEFDPKIS3V',
            'aws_secret_access_key' => '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',
            'endpoint' => 'https://itsnft-qa.s3.amazonaws.com/public/',
            'bucket' => 'itsnft-qa',
            'region' => 'us-east-1',
            'version' => 'latest'
        ]
    ],
    'activation' => [
        'default_method' => 'sms'
    ],
    'controle_disparos_notificacoes' => [
        'qtde_disparos' => 500
    ],
    'redis' => [
        'host' => '',
        'port' => 9979,
    ],
    'correios' => [
        'host' => 'https://viacep.com.br/ws/'
    ],
    'bitly' => [
        'access_token'  => 'bcb6700ee24bd438cda7e032d282bd28eee62aec',
        'url'           => 'https://api-ssl.bitly.com/v4/shorten'
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
        'url'           => 'https://itspay-dev.inovaquant.com/api/v1',
        'private_key'   => 'G13cOg2lU0B0Q7re3uKSMnI7doc/0W3HJTjIvnVJ76BcizhWPTW99PGJlAh/AAZOhbmJW+dSCPUps6Rp',
        'public_key'    => 'j5ERY13g63o+sJF3QkO0meJg9hS1z8LwltBhJ9HfJ8Q=',
        'party_id'      => 'THOMSON'
    ],
    'infura' => [
        'url' => 'https://goerli.infura.io/v3/ad2e8450449b4586aec54a266c55b261'
    ],
    'google_places' => [
        'key' => 'AIzaSyDr_R5ajlFmjSg157FjiKMHLswPIr4yu28'
    ],
    'opensea' => [
        'key' => '04ca5c997bb74f919b0844048432974b'
    ],
    'etherscan' => [
        'key' => '4DXDAYTHSBP6S5YCWIAR9KIBA69KMMVMMY' // rafakoller@gmail.com
    ],
    'pinata' => [
        'endpoint'      => 'https://api.pinata.cloud/',
        'gateway'       => 'https://gateway.pinata.cloud/ipfs/',
        'path_base'     => 'https://ipfs.io/ipfs/',
        'key'           => 'e9eb13fa534eea65370e',
        'secret_key'    => '4691a5d65f6d32c97005b8ba0c03c6f0421ccd3e958c80fa13c8442aba916622',
        'jwt'           => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySW5mb3JtYXRpb24iOnsiaWQiOiJjMjk2MmEzYS0wMWFiLTRhOTgtYjgxMC0wZWFmZWI4ZjA1MzEiLCJlbWFpbCI6ImFkbWluaXN0cmF0aXZvQG1vYml1cC5jb20uYnIiLCJlbWFpbF92ZXJpZmllZCI6dHJ1ZSwicGluX3BvbGljeSI6eyJyZWdpb25zIjpbeyJpZCI6IkZSQTEiLCJkZXNpcmVkUmVwbGljYXRpb25Db3VudCI6MX0seyJpZCI6Ik5ZQzEiLCJkZXNpcmVkUmVwbGljYXRpb25Db3VudCI6MX1dLCJ2ZXJzaW9uIjoxfSwibWZhX2VuYWJsZWQiOmZhbHNlLCJzdGF0dXMiOiJBQ1RJVkUifSwiYXV0aGVudGljYXRpb25UeXBlIjoic2NvcGVkS2V5Iiwic2NvcGVkS2V5S2V5IjoiZTllYjEzZmE1MzRlZWE2NTM3MGUiLCJzY29wZWRLZXlTZWNyZXQiOiI0NjkxYTVkNjVmNmQzMmM5NzAwNWI4YmEwYzAzYzZmMDQyMWNjZDNlOTU4YzgwZmExM2M4NDQyYWJhOTE2NjIyIiwiaWF0IjoxNjYzNjY4NzAwfQ.T-HjP6xH4IZM_LKuSCoMX2ka5oo7BvTy_LTMqKD6_Lo',
    ],
    'google' => [
        'client_id'     => '654423220165-fpnkitcuf5e0ddpv7u0von66f1ubcofg.apps.googleusercontent.com',
        'secret_token'  => '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',
    ],
    'facebook' => [
        'app_id'        => '774588696921136',
        'app_secret'    => '8b7f9160122802cd1800b2dbaa4522e9',
        'app_redirect'  => 'login-facebook',
        'app_version'   => 'v4.0',
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
