<?php

declare(strict_types=1);

namespace Itineris\WpForceLowercaseUrls;

final class Plugin
{
    /**
     * @var string
     */
    protected string $path;

    /**
     * @var string|null
     */
    protected ?string $queryString;

    protected const REDIRECT_STATUS_CODE = 301;

    protected const REDIRECT_BY = 'wp-force-lowercase-urls';

    public static function run(): void
    {
        $instance = new self();

        add_action('init', [$instance, 'forceLowercaseUrls']);
    }

    public function __construct()
    {
        $this->setUrl();
    }

    protected function setUrl(): void
    {
        $pathWithQueryString = add_query_arg(null, null);
        $parts = explode('?', $pathWithQueryString);
        $this->path = $parts[0];
        $this->queryString = $parts[1] ?? null;
    }

    /**
     * If URL contains a period, assume it is a file request.
     */
    protected function isFile(): bool
    {
        return (bool) preg_match('/[.]/', $this->path);
    }

    protected function urlContainsUppercaseCharacter(): bool
    {
        return (bool) preg_match('/[A-Z]/', $this->path);
    }

    protected function getUrlAsLowercase(): string
    {
        $path = strtolower($this->path);

        return trim("{$path}?{$this->queryString}", '?');
    }

    public function forceLowercaseUrls(): void
    {
        if ('/' === $this->path) {
            return;
        }

        if ($this->isFile()) {
            return;
        }

        if (! $this->urlContainsUppercaseCharacter()) {
            return;
        }

        $lowercaseUrl = $this->getUrlAsLowercase();
        if ($this->path === $lowercaseUrl) {
            return;
        }

        wp_safe_redirect($lowercaseUrl, self::REDIRECT_STATUS_CODE, self::REDIRECT_BY);
    }
}
