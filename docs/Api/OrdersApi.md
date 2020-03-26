# Swagger\Client\OrdersApi

All URIs are relative to *https://api-beta.ingrammicro.com:443*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postOrderCreateV40Vse0**](OrdersApi.md#postordercreatev40vse0) | **POST** /OrderCreate_v4_0_vse0 | Create a New Order
[**postOrderDeleteV40Vs0**](OrdersApi.md#postorderdeletev40vs0) | **POST** /OrderDelete_v4_0_vs0 | Delete an Order
[**postOrderDetailsV40Vse0**](OrdersApi.md#postorderdetailsv40vse0) | **POST** /OrderDetails_v4_0_vse0 | Get Order Details

# **postOrderCreateV40Vse0**
> \Swagger\Client\Model\OrderResponse postOrderCreateV40Vse0($body)

Create a New Order

The order create transaction is a real-time transaction that allows customers to place standard product and direct ship (licensing and warranties) orders with Ingram Micro using API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderCreateRequest1(); // \Swagger\Client\Model\OrderCreateRequest1 | 

try {
    $result = $apiInstance->postOrderCreateV40Vse0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postOrderCreateV40Vse0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderCreateRequest1**](../Model/OrderCreateRequest1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[application](../../README.md#application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrderDeleteV40Vs0**
> \Swagger\Client\Model\OrderDeleteResponse1 postOrderDeleteV40Vs0($body)

Delete an Order

A real-time request to delete a previously accepted order must be submitted before the order is released to Ingram Micro’s warehouse. After release the order is no longer eligible for deletion. Order delete transaction submitted after the order is released will be rejected and will not be applied. *Direct ship orders cannot be deleted. Contact your sales rep for assistance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderDeleteRequest2(); // \Swagger\Client\Model\OrderDeleteRequest2 | 

try {
    $result = $apiInstance->postOrderDeleteV40Vs0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postOrderDeleteV40Vs0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderDeleteRequest2**](../Model/OrderDeleteRequest2.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderDeleteResponse1**](../Model/OrderDeleteResponse1.md)

### Authorization

[application](../../README.md#application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrderDetailsV40Vse0**
> \Swagger\Client\Model\OrderDEtailResponse postOrderDetailsV40Vse0($body)

Get Order Details

A real-time request that allows the customer to query Ingram Micro for detailed information for a specific open or shipped order. Orders are searched using Ingram Micro Sales Order Number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OrderDeleteRequest1(); // \Swagger\Client\Model\OrderDeleteRequest1 | 

try {
    $result = $apiInstance->postOrderDetailsV40Vse0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postOrderDetailsV40Vse0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OrderDeleteRequest1**](../Model/OrderDeleteRequest1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OrderDEtailResponse**](../Model/OrderDEtailResponse.md)

### Authorization

[application](../../README.md#application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

