<?php

namespace App\Http\Controllers;

use App\Models\BlogAsk;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        /*
         * Use the URL as the array key so every public URL
         * appears only once in the sitemap.
         */
        $urls = [];

        // Static public pages
        $urls['https://maroquiz.com/'] = [
            'loc' => 'https://maroquiz.com/',
        ];

        foreach ([
            '/about',
            '/faq',
            '/help',
            '/terms',
            '/privacy',
            '/blog',
        ] as $path) {
            $loc = 'https://maroquiz.com' . $path;

            $urls[$loc] = [
                'loc' => $loc,
            ];
        }

        // Active public majors
        Major::query()
            ->where('is_active', true)
            ->whereNotNull('slug')
            ->orderBy('id')
            ->get(['slug', 'updated_at'])
            ->each(function (Major $major) use (&$urls) {
                $loc = 'https://maroquiz.com/trial/major/'
                    . rawurlencode($major->slug);

                $urls[$loc] = [
                    'loc' => $loc,
                    'lastmod' => $major->updated_at?->toAtomString(),
                ];
            });

        // Active public subjects
        Subject::query()
            ->where('is_active', true)
            ->whereNotNull('slug')
            ->orderBy('id')
            ->get(['slug', 'updated_at'])
            ->each(function (Subject $subject) use (&$urls) {
                $loc = 'https://maroquiz.com/trial/subject/'
                    . rawurlencode($subject->slug);

                /*
                 * Because multiple Subject records can have the
                 * same slug, using $loc as the key prevents duplicates.
                 */
                if (!isset($urls[$loc])) {
                    $urls[$loc] = [
                        'loc' => $loc,
                        'lastmod' => $subject->updated_at?->toAtomString(),
                    ];
                }
            });

        // Public blog questions
        BlogAsk::query()
            ->orderBy('id')
            ->get(['id', 'updated_at'])
            ->each(function (BlogAsk $ask) use (&$urls) {
                $loc = 'https://maroquiz.com/blog/' . $ask->id;

                $urls[$loc] = [
                    'loc' => $loc,
                    'lastmod' => $ask->updated_at?->toAtomString(),
                ];
            });

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . e($url['loc']) . '</loc>';

            if (!empty($url['lastmod'])) {
                $xml .= '<lastmod>' . e($url['lastmod']) . '</lastmod>';
            }

            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}
