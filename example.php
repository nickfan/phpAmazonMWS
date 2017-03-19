<?php

require_once __DIR__.'/vendor/autoload.php';

/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2017/3/17
 * Time: 15:45
 */


$amazonMerchantShipmentService = new AmazonMerchantServiceList('store', false, null, __DIR__.'/amazon-config.example.php');

$amazonMerchantShipmentService->setOrderId('102-7248617-0603409');
$amazonMerchantShipmentService->setSellerOrderId('102-7248617-0603409');
$shipmentOrderItems = array();
$shipmentOrderItems[] = [
    'OrderItemId' => 'BHS6FT-1',
    'Quantity' => 1,
];
$amazonMerchantShipmentService->setItems($shipmentOrderItems);
$address = [
    'Name' => 'Nancy Holloway',       //用户名
    'AddressLine1' => '624 CALIFORNIA AVE',       //详细地址1
    'AddressLine2' => '',       //详细地址2
    'AddressLine3' => '',       //详细地址3
    'DistrictOrCounty' => '',   //区
    'Email' => '34l32wc9cbk35q1@marketplace.amazon.com',              //电子邮件
    'City' => 'NORTH BEACH',              //城市
    'StateOrProvinceCode' => 'MD',              //州
    'PostalCode' => '20714-9601',              //邮编
    'CountryCode' => 'US',              //国家
    'Phone' => '443-964-4098',              //电话
];
$amazonMerchantShipmentService->setAddress($address);
$parcel = [
    'Length' => 233,
    'Width' => 566,
    'Height' => 432,
    'Unit' => 'inches',
];
$amazonMerchantShipmentService->setPackageDimensions($parcel);
$amazonMerchantShipmentService->setWeight(4123,'g');
$amazonMerchantShipmentService->setCarrierWillPickUp(false);
$amazonMerchantShipmentService->setDeliveryOption('DeliveryConfirmationWithoutSignature');
$responseXML = $amazonMerchantShipmentService->fetchServices();

var_dump($responseXML);
