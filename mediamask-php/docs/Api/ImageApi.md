# OpenAPI\Client\ImageApi

All URIs are relative to https://mediamask.io/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**renderImage()**](ImageApi.md#renderImage) | **POST** /image | Render a new image


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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_image = {"template":"3fa85f64-5717-4562-b3fc-2c963f66afa6","placeholders":[{"name":"text placeholder name","text":"an example text"},{"name":"image placeholder name","image":"https://example.com/example.jpg"}]}; // \OpenAPI\Client\Model\NewImage | Provide the template and placeholders values that should be rendered in the image

try {
    $result = $apiInstance->renderImage($new_image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->renderImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_image** | [**\OpenAPI\Client\Model\NewImage**](../Model/NewImage.md)| Provide the template and placeholders values that should be rendered in the image |

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
