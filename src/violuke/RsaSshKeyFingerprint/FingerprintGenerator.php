<?php

namespace violuke\RsaSshKeyFingerprint;

class FingerprintGenerator {
    public static function getFingerprint($sshPublicKey){
        if (substr($sshPublicKey, 0, 8) != 'ssh-rsa '){
            throw new InvalidInputException('All keys must start with "ssh-rsa ".');
        }

        $content = explode(' ', $sshPublicKey, 3);
        $fingerprint = join(':', str_split(md5(base64_decode($content[1])), 2));

        return $fingerprint;
    }
}