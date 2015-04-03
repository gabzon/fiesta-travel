# [Sage](https://roots.io/sage/)
[![Build Status](https://travis-ci.org/roots/sage.svg)](https://travis-ci.org/roots/sage)
[![devDependency Status](https://david-dm.org/roots/sage/dev-status.svg)](https://david-dm.org/roots/sage#info=devDependencies)

Sage is a WordPress starter theme based on HTML5 Boilerplate, gulp, Bower, and Bootstrap, that will help you make better themes.

* Source: [https://github.com/roots/sage](https://github.com/roots/sage)
* Homepage: [https://roots.io/sage/](https://roots.io/sage/)
* Documentation: [https://roots.io/sage/docs/](https://roots.io/sage/docs/)
* Twitter: [@rootswp](https://twitter.com/rootswp), [@retlehs](https://twitter.com/retlehs), [@swalkinshaw](https://twitter.com/swalkinshaw), [@Foxaii](https://twitter.com/Foxaii), [@c2foryou](https://twitter.com/c2foryou), [@austinpray](https://twitter.com/austinpray)
* Newsletter: [Subscribe](http://roots.io/subscribe/)
* Forum: [https://discourse.roots.io/](https://discourse.roots.io/)

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

For more installation notes, refer to the [Install gulp and Bower](#install-gulp-and-bower) section in this document.

## Features

* [gulp](http://gulpjs.com/) build script that compiles both Less and Sass, checks for JavaScript errors, optimizes images, and concatenates and minifies files
* [BrowserSync](http://www.browsersync.io/) for keeping multiple browsers and devices synchronized while testing, along with injecting updated CSS and JS into your browser while you're developing
* [Bower](http://bower.io/) for front-end package management
* [asset-builder](https://github.com/austinpray/asset-builder) for the JSON file based asset pipeline
* [Bootstrap](http://getbootstrap.com/)
* [Theme wrapper](https://roots.io/sage/docs/theme-wrapper/)
* [HTML5 Boilerplate](http://html5boilerplate.com/)
  * The latest [jQuery](http://jquery.com/) via Google CDN, with a local fallback
  * The latest [Modernizr](http://modernizr.com/) build for feature detection
  * An optimized Google Analytics snippet
* ARIA roles and microformats
* Cleaner HTML output of navigation menus
* Posts use the [hNews](http://microformats.org/wiki/hnews) microformat
* [Multilingual ready](https://roots.io/wpml/) and over 30 available [community translations](https://github.com/roots/sage-translations)

Install the [Soil](https://github.com/roots/soil) plugin to enable additional features:

* Cleaner output of `wp_head` and enqueued assets
* Root relative URLs
* Nice search (`/search/query/`)

## Installation

Clone the git repo - `git clone https://github.com/roots/sage.git` and then rename the directory to the name of your theme or website.

If you don't use [Bedrock](https://github.com/roots/bedrock), you'll need to add the following to your `wp-config.php` on your development installation:

```php
define('WP_ENV', 'development');
```

## Configuration

Edit `lib/config.php` to enable or disable theme features and to define a Google Analytics ID.

Edit `lib/init.php` to setup navigation menus, post thumbnail sizes, post formats, and sidebars.

## Theme development

Sage uses [gulp](http://gulpjs.com/) as its build system and [Bower](http://bower.io/) to manage front-end packages.

### Install gulp and Bower

Building the theme requires [node.js](http://nodejs.org/download/). We recommend you update to the latest version of npm: `npm install -g npm@latest`.

From the command line:

1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Navigate to the theme directory, then run `npm install`
3. Run `bower install`

You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

To use BrowserSync during `gulp watch` you need update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

## Documentation

Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).

## Contributing

Contributions are welcome from everyone. We have [contributing guidelines](CONTRIBUTING.md) to help you get started.

## Community

Keep track of development and community news.

* Participate on the [Roots Discourse](https://discourse.roots.io/)
* Follow [@rootswp on Twitter](https://twitter.com/rootswp)
* Read and subscribe to the [Roots Blog](https://roots.io/blog/)
* Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)


# [Piklist](https://piklist.com)
Piklist is the developers best friend. A rapid development framework for WordPress that will let you concentrate on the main focus of your plugin or theme, and let Piklist handle everything else.

[Watch the Piklist presentation from WordCamp NYC >] (http://wordpress.tv/2012/09/04/steve-bruner-and-kevin-miller-building-powerful-websites-and-web-applications-with-piklist/)

### Piklist makes it easy to:
* Build Fields for Settings page, Widgets, Custom Post Types, Custom Taxonomies and User Profiles with minimal code.
* Conditionally show fields (or their values), based on Post Status and/or User Role.
* Define Custom Post Statuses
* Relate Post-to-Posts.
* [and more...](https://piklist.com/)

### LEARN MORE
[Piklist User Guide](https://piklist.com/user-guide/)

### Better Custom Post Types
* Powerful Custom Post Types
* Relate Custom Post Types to each other.
* Add your own post statuses.

### Codeless Meta Boxes
* Group fields in a meta box, by placing them all in one file.
* Add a comment block at the top of your file to define the meta box attributes
* Hide/Show based on the post status.
* Hide/Show based on the users capability.
* Sort meta boxes with granular control.
* Lock the box, so users cannot move or hide them.
* Add meta box to a specific Page/Post ID.

### Simple, Groupable Widgets
* Group widgets into one widget to save space, and make finding them easier
* Create one file for your Widget settings, and one for your output... all done!
* Use any Piklist field type in your widget settings page.

### Powerful Fields
Backend, Frontend, Widgets... it all works the same.

### Lots of field types (and more coming soon!):
* text
* textarea
* checkbox
* radio
* select
* post editor
* hidden
* html
* datepicker
* color picker
* add-more

### Choose a content type for your field (You can even mix-n-match on one form)
* post
* post_meta
* comment
* comment_meta
* term
* term_meta
* user
* user_meta
* media
* media_meta

### Mix Field and Content types (i.e. Taxonomies as radio buttons)
* Hide/Show based on another form field.
* Hide/Show based on the post status.
* Hide/Show based on the users capability.
* Hide form fields, and just show field values
