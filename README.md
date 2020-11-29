# rsa-ssh-key-fingerprint
PHP class for generating fingerprints from RSA SSH public keys

[![Build Status](https://travis-ci.org/violuke/rsa-ssh-key-fingerprint.svg?branch=master)](https://travis-ci.org/violuke/rsa-ssh-key-fingerprint)
[![Packagist](https://img.shields.io/packagist/v/violuke/rsa-ssh-key-fingerprint.svg?maxAge=2592000)](https://github.com/violuke/rsa-ssh-key-fingerprint)
[![Packagist](https://img.shields.io/packagist/dt/violuke/rsa-ssh-key-fingerprint.svg?maxAge=2592000)](https://github.com/violuke/rsa-ssh-key-fingerprint)
[![Packagist](https://img.shields.io/packagist/dm/violuke/rsa-ssh-key-fingerprint.svg?maxAge=2592000)](https://github.com/violuke/rsa-ssh-key-fingerprint)
[![Packagist](https://img.shields.io/packagist/l/violuke/rsa-ssh-key-fingerprint.svg?maxAge=2592000)](https://github.com/violuke/rsa-ssh-key-fingerprint)

https://packagist.org/packages/violuke/rsa-ssh-key-fingerprint

## Installation
```bash
$ composer require violuke/rsa-ssh-key-fingerprint
```

## Usage (default MD5 fingerprint)
```php
$key = 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDHbry1PSM+P0eQZX32b8Gy/cAkxktpzB0hVPnvLDAqUGA2k7e4MJz7V4jYpNqeWUMqElKSAgn/GYwra7U2YpA/eZWSPpWIL2pwy4oQ2+bRaSzlt6wyB4aTLG1dHRFl+kYK3dN3XDdjY2Fx+xQX809eeWtmqBWy5khbQ2Fx0ovK6f0mSbtJRMrLioBYQ/2YQXeR5HQH8CjLZHJ8XeY4BjJ0D+W0yRim+uD7d3CqCUlR2BVDi0MevVMnvwefKQD9cJMOJSsHdGP8Vm/PMpZ5tS4JSTULVkBHfzpC/2D7AI4jbAxUO9j7kChaRY+te+6mYLJGkUtgMDOrTNTaOEAKjeO/ lukecousins@Lukes-iMac.local';
$fingerprint = violuke\RsaSshKeyFingerprint\FingerprintGenerator::getFingerprint($key);
echo $fingerprint;
```

Outputs:
```
74:e7:80:bf:89:11:31:55:f7:4d:78:86:0d:fd:13:f5
```

## Usage (SHA256 fingerprint)
```php
$key = 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDHbry1PSM+P0eQZX32b8Gy/cAkxktpzB0hVPnvLDAqUGA2k7e4MJz7V4jYpNqeWUMqElKSAgn/GYwra7U2YpA/eZWSPpWIL2pwy4oQ2+bRaSzlt6wyB4aTLG1dHRFl+kYK3dN3XDdjY2Fx+xQX809eeWtmqBWy5khbQ2Fx0ovK6f0mSbtJRMrLioBYQ/2YQXeR5HQH8CjLZHJ8XeY4BjJ0D+W0yRim+uD7d3CqCUlR2BVDi0MevVMnvwefKQD9cJMOJSsHdGP8Vm/PMpZ5tS4JSTULVkBHfzpC/2D7AI4jbAxUO9j7kChaRY+te+6mYLJGkUtgMDOrTNTaOEAKjeO/ lukecousins@Lukes-iMac.local';
$fingerprint = violuke\RsaSshKeyFingerprint\FingerprintGenerator::getFingerprint($key, 'sha256');
echo $fingerprint;
```

Outputs:
```
6EbRDmqVEmgAD6FOXQuIiG8uUSteIDKZzj2bgZ+88V0=
```

## Testing

```bash
$ ./vendor/bin/phpunit tests
```
