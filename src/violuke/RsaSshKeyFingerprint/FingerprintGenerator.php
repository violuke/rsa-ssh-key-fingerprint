<?php

namespace violuke\RsaSshKeyFingerprint;

class FingerprintGenerator {
    public static function getFingerprint($sshPublicKey, $hashAlgorithm = 'md5'){
        if (substr($sshPublicKey, 0, 8) != 'ssh-rsa '){
            throw new InvalidInputException('All keys must start with "ssh-rsa ".');
        }


        $content = explode(' ', $sshPublicKey, 3);
        switch ($hashAlgorithm) {
            case 'md5':
                $fingerprint = join(':', str_split(md5(base64_decode($content[1])), 2));
                break;
            case 'sha256':
                $fingerprint = base64_encode(hash('sha256', base64_decode($content[1]), true));
                break;
            default:
                throw new InvalidInputException('Valid algorithms are md5 and sha256');
        }

        return $fingerprint;
    }
}