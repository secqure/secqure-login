<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'Jose\\Easy\\' => array($vendorDir . '/web-token/jwt-easy'),
    'Jose\\Component\\Signature\\Algorithm\\' => array($vendorDir . '/web-token/jwt-signature-algorithm-rsa'),
    'Jose\\Component\\Signature\\' => array($vendorDir . '/web-token/jwt-signature'),
    'Jose\\Component\\Encryption\\' => array($vendorDir . '/web-token/jwt-encryption'),
    'Jose\\Component\\Core\\' => array($vendorDir . '/web-token/jwt-core'),
    'Jose\\Component\\Checker\\' => array($vendorDir . '/web-token/jwt-checker'),
    'GuzzleHttp\\Psr7\\' => array($vendorDir . '/guzzlehttp/psr7/src'),
    'GuzzleHttp\\Promise\\' => array($vendorDir . '/guzzlehttp/promises/src'),
    'GuzzleHttp\\' => array($vendorDir . '/guzzlehttp/guzzle/src'),
    'FG\\' => array($vendorDir . '/fgrosse/phpasn1/lib'),
    'Brick\\Math\\' => array($vendorDir . '/brick/math/src'),
    'Base64Url\\' => array($vendorDir . '/spomky-labs/base64url/src'),
);
