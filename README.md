# Saatchi Art Coding Standard Sniffs

Some additional sniffs for use with [phpcs](https://github.com/PHPCSStandards/PHP_CodeSniffer/).

## Installation

Add the following to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:saatchiart/phpcs.git"
        },
    ]
}
```

Then run the following command:

```sh
composer require --dev saatchiart/phpcs
```

This will install the SaatchiArtCodingStandard sniffs into your project. You can verify that the sniffs are installed by running:

```sh
./vendor/bin/phpcs --standard=SaatchiArtCodingStandard -e
```
