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
     * @throws \Spatie\Csp\Exceptions\InvalidValueSet
     */
    public function configure()
    {
        $cdn = [
            'cdn.jsdelivr.net',
            'cdnjs.cloudflare.com',
        ];
        $style = [
            Keyword::SELF,
            Keyword::UNSAFE_INLINE,
            'fonts.googleapis.com',
        ];
        $this
            ->addDirective(Directive::BASE, Keyword::SELF)
            ->addDirective(Directive::CONNECT, Keyword::SELF)
            ->addDirective(Directive::DEFAULT, Keyword::SELF)
            ->addDirective(Directive::FONT, array_merge([Keyword::SELF, 'data:', 'fonts.googleapis.com', 'fonts.gstatic.com'], $cdn))
            ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
            ->addDirective(Directive::IMG, array_merge([Keyword::SELF, 'data:'], $cdn))
            ->addDirective(Directive::MEDIA, Keyword::SELF)
            ->addDirective(Directive::OBJECT, Keyword::NONE)
            ->addDirective(Directive::SCRIPT, array_merge([Keyword::SELF, Keyword::UNSAFE_INLINE, Keyword::UNSAFE_EVAL, 'www.google.com', 'pagead2.googlesyndication.com', 'adservice.google.com', 'adservice.google.it'], $cdn))
            // Directive::STYLE and Directive::STYLE_ELEM must be the same!!
            ->addDirective(Directive::STYLE, array_merge($style, $cdn))
            ->addDirective(Directive::STYLE_ELEM, array_merge($style, $cdn));
    }
}
