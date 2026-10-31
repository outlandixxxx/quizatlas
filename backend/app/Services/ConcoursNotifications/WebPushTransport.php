<?php

namespace App\Services\ConcoursNotifications;

use App\Models\ConcoursPushSubscription;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use GuzzleHttp\Client;
use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;
use Psr\Http\Client\ClientInterface;

class WebPushTransport
{
    public function __construct(private PushEndpoint $endpoints, private PublicAddressResolver $resolver) {}

    // A single bounded attempt. A failed browser channel never affects the in-app bell.
    public function send(ConcoursPushSubscription $device, array $payload): string
    {
        $host = $this->endpoints->validate($device->endpoint);
        $address = $this->resolver->resolve($host);
        $client = $this->client($host, $address);
        $webPush = new WebPush(['VAPID' => config('concours_notifications.vapid')], ['TTL' => 60, 'urgency' => 'normal'], $client, logger: app('log'));
        $report = $webPush->sendOneNotification(Subscription::create(['endpoint' => $device->endpoint, 'keys' => $device->keys, 'contentEncoding' => 'aes128gcm']),
            json_encode($payload, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE), ['topic' => substr(hash('sha256', $payload['tag']), 0, 32)]);

        return $report->isSuccess() ? 'sent' : ($report->isSubscriptionExpired() ? 'expired' : 'failed');
    }

    protected function client(string $host, string $address): ClientInterface
    {
        return new Client(['connect_timeout' => 5, 'timeout' => 10, 'allow_redirects' => false, 'proxy' => '',
            'curl' => [CURLOPT_RESOLVE => ["{$host}:443:{$address}"], CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4]]);

    }
}
