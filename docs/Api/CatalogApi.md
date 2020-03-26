# Swagger\Client\CatalogApi

All URIs are relative to *https://api-beta.ingrammicro.com:443*

Method | HTTP request | Description
------------- | ------------- | -------------
[**multiSKUPriceAndStock**](CatalogApi.md#multiskupriceandstock) | **POST** /MultiSKUPriceAndStockAPI_v4_0_Service_vs0 | Product availability for upto 50 SKUs
[**productSearch**](CatalogApi.md#productsearch) | **POST** /ProductSearch_v4_0_vse0 | Real-time product search

# **multiSKUPriceAndStock**
> \Swagger\Client\Model\MultiSKUPriceAndStockResponse1 multiSKUPriceAndStock($body)

Product availability for upto 50 SKUs

Find price and availability of up to 50 SKUs in a single request. As you increase the number of items in the request response time will be extended. This transaction must not be used as a continuous cyclical call to populate availability and pricing for your full catalog. Customers that perform this activity will lose access to price and availability.  Ingram can provide a Price catalog file and an Inventory file in flat file format, which can be obtained through FTP download. Please contact 1800-616-4665 or Electronic.Services@ingrammicro.com for more information on these files.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MultiSKUPriceAndStockRequest1(); // \Swagger\Client\Model\MultiSKUPriceAndStockRequest1 | 

try {
    $result = $apiInstance->multiSKUPriceAndStock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->multiSKUPriceAndStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MultiSKUPriceAndStockRequest1**](../Model/MultiSKUPriceAndStockRequest1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MultiSKUPriceAndStockResponse1**](../Model/MultiSKUPriceAndStockResponse1.md)

### Authorization

[application](../../README.md#application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSearch**
> \Swagger\Client\Model\ProductSearchResponse1 productSearch($body)

Real-time product search

A real time search that provides the Ingram Micro part number using the manufacturer part number.  This API is helpful to eliminate any errors when a manufactuer has the same part number and Ingram Micro has had to create multiple sku numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ProductSearchRequest1(); // \Swagger\Client\Model\ProductSearchRequest1 | 

try {
    $result = $apiInstance->productSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->productSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductSearchRequest1**](../Model/ProductSearchRequest1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSearchResponse1**](../Model/ProductSearchResponse1.md)

### Authorization

[application](../../README.md#application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

