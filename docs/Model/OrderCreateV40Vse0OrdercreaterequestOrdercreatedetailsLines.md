# OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsLines

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**linetype** | **string** | Values are “P” for product or “C” for comments. This can be left blank when ordering product and a “P” will be assumed.  If you are adding a COMMENT, then this value must be “C”.  Extended spec for comments:   Attribute Name: “commenttext” Attribute Value: “thank you for the order”  To make the comment invisible to the packing slip place “///” in front of the comment in the Attribute Value field.  This will allow the Ingram sales rep to see the comment on the order but will not forward on to shipping documents. | [optional] 
**linenumber** | **string** | This is used when a partner wants to use their own line number. Can be left blank. | [optional] 
**ingrampartnumber** | **string** | This is the Ingram sku number to be used for placing an order. | 
**quantity** | **string** | The quantity that is to be ordered. | 
**vendorpartnumber** | **string** | The Manufacturer part number. Can be used to place an order instead of the Ingram sku.  If there are multiple Ingram part numbers to one vendor part number.  The order will be rejected. | [optional] 
**customerpartnumber** | **string** | This is the Customers unique part numbers that must be crossed referenced to the Ingram Micro Sku before it can be used.  Please contact your sales rep for additional information on how to set this up. | [optional] 
**upc_code** | **string** |  | [optional] 
**warehouseid** | **string** |  | [optional] 
**unitprice** | **string** | This is a requested price from the customer. Pre-approval is necessary before using this feature.  A methodology called price variance to manage requested pricing needs to be setup in advance by your sales rep.  If unit price is provided without this advanced setup the unit price will be ignored and standard Ingram Micro pricing will apply. | [optional] 
**enduser** | [**\Swagger\Client\Model\OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsEnduser**](OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsEnduser.md) |  | [optional] 
**productextendedspecs** | [**\Swagger\Client\Model\OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsProductextendedspecs**](OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsProductextendedspecs.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

