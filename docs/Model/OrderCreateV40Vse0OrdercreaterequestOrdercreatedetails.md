# OrderCreateV40Vse0OrdercreaterequestOrdercreatedetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerponumber** | **string** | The customers unique Purchase Order number | 
**ordertype** | **string** | Order Type tells our system if this is standard order or a direct ship order • Currently Ingram Micro’s system has 2 types of sales orders.   o Standard orders:  Orders that contain skus that ship from Ingram Micro’s warehouse locations. o Direct ship orders:  Orders for skus, such as licenses, warranties and custom-built hardware skus that ship directly from our vendors.  We identify SKUs that must be processed separately with a class code of “X”.  The class code is found in the daily FTP price file, If Class Code is not included in your FTP Price file, you can request that it be added by contacting 1-800-616-4665. | 
**enduserordernumber** | **string** | Customers End-user PO number | [optional] 
**billtosuffix** | **string** | Designates flooring acct to be used | [optional] 
**shiptosuffix** | **string** | Applies to customers with multiple ship to locations (store locations) | [optional] 
**shiptoaddress** | [**\Swagger\Client\Model\OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsShiptoaddress**](OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsShiptoaddress.md) |  | 
**carriercode** | **string** | A customer can dictate what carrier to use for their shipment (Ingram 2-digit carrier code is required). Our recommendation is leave this field blank which will allow Ingram Micro to choose the best carrier to gain the best freight rates. | [optional] 
**thirdpartyfrieghtaccountnumber** | **string** | Refers to a third-party freight account number for charging freight against. The account number should be passed within this field and the appropriate carrier code should be supplied within the carrier code tags. Prior to sending your request containing the third-party account number, it must be first entered into our system. Your Ingram Micro Sales Representative can action this for you. If submitted within an order without this preapproval the third-party account number will be ignored.  Note: USA partners- For FedEx Air only (carrier codes F1, FO, F2, FG.), please send three leading zeros before your third-party freight account number (i.e.: 000999999999.) | [optional] 
**specialbidnumber** | **string** | This is the special quote number given to a customer either by a vendor for special pricing or by Ingram Micro. To receive the special pricing assigned to this number it must be included on the order. | [optional] 
**lines** | [**\Swagger\Client\Model\OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsLines[]**](OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsLines.md) |  | 
**extendedspecs** | [**\Swagger\Client\Model\OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsExtendedspecs**](OrderCreateV40Vse0OrdercreaterequestOrdercreatedetailsExtendedspecs.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

