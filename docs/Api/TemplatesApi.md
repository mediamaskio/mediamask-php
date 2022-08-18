# Mediamask\TemplatesApi

All URIs are relative to https://mediamask.io/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**templates()**](TemplatesApi.md#templates) | **GET** /templates | Get all tempaltes


## `templates()`

```php
templates(): \Mediamask\Model\Templates200Response
```

Get all tempaltes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mediamask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mediamask\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->templates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Mediamask\Model\Templates200Response**](../Model/Templates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
