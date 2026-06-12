# Drupal Installer

A simple command-line tool for creating Drupal projects quickly using Composer.

## Features

* Create a new Drupal project with a single command.
* Install the latest stable Drupal release.
* Install a specific Drupal version.
* Lightweight and easy to use.
* Distributed through Composer and Packagist.

## Requirements

* PHP 8.1 or higher
* Composer

## Installation

Install the package globally:

```bash
composer global require alfwasim/drupal-installer
```

Make sure Composer's global bin directory is available in your system PATH.

## Usage

Create a project using the latest stable Drupal release:

```bash
drupal new my-site
```

Create a project using a specific Drupal version:

```bash
drupal new my-site 11.2.5
```

## Examples

```bash
drupal new blog
drupal new company-website
drupal new news-portal 11.2.5
```

## License

This project is open-sourced under the MIT License.

## Author

**Wasim Ansari**

GitHub: https://github.com/meWasim
