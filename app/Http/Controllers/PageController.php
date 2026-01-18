<?php

namespace App\Http\Controllers;

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
            'whyUs' => $this->content['why_us'],
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
}
