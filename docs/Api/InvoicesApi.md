# Swagger\Client\InvoicesApi

All URIs are relative to *https://api-beta.ingrammicro.com:443*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postInvoiceDetailsV40Vs0**](InvoicesApi.md#postinvoicedetailsv40vs0) | **POST** /InvoiceDetails_v4_0_vs0 | Get Invoice Details

# **postInvoiceDetailsV40Vs0**
> \Swagger\Client\Model\InvoiceDetailResponse1 postInvoiceDetailsV40Vs0($body)

Get Invoice Details

A real-time request that allows the customer to query Ingram Micro for Invoice information for a specific open or shipped order (in the past 9 months). Orders are searched using Ingram Micro Sales Order Number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\InvoiceDetailRequest1(); // \Swagger\Client\Model\InvoiceDetailRequest1 | 

try {
    $result = $apiInstance->postInvoiceDetailsV40Vs0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->postInvoiceDetailsV40Vs0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InvoiceDetailRequest1**](../Model/InvoiceDetailRequest1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InvoiceDetailResponse1**](../Model/InvoiceDetailResponse1.md)

### Authorization

[application](../../README.md#application)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

