<?php

namespace App\Services\ConcoursDiscovery;

use RuntimeException;

class FeedParser
{
    public function parse(string $body, string $method): array
    {
        if (strlen($body) > config('concours_discovery.max_bytes')) {
            throw new RuntimeException('feed_too_large');
        }
        if ($method === 'json_feed') {
            $feed = json_decode($body, true, 32, JSON_THROW_ON_ERROR);
            if (! in_array($feed['version'] ?? null, ['https://jsonfeed.org/version/1', 'https://jsonfeed.org/version/1.1'], true) || ! is_array($feed['items'] ?? null)) {
                throw new RuntimeException('invalid_json_feed');
            }
            $items = array_map(function ($item) {
                $meta = $item['_maroquiz'] ?? [];

                return ['source_identifier' => isset($item['id']) ? (string) $item['id'] : null,
                    'title' => $item['title'] ?? null, 'official_url' => $item['url'] ?? null,
                    'publication_date' => $this->date($item['date_published'] ?? null),
                    'application_deadline' => $this->date($meta['application_deadline'] ?? null),
                    'institution' => $meta['institution'] ?? null, 'session_year' => $meta['session_year'] ?? null,
                    'grade' => $meta['grade'] ?? null, 'specialty' => $meta['specialty'] ?? null];
            }, $feed['items']);
        } elseif ($method === 'rss_atom') {
            // Reject DTDs/entities outright. Never expand or fetch external XML resources.
            if (preg_match('/<!DOCTYPE|<!ENTITY/i', $body)) {
                throw new RuntimeException('xml_entities_forbidden');
            }
            $old = libxml_use_internal_errors(true);
            try {
                $xml = simplexml_load_string($body, 'SimpleXMLElement', LIBXML_NONET);
                if ($xml === false) {
                    throw new RuntimeException('invalid_xml_feed');
                }
                $items = [];
                if ($xml->getName() === 'rss') {
                    foreach ($xml->channel->item as $item) {
                        $items[] = ['source_identifier' => (string) $item->guid ?: null,
                            'title' => (string) $item->title, 'official_url' => (string) $item->link,
                            'publication_date' => $this->date((string) $item->pubDate, true)];
                    }
                } elseif ($xml->getName() === 'feed') {
                    $atom = $xml->children('http://www.w3.org/2005/Atom');
                    foreach ($atom->entry as $item) {
                        $url = '';
                        foreach ($item->link as $link) {
                            if (! (string) $link['rel'] || (string) $link['rel'] === 'alternate') {
                                $url = (string) $link['href'];
                                break;
                            }
                        }
                        $items[] = ['source_identifier' => (string) $item->id ?: null,
                            'title' => (string) $item->title, 'official_url' => $url,
                            'publication_date' => $this->date((string) $item->published)];
                    }
                } else {
                    throw new RuntimeException('unsupported_xml_feed');
                }
            } finally {
                libxml_clear_errors();
                libxml_use_internal_errors($old);
            }
        } else {
            throw new RuntimeException('unsupported_collection_method');
        }
        if (count($items) > config('concours_discovery.max_items')) {
            throw new RuntimeException('too_many_feed_items');
        }

        return $items;
    }

    private function date(mixed $value, bool $rfc = false): ?string
    {
        if (! is_string($value) || $value === '') {
            return null;
        }
        if ($rfc) {
            try {
                $date = \DateTimeImmutable::createFromFormat(DATE_RSS, $value);

                return $date && ! \DateTimeImmutable::getLastErrors() ? $date->format('Y-m-d') : null;
            } catch (\Throwable) {
                return null;
            }
        }
        if (! preg_match('/^(\d{4})-(\d{2})-(\d{2})(?:$|T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$)/', $value, $m)
            || ! checkdate((int) $m[2], (int) $m[3], (int) $m[1])) {
            return null;
        }

        return substr($value, 0, 10);
    }
}
