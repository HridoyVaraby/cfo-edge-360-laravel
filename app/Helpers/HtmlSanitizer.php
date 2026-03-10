<?php

namespace App\Helpers;

class HtmlSanitizer
{
    /**
     * Allowed HTML tags for blog content rendered from the rich text editor.
     * Strips all attributes except href/src/alt/class for safe rendering.
     */
    private const ALLOWED_TAGS = [
        'p',
        'br',
        'hr',
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6',
        'strong',
        'b',
        'em',
        'i',
        'u',
        's',
        'del',
        'ins',
        'mark',
        'sub',
        'sup',
        'a',
        'img',
        'ul',
        'ol',
        'li',
        'blockquote',
        'pre',
        'code',
        'table',
        'thead',
        'tbody',
        'tfoot',
        'tr',
        'th',
        'td',
        'div',
        'span',
        'figure',
        'figcaption',
    ];

    public static function clean(?string $html): string
    {
        if (empty($html)) {
            return '';
        }

        $allowedTagString = '<' . implode('><', self::ALLOWED_TAGS) . '>';

        // Strip disallowed tags
        $clean = strip_tags($html, $allowedTagString);

        // Remove all event handler attributes (onclick, onerror, onload, etc.)
        $clean = preg_replace('/\s+on\w+\s*=\s*["\'][^"\']*["\']/i', '', $clean);
        $clean = preg_replace('/\s+on\w+\s*=\s*\S+/i', '', $clean);

        // Remove javascript: protocol from href/src attributes
        $clean = preg_replace('/\b(href|src)\s*=\s*["\']?\s*javascript\s*:/i', '$1="', $clean);

        // Remove data: protocol from src attributes (except data:image for inline images)
        $clean = preg_replace('/\bsrc\s*=\s*["\']?\s*data\s*:(?!image\/)/i', 'src="data:blocked', $clean);

        return $clean;
    }
}
