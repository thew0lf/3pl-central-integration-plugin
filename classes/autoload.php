<?php


 function autoload_e13eecb25591b4bd6bff123087cd2a3b($class)
{
    $classes = array(
        'ServiceExternal' => __DIR__ .'/ServiceExternal.php',
        'WhoAmI' => __DIR__ .'/WhoAmI.php',
        'WhoAmIResponse' => __DIR__ .'/WhoAmIResponse.php',
        'ExternalLoginData' => __DIR__ .'/ExternalLoginData.php',
        'ArrayOfOrder' => __DIR__ .'/ArrayOfOrder.php',
        'Order' => __DIR__ .'/Order.php',
        'TransactionInfoExt' => __DIR__ .'/TransactionInfoExt.php',
        'ContactInfoExt' => __DIR__ .'/ContactInfoExt.php',
        'AddressExt' => __DIR__ .'/AddressExt.php',
        'ShippingInstructionsExt' => __DIR__ .'/ShippingInstructionsExt.php',
        'ShipmentInfoExt' => __DIR__ .'/ShipmentInfoExt.php',
        'TrackingInfoExt' => __DIR__ .'/TrackingInfoExt.php',
        'ArrayOfOrderLineItem' => __DIR__ .'/ArrayOfOrderLineItem.php',
        'OrderLineItem' => __DIR__ .'/OrderLineItem.php',
        'ArrayOfCodeDescrPair' => __DIR__ .'/ArrayOfCodeDescrPair.php',
        'CodeDescrPair' => __DIR__ .'/CodeDescrPair.php',
        'FulfillInvInfo' => __DIR__ .'/FulfillInvInfo.php',
        'ArrayOfUpdateOrder' => __DIR__ .'/ArrayOfUpdateOrder.php',
        'UpdateOrder' => __DIR__ .'/UpdateOrder.php',
        'ArrayOfCancelOrder' => __DIR__ .'/ArrayOfCancelOrder.php',
        'CancelOrder' => __DIR__ .'/CancelOrder.php',
        'UserLoginData' => __DIR__ .'/UserLoginData.php',
        'ArrayOfRetailer' => __DIR__ .'/ArrayOfRetailer.php',
        'Retailer' => __DIR__ .'/Retailer.php',
        'FindOrderCriteria' => __DIR__ .'/FindOrderCriteria.php',
        'ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'FindTriStateType' => __DIR__ .'/FindTriStateType.php',
        'I18nDateTime' => __DIR__ .'/I18nDateTime.php',
        'FindOrderDateRangeType' => __DIR__ .'/FindOrderDateRangeType.php',
        'AddressStatusType' => __DIR__ .'/AddressStatusType.php',
        'ArrayOfStockStatusEntry' => __DIR__ .'/ArrayOfStockStatusEntry.php',
        'StockStatusEntry' => __DIR__ .'/StockStatusEntry.php',
        'ExtStockStatusEntry' => __DIR__ .'/ExtStockStatusEntry.php',
        'ArrayOfSmallParcel' => __DIR__ .'/ArrayOfSmallParcel.php',
        'SmallParcel' => __DIR__ .'/SmallParcel.php',
        'WarehouseTransaction' => __DIR__ .'/WarehouseTransaction.php',
        'WarehouseTransactionType' => __DIR__ .'/WarehouseTransactionType.php',
        'TransactionInfo' => __DIR__ .'/TransactionInfo.php',
        'UserLogin' => __DIR__ .'/UserLogin.php',
        'ContactInfo' => __DIR__ .'/ContactInfo.php',
        'Address' => __DIR__ .'/Address.php',
        'CostInfo' => __DIR__ .'/CostInfo.php',
        'ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'ArrayOfCostInfoDetail' => __DIR__ .'/ArrayOfCostInfoDetail.php',
        'CostInfoDetail' => __DIR__ .'/CostInfoDetail.php',
        'ArrayOfRecurringBillingDetail' => __DIR__ .'/ArrayOfRecurringBillingDetail.php',
        'RecurringBillingDetail' => __DIR__ .'/RecurringBillingDetail.php',
        'ShippingInstructions' => __DIR__ .'/ShippingInstructions.php',
        'TrackingInfo' => __DIR__ .'/TrackingInfo.php',
        'ShipmentInfo' => __DIR__ .'/ShipmentInfo.php',
        'UnitOfMeasure' => __DIR__ .'/UnitOfMeasure.php',
        'WarehouseTransactionStatus' => __DIR__ .'/WarehouseTransactionStatus.php',
        'StorageChargePeriodType' => __DIR__ .'/StorageChargePeriodType.php',
        'CapacityType' => __DIR__ .'/CapacityType.php',
        'TransactionEntryType' => __DIR__ .'/TransactionEntryType.php',
        'LoadOutLogState' => __DIR__ .'/LoadOutLogState.php',
        'ArrayOfCodeDescrPair1' => __DIR__ .'/ArrayOfCodeDescrPair1.php',
        'ArrayOfOrderItem' => __DIR__ .'/ArrayOfOrderItem.php',
        'OrderItem' => __DIR__ .'/OrderItem.php',
        'ArrayOfOrderItemReceiveItem' => __DIR__ .'/ArrayOfOrderItemReceiveItem.php',
        'OrderItemReceiveItem' => __DIR__ .'/OrderItemReceiveItem.php',
        'ReceiveItem' => __DIR__ .'/ReceiveItem.php',
        'LocationType' => __DIR__ .'/LocationType.php',
        'ReceiveItemWithAllocations' => __DIR__ .'/ReceiveItemWithAllocations.php',
        'ArrayOfAllocation' => __DIR__ .'/ArrayOfAllocation.php',
        'Allocation' => __DIR__ .'/Allocation.php',
        'OrderItemReceiveItemNotYetPacked' => __DIR__ .'/OrderItemReceiveItemNotYetPacked.php',
        'WarehouseTransactionFreightRateStatus' => __DIR__ .'/WarehouseTransactionFreightRateStatus.php',
        'Facility' => __DIR__ .'/Facility.php',
        'MeasurementSystemType' => __DIR__ .'/MeasurementSystemType.php',
        'ArrayOfPackage' => __DIR__ .'/ArrayOfPackage.php',
        'Package' => __DIR__ .'/Package.php',
        'ArrayOfPackageContent' => __DIR__ .'/ArrayOfPackageContent.php',
        'PackageContent' => __DIR__ .'/PackageContent.php',
        'ArrayOfSmallParcelOrderItem' => __DIR__ .'/ArrayOfSmallParcelOrderItem.php',
        'SmallParcelOrderItem' => __DIR__ .'/SmallParcelOrderItem.php',
        'ArrayOfSmallParcelUpdateOrder' => __DIR__ .'/ArrayOfSmallParcelUpdateOrder.php',
        'SmallParcelUpdateOrder' => __DIR__ .'/SmallParcelUpdateOrder.php',
        'ArrayOfItem' => __DIR__ .'/ArrayOfItem.php',
        'Item' => __DIR__ .'/Item.php',
        'InventoryMethod' => __DIR__ .'/InventoryMethod.php',
        'HazMatPackingGroup' => __DIR__ .'/HazMatPackingGroup.php',
        'HazMatFlag' => __DIR__ .'/HazMatFlag.php',
        'ArrayOfItemMaterial' => __DIR__ .'/ArrayOfItemMaterial.php',
        'ItemMaterial' => __DIR__ .'/ItemMaterial.php',
        'ArrayOfItemFacility' => __DIR__ .'/ArrayOfItemFacility.php',
        'ItemFacility' => __DIR__ .'/ItemFacility.php',
        'ArrayOfItemFacilityStorageRate' => __DIR__ .'/ArrayOfItemFacilityStorageRate.php',
        'ItemFacilityStorageRate' => __DIR__ .'/ItemFacilityStorageRate.php',
        'ArrayOfInt1' => __DIR__ .'/ArrayOfInt1.php',
        'ArrayOfExternalCustomer' => __DIR__ .'/ArrayOfExternalCustomer.php',
        'ExternalCustomer' => __DIR__ .'/ExternalCustomer.php',
        'ArrayOfExternalFacility' => __DIR__ .'/ArrayOfExternalFacility.php',
        'ExternalFacility' => __DIR__ .'/ExternalFacility.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e13eecb25591b4bd6bff123087cd2a3b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
