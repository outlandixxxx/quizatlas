<?php

namespace App\Services\ConcoursDiscovery;

use RuntimeException;

class PublicAddressResolver
{
    public function resolve(string $host): string
    {
        return $this->validateAddresses(gethostbynamel($host) ?: []);
    }

    public function validateAddresses(array $addresses): string
    {
        if (! $addresses) {
            throw new RuntimeException('dns_unavailable');
        }
        foreach ($addresses as $address) {
            if (! filter_var($address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                || str_starts_with($address, '169.254.') || str_starts_with($address, '100.64.')
                || (ip2long($address) >= ip2long('100.64.0.0') && ip2long($address) <= ip2long('100.127.255.255'))) {
                throw new RuntimeException('unsafe_dns_address');
            }
        }

        return $addresses[0];
    }
}
