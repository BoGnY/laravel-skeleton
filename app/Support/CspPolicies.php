<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Policy;

class CspPolicies extends Policy
{
    /**
     * Configure CSP policies.
     *
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    public function configure()
    {
        $style = [Keyword::SELF, Keyword::UNSAFE_INLINE, 'fonts.googleapis.com'];
        $this
            ->addDirective(Directive::BASE, Keyword::SELF)
            ->addDirective(Directive::CONNECT, Keyword::SELF)
            ->addDirective(Directive::DEFAULT, Keyword::SELF)
            ->addDirective(Directive::FONT, [Keyword::SELF, 'data:', 'fonts.googleapis.com', 'fonts.gstatic.com'])
            ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
            ->addDirective(Directive::IMG, [Keyword::SELF, 'data:', 'cdn.jsdelivr.net'])
            ->addDirective(Directive::MEDIA, Keyword::SELF)
            ->addDirective(Directive::OBJECT, Keyword::NONE)
            ->addDirective(Directive::SCRIPT, [Keyword::SELF, Keyword::UNSAFE_INLINE, Keyword::UNSAFE_EVAL, 'cdn.jsdelivr.net', 'www.google.com', 'pagead2.googlesyndication.com', 'adservice.google.com', 'adservice.google.it'])
            // Directive::STYLE and Directive::STYLE_ELEM must be the same!!
            ->addDirective(Directive::STYLE, $style)
            ->addDirective(Directive::STYLE_ELEM, $style);
    }
}
