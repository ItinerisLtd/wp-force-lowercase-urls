# WP Force Lowercase URLs

[![CircleCI](https://circleci.com/gh/ItinerisLtd/wp-force-lowercase-urls.svg?style=svg)](https://circleci.com/gh/ItinerisLtd/wp-force-lowercase-urls)
[![Packagist Version](https://img.shields.io/packagist/v/itinerisltd/wp-force-lowercase-urls.svg?label=release&style=flat-square)](https://packagist.org/packages/itinerisltd/wp-force-lowercase-urls)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itinerisltd/wp-force-lowercase-urls.svg?style=flat-square)](https://packagist.org/packages/itinerisltd/wp-force-lowercase-urls)
[![Packagist Downloads](https://img.shields.io/packagist/dt/itinerisltd/wp-force-lowercase-urls.svg?label=packagist%20downloads&style=flat-square)](https://packagist.org/packages/itinerisltd/wp-force-lowercase-urls/stats)
[![GitHub License](https://img.shields.io/github/license/itinerisltd/wp-force-lowercase-urls.svg?style=flat-square)](https://github.com/ItinerisLtd/wp-force-lowercase-urls/blob/master/LICENSE)
[![Hire Itineris](https://img.shields.io/badge/Hire-Itineris-ff69b4.svg?style=flat-square)](https://www.itineris.co.uk/contact/)
[![Twitter Follow @itineris_ltd](https://img.shields.io/twitter/follow/itineris_ltd?style=flat-square&color=1da1f2)](https://twitter.com/itineris_ltd)
[![Twitter Follow @_codepuncher](https://img.shields.io/twitter/follow/_codepuncher?style=flat-square&color=1da1f2)](https://twitter.com/_codepuncher)

Force uppercase URLs to lowercase.

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->

- [Goal](#goal)
- [Features](#features)
- [Minimum Requirements](#minimum-requirements)
- [Installation](#installation)
  - [Composer (Recommended)](#composer-recommended)
  - [Build from Source (Not Recommended)](#build-from-source-not-recommended)
- [Common Issues](#common-issues)
- [FAQ](#faq)
  - [Will you add support for older PHP versions?](#will-you-add-support-for-older-php-versions)
  - [It looks awesome. Where can I find more goodies like this?](#it-looks-awesome-where-can-i-find-more-goodies-like-this)
  - [Where can I give :star::star::star::star::star: reviews?](#where-can-i-give-starstarstarstarstar-reviews)
- [Developing](#developing)
  - [Testing](#testing)
- [Feedback](#feedback)
- [Change Log](#change-log)
- [Security](#security)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Goal

Prevent issues caused by pages existing on URLs of various casing. 

## Features

- Forces URLs to lowercase
- Ignores file URLs

[Pull requests](https://github.com/ItinerisLtd/wp-force-lowercase-urls) are welcomed.

## Minimum Requirements

- PHP v7.4
- WordPress v5.8

## Installation

### Composer (Recommended)

```bash
composer require itinerisltd/wp-force-lowercase-urls
```

### Build from Source (Not Recommended)

```bash
# Make sure you use the same PHP version as remote servers.
# Building inside docker images is recommended.
php -v

# Checkout source code
git clone https://github.com/ItinerisLtd/wp-force-lowercase-urls.git
cd wp-force-lowercase-urls
git checkout <the-tag-or-the-branch-or-the-commit>

# Build the zip file
composer release:build
```

Then, install `release/wp-force-lowercase-urls.zip` [as usual](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Common Issues

N/A

## FAQ

### Will you add support for older PHP versions?

Never! This plugin will only work on [actively supported PHP versions](https://secure.php.net/supported-versions.php).

Don't use it on **end of life** or **security fixes only** PHP versions.

### It looks awesome. Where can I find more goodies like this?

- Articles on [Itineris' blog](https://www.itineris.co.uk/blog/)
- More projects on [Itineris' GitHub profile](https://github.com/itinerisltd)
- More plugins on [Itineris](https://profiles.wordpress.org/itinerisltd/#content-plugins) and [_codepuncher](https://profiles.wordpress.org/codepuncher/#content-plugins) wp.org profiles
- Follow [@itineris_ltd](https://twitter.com/itineris_ltd) and [@_codepuncher](https://twitter.com/_codepuncher) on Twitter
- Hire [Itineris](https://www.itineris.co.uk/services/) to build your next awesome site

### Where can I give :star::star::star::star::star: reviews?

Thanks! Glad you like it. It's important to let my boss knows somebody is using this project. Please consider:

- leave a 5-star review on [wordpress.org](https://wordpress.org/support/plugin/wp-force-lowercase-urls/reviews/)
- tweet something good with mentioning [@itineris_ltd](https://twitter.com/itineris_ltd) and [@_codepuncher](https://twitter.com/_codepuncher)
- :star: star this [Github repo](https://github.com/ItinerisLtd/wp-force-lowercase-urls)
- :eyes: watch this [Github repo](https://github.com/ItinerisLtd/wp-force-lowercase-urls)
- write blog posts
- submit [pull requests](https://github.com/ItinerisLtd/wp-force-lowercase-urls)
- [hire Itineris](https://www.itineris.co.uk/services/)

## Developing

### Testing

```bash
composer style:check
```

Pull requests without tests will not be accepted!

## Feedback

**Please provide feedback!** We want to make this library useful in as many projects as possible.
Please submit an [issue](https://github.com/ItinerisLtd/wp-force-lowercase-urls/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Change Log

Please see [CHANGELOG](./CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email [dev@itineris.co.uk](mailto:dev@itineris.co.uk) instead of using the issue tracker.

## Credits

[wp-force-lowercase-urls](https://github.com/ItinerisLtd/wp-force-lowercase-urls) is a [Itineris Limited](https://www.itineris.co.uk/) project created by [Lee Hanbury-Pickett](https://github.com/codepuncher).

Full list of contributors can be found [here](https://github.com/ItinerisLtd/wp-force-lowercase-urls/graphs/contributors).

## License

[WP Force Lowercase URLs](https://github.com/ItinerisLtd/wp-force-lowercase-urls) is released under the [MIT License](https://opensource.org/licenses/MIT).
