# Mediamask\MediamaskApi

All URIs are relative to https://mediamask.io/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**renderImage()**](MediamaskApi.md#renderImage) | **POST** /image | Render a new image
[**templates()**](MediamaskApi.md#templates) | **GET** /templates | Get all tempaltes


## `renderImage()`

```php
renderImage($new_image): \SplFileObject
```

Render a new image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Mediamask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Mediamask\Api\MediamaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_image = {"template":"3fa85f64-5717-4562-b3fc-2c963f66afa6","placeholders":[{"name":"text placeholder name","text":"an example text"},{"name":"image placeholder name","image":"https://example.com/example.jpg"}]}; // \Mediamask\Model\NewImage | Provide the template and placeholders values that should be rendered in the image

try {
    $result = $apiInstance->renderImage($new_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediamaskApi->renderImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_image** | [**\Mediamask\Model\NewImage**](../Model/NewImage.md)| Provide the template and placeholders values that should be rendered in the image |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Mediamask\Api\MediamaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->templates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediamaskApi->templates: ', $e->getMessage(), PHP_EOL;
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
