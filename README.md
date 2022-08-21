# Mediamask PHP API Client for dynamic image generation

This PHP Client supports the [Mediamask](https://mediamask.io) POST API to generate dynamic images.
You can find more information about the usage in our docs: [https://docs.mediamask.io/docs/post-api](https://docs.mediamask.io/docs/post-api).

## Installation & Usage

### Requirements

PHP 7.4 and later.

### Install via Composer

Install the package into your project by using with [Composer](https://getcomposer.org/) :

```
composer require mediamaskio/mediamask-php
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/mediamask-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = Mediamask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mediamask\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

// \OpenAPI\Client\Model\NewImage | Provide the template and placeholders values that should be rendered in the image
$new_image = {
    "template":"3fa85f64-5717-4562-b3fc-2c963f66afa6",
    "placeholders": [
        {
            "name":"text placeholder name",
            "text":"an example text"
        },
        {
            "name":"image placeholder name",
            "image":"https://example.com/example.jpg"
            }
        ]
    }; 
try {
    $result = $apiInstance->renderImage($new_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->renderImage: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://mediamask.io/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ImageApi* | [**renderImage**](docs/Api/ImageApi.md#renderimage) | **POST** /image | Render a new image
*TemplatesApi* | [**templates**](docs/Api/TemplatesApi.md#templates) | **GET** /templates | Get all tempaltes

## Models

- [DynamicLayer](docs/Model/DynamicLayer.md)
- [Error](docs/Model/Error.md)
- [ImagePlaceholder](docs/Model/ImagePlaceholder.md)
- [NewImage](docs/Model/NewImage.md)
- [NewImagePlaceholdersInner](docs/Model/NewImagePlaceholdersInner.md)
- [Template](docs/Model/Template.md)
- [Templates200Response](docs/Model/Templates200Response.md)
- [TextPlaceholder](docs/Model/TextPlaceholder.md)
- [ValidationError](docs/Model/ValidationError.md)

## Authorization

### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
