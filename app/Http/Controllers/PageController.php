<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;

class PageController extends Controller
{
    private array $content;

    public function __construct()
    {
        $this->content = config('learningcube');
    }

    public function home(): View
    {
        return view('pages.home', [
            'programs' => $this->content['programs'],
            'strengths' => $this->content['strengths'],
            'subjects' => $this->content['subjects'],
            'supportSteps' => $this->content['support_steps'],
            'results' => $this->content['results'],
            'ctaButtons' => $this->content['cta'],
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function programs(): View
    {
        return view('pages.programs', [
            'programs' => $this->content['programs'],
        ]);
    }

    public function results(): View
    {
        return view('pages.results', [
            'results' => $this->content['results'],
        ]);
    }

    public function resources(): View
    {
        return view('pages.resources', [
            'resources' => $this->content['resources'],
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'contact' => $this->content['contact'],
        ]);
    }

    /**
     * XML sitemap for https://learning-cube.com (uses APP_URL from .env).
     */
    public function sitemap(): Response
    {
        $base = rtrim(config('app.url'), '/');
        $lastmod = now()->format('Y-m-d');

        $urls = [
            ['path' => '', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['path' => '/about', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['path' => '/programs', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['path' => '/results', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['path' => '/resources', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['path' => '/contact', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($urls as $u) {
            $loc = $base . ($u['path'] ?: '/');
            $xml .= "  <url>\n";
            $xml .= "    <loc>" . e($loc) . "</loc>\n";
            $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
            $xml .= "    <changefreq>{$u['changefreq']}</changefreq>\n";
            $xml .= "    <priority>{$u['priority']}</priority>\n";
            $xml .= "  </url>\n";
        }
        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }
}
