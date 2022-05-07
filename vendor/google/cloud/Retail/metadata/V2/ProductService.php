<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/product_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class ProductService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\ImportConfig::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\Product::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�"
,google/cloud/retail/v2/product_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto*google/cloud/retail/v2/import_config.proto$google/cloud/retail/v2/product.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateProductRequest4
parent (	B$�A�A
retail.googleapis.com/Branch5
product (2.google.cloud.retail.v2.ProductB�A

product_id (	B�A"H
GetProductRequest3
name (	B%�A�A
retail.googleapis.com/Product"�
UpdateProductRequest5
product (2.google.cloud.retail.v2.ProductB�A/
update_mask (2.google.protobuf.FieldMask

DeleteProductRequest3
name (	B%�A�A
retail.googleapis.com/Product"�
ListProductsRequest4
parent (	B$�A�A
retail.googleapis.com/Branch
	page_size (

page_token (	
filter (	-
	read_mask (2.google.protobuf.FieldMask"b
ListProductsResponse1
products (2.google.cloud.retail.v2.Product
next_page_token (	"�
SetInventoryRequest7
	inventory (2.google.cloud.retail.v2.ProductB�A,
set_mask (2.google.protobuf.FieldMask,
set_time (2.google.protobuf.Timestamp

SetInventoryMetadata"
SetInventoryResponse"�
AddFulfillmentPlacesRequest6
product (	B%�A�A
retail.googleapis.com/Product
type (	B�A
	place_ids (	B�A,
add_time (2.google.protobuf.Timestamp

AddFulfillmentPlacesMetadata"
AddFulfillmentPlacesResponse"�
RemoveFulfillmentPlacesRequest6
product (	B%�A�A
retail.googleapis.com/Product
type (	B�A
	place_ids (	B�A/
remove_time (2.google.protobuf.Timestamp

RemoveFulfillmentPlacesMetadata"!
RemoveFulfillmentPlacesResponse2�
ProductService�


GetProduct).google.cloud.retail.v2.GetProductRequest.google.cloud.retail.v2.Product"R���EC/v2/{name=projects/*/locations/*/catalogs/*/branches/*/products/**}�Aname�
ListProducts+.google.cloud.retail.v2.ListProductsRequest,.google.cloud.retail.v2.ListProductsResponse"S���DB/v2/{parent=projects/*/locations/*/catalogs/*/branches/*}/products�Aparent�


ImportProducts-.google.cloud.retail.v2.ImportProductsRequest.google.longrunning.Operation"����N"I/v2/{parent=projects/*/locations/*/catalogs/*/branches/*}/products:import:*�AV
-google.cloud.retail.v2.ImportProductsResponse%google.cloud.retail.v2.ImportMetadata�
SetInventory+.google.cloud.retail.v2.SetInventoryRequest.google.longrunning.Operation"����_"Z/v2/{inventory.name=projects/*/locations/*/catalogs/*/branches/*/products/**}:setInventory:*�Ainventory,set_mask�AZ
+google.cloud.retail.v2.SetInventoryResponse+google.cloud.retail.v2.SetInventoryMetadata�
AddFulfillmentPlaces3.google.cloud.retail.v2.AddFulfillmentPlacesRequest.google.longrunning.Operation"����`"[/v2/{product=projects/*/locations/*/catalogs/*/branches/*/products/**}:addFulfillmentPlaces:*�Aproduct�Aj
3google.cloud.retail.v2.AddFulfillmentPlacesResponse3google.cloud.retail.v2.AddFulfillmentPlacesMetadata�
RemoveFulfillmentPlaces6.google.cloud.retail.v2.RemoveFulfillmentPlacesRequest.google.longrunning.Operation"����c"^/v2/{product=projects/*/locations/*/catalogs/*/branches/*/products/**}:removeFulfillmentPlaces:*�Aproduct�Ap
6google.cloud.retail.v2.RemoveFulfillmentPlacesResponse6google.cloud.retail.v2.RemoveFulfillmentPlacesMetadataI�Aretail.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.retail.v2BProductServiceProtoPZ<google.golang.org/genproto/googleapis/cloud/retail/v2;retail�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}
