<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'OrdersController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

# migration route
# Note: make sure migrations are enabled in config/migration.php before accessing this route
$route['migrate'] = '/Migrate/index';

// all Users Routes
$route['users'] = '/UsersController/index';
$route['users/add'] = '/UsersController/add';
$route['users/fetchUsers'] = '/UsersController/fetchUsers';
$route['users/checkEmail'] = '/UsersController/checkEmail';
$route['users/view/(:any)'] = '/UsersController/view/$1';
$route['users/update/(:any)'] = '/UsersController/update/$1';
$route['users/deleteUser'] = '/UsersController/deleteUser';
$route['users/restoreDeletedUser'] = '/UsersController/restoreDeletedUser';
$route['users/updateProfilePicture'] = '/UsersController/updateProfilePicture';
$route['users/getAgent'] = '/UsersController/getAgent';

// all Shippers Routes
$route['shippers'] = 'ShippersController/index';
$route['shippers/active'] = 'ShippersController/viewActive';
$route['shippers/available'] = 'ShippersController/viewAvailable';
$route['shippers/banned'] = 'ShippersController/viewBanned';
$route['shippers/approved'] = 'ShippersController/viewApproved';
$route['shippers/pending'] = 'ShippersController/viewPending';
$route['shippers/fetchShippers'] = 'ShippersController/fetchShippers';
$route['shippers/fetchActiveShippers'] = 'ShippersController/fetchActiveShippers';
$route['shippers/fetchBannedShippers'] = 'ShippersController/fetchBannedShippers';
$route['shippers/fetchApprovedShippers'] = 'ShippersController/fetchApprovedShippers';
$route['shippers/fetchAvailableShippers'] = 'ShippersController/fetchAvailableShippers';
$route['shippers/fetchPendingShippers'] = 'ShippersController/fetchPendingShippers';
$route['shippers/fetchShippersByZoneCode'] = 'ShippersController/fetchShippersByZoneCode';
$route['shippers/fetchShippersByCityCode'] = 'ShippersController/fetchShippersByCityCode';
$route['shippers/assignShippersToCity'] = 'ShippersController/assignShippersToCity';
$route['shippers/approveShipper'] = 'ShippersController/approveShipper';
$route['shippers/add'] = 'ShippersController/add';
$route['shippers/create'] = 'ShippersController/create';
$route['shippers/checkUsername'] = 'ShippersController/checkUsername';
$route['shippers/checkEmail'] = 'ShippersController/checkEmail';
$route['shippers/checkPhone'] = 'ShippersController/checkPhone';
$route['shippers/checkCin'] = 'ShippersController/checkCIN';
$route['shippers/view/(:any)'] = 'ShippersController/view/$1';
$route['shippers/getShipper/(:any)'] = 'ShippersController/getShipper/$1';
$route['shippers/getShipperInDeliveryOrdersCount'] = 'ShippersController/getShipperInDeliveryOrdersCount';
$route['shippers/countTotalOrdersForShipper'] = 'ShippersController/countTotalOrdersForShipper';
$route['shippers/fetchDeliveredOrders'] = 'ShippersController/fetchDeliveredOrders';
$route['shippers/fetchInShippingOrders'] = 'ShippersController/fetchInShippingorders';
$route['shippers/fetchPendingInRelayPointOrders'] = 'ShippersController/fetchPendingInRelayPointOrders';
$route['shippers/fetchFailedDeliveryOrders'] = 'ShippersController/fetchFailedDeliveryOrders';
$route['shippers/fetchToCollectOrders'] = 'ShippersController/fetchToCollectOrders';
$route['shippers/fetchReturnedOrders'] = 'ShippersController/fetchReturnedOrders';
$route['shippers/clearProfilePicture'] = 'ShippersController/clearProfilePicture';
$route['shippers/fetchPayments'] = 'ShippersController/fetchPayments';
$route['shippers/addNewPayment'] = 'ShippersController/addNewPayment';
$route['shippers/approvePayment'] = 'ShippersController/approvePayment';
$route['shippers/rejectPayment'] = 'ShippersController/rejectPayment';
$route['shippers/getInDeliveryOrderInfo/(:any)'] = 'ShippersController/getInDeliveryOrderInfo/$1';
$route['shippers/update'] = 'ShippersController/updateShipperInfo';
$route['shippers/updateBankInfo'] = 'ShippersController/updateShipperBankInfo';
$route['shippers/updatePassword'] = 'ShippersController/updateShipperPassword';
$route['shippers/validateCrbt'] = 'ShippersController/validateCrbt';
$route['shippers/fetchHistory'] = 'ShippersController/fetchHistory';
$route['shippers/downloadPaymentProof'] = 'ShippersController/downloadPaymentProof';
$route['shippers/getPossiblePaymentAmounts/(:any)'] = 'ShippersController/getPossiblePaymentAmounts/$1';
$route['shippers/downloadDeliveryRecap/(:any)'] = 'ShippersController/downloadDeliveryRecap/$1';
$route['shippers/downloadPaymentInvoice/(:any)'] = 'ShippersController/downloadPaymentInvoice/$1';
$route['shippers/exportPendingInRelayPointOrders'] = 'ShippersController/exportPendingInRelayPointOrders';
$route['shippers/exportToCollectOrders'] = 'ShippersController/exportToCollectOrders';
$route['shippers/exportInDeliveryOrders'] = 'ShippersController/exportInDeliveryOrders';
$route['shippers/assignOrderToShipper'] = 'ShippersController/assignOrderToShipper';
$route['shippers/(:any)/activate'] = 'ShippersController/activate/$1';
$route['shippers/(:any)/ban'] = 'ShippersController/ban';

// Auth Routes
$route['users/createAdmin'] = '/Auth/createUserERP';
$route['users/changePasswordByAdmin'] = '/Auth/changePasswordByAdmin';
$route['users/activate/(:any)'] = '/Auth/activate/$1';
$route['users/deactivate/(:any)'] = '/Auth/deactivate/$1';

//Route to get the invoices and shipments of a specific order, "order view"
$route['shipment/shipmentInvoice'] = '/ShipmentController/shipmentAndInvoice';
$route['shipment/storeShipment'] = '/ShipmentController/storeShipment';

// all Orders Routes
$route['orders'] = '/OrdersController/index';
$route['orders/fetchOrders'] = '/OrdersController/fetchOrders';
$route['orders/orderInfo'] = '/OrdersController/OrderInfo';
$route['orders/changeStatus'] = '/OrdersController/changeStatus';
$route['orders/changeStatusMultiOrders'] = '/OrdersController/changeStatusMultiOrders';
$route['orders/getCreditMemo/(:any)'] = 'OrdersController/getCreditMemo/$1';
$route['orders/getTickets/(:any)'] = 'OrdersController/getTickets/$1';
$route['orders/addComment'] = 'OrdersController/addComment';
$route['orders/getOrder/(:any)'] = 'OrdersController/getOrder/$1';
$route['orders/shipmentInvoice'] = '/OrdersController/shipmentAndInvoice';
$route['orders/editShippingMethod'] = '/OrdersController/editShippingMethod';
$route['orders/getShippingMethods'] = '/OrdersController/getShippingMethods';
$route['orders/updateShippingMethod'] = '/OrdersController/updateShippingMethod';
$route['orders/createOrder'] = '/OrdersController/createOrder';
$route['orders/storeOrder'] = '/CartsController/storeOrder';
$route['orders/selectCustomer'] = '/OrdersController/selectCustomer';
$route['orders/editOrder/(:any)'] = '/OrdersController/editOrder/$1';
$route['orders/updateOrder/(:any)'] = '/OrdersController/updateOrder/$1';
$route['orders/sendInvoice'] = '/OrdersController/sendInvoice';
$route['orders/addProductsToCart'] = '/OrdersController/addProductsToCart/';
$route['orders/saveZone'] = '/OrdersController/saveZoneInSession';

$route['orders/editAddress'] = '/OrdersController/editAddress';
$route['orders/(:any)'] = '/OrdersController/index/$1';

$route['carts/applyCoupon'] = '/CartsController/applyCoupon';
$route['carts/updateCartItems/(:any)'] = '/CartsController/updateItems/$1';

// Routes for PDF
$route['pdf/printShipment'] = '/PDFController/printShipment';
$route['pdf/printInvoice'] = '/PDFController/printInvoice';
$route['pdf/printInvoiceFromOrderPreparation'] = '/PDFController/printInvoiceFromOrderPreparation';
$route['pdf/printOrder'] = '/PDFController/printOrder';
$route['pdf/printLabelFromOrderPreparation'] = '/PDFController/printLabelFromOrderPreparation';
$route['pdf/printOrder'] = '/PDFController/printOrder';
$route['pdf/printCreditMemo'] = '/PDFController/printCreditMemo';
$route['pdf/printInShippingOrders'] = '/PDFController/printInShippingOrders';

// Emails routes
$route['macros'] = '/MacrosController/index';
$route['macros/fetchTemplates'] = '/MacrosController/fetchTemplates';
$route['macros/create'] = '/MacrosController/create';
$route['macros/store'] = '/MacrosController/store';
$route['macros/edit/(:any)'] = '/MacrosController/edit/$1';
$route['macros/update/(:any)'] = '/MacrosController/update/$1';
$route['macros/delete/(:any)'] = '/MacrosController/delete/$1';
$route['macros/getContent/(:any)'] = '/MacrosController/getContent/$1';

// all Prepartion Routes
$route['orderPreparation'] = '/OrderPreparationController/index';
$route['orderPreparation/fetchInPreparation'] = '/OrderPreparationController/fetchInPreparation';
$route['orderPreparation/orderInfo'] = '/OrderPreparationController/orderInfo';
$route['orderPreparation/startPreparation'] = '/OrderPreparationController/startPreparation';
$route['orderPreparation/finishPreparation'] = '/OrderPreparationController/finishPreparation';
$route['orderPreparation/changeStatus'] = '/OrderPreparationController/changeStatus';
$route['orderPreparation/cancelOrder'] = '/OrderPreparationController/cancelOrder';
$route['orderPreparation/fetchReadyToShipp'] = '/OrderPreparationController/fetchReadyToShipp';
$route['orderPreparation/assigneOrderToShipper'] = '/OrderPreparationController/assigneOrderToShipper';
$route['orderPreparation/fetchInShipping'] = '/OrderPreparationController/fetchInShipping';
$route['orderPreparation/fetchReturn'] = '/OrderPreparationController/fetchReturn';
$route['orderPreparation/fetchReturn'] = '/OrderPreparationController/fetchReturn';
$route['orderPreparation/fetchRefused'] = '/OrderPreparationController/fetchRefused';
$route['orderPreparation/fetchPreparedAndCanceled'] = '/OrderPreparationController/fetchPreparedAndCanceled';
$route['orderPreparation/fetchBatches'] = '/OrderPreparationController/fetchBatches';
$route['orderPreparation/batchInfo'] = '/OrderPreparationController/batchInfo';
$route['orderPreparation/printLabelBatchFromOrderPreparation'] = '/OrderPreparationController/printLabelBatchFromOrderPreparation';
$route['orderPreparation/printListOrdersBatch'] = '/OrderPreparationController/printListOrdersBatch';
$route['orderPreparation/checkIfOrderInPreparation'] = '/OrderPreparationController/checkIfOrderInPreparation';
$route['orderPreparation/changeStatusDefectiveStock'] = '/OrderPreparationController/changeStatusDefectiveStock';






// Tickets routes
$route['tickets'] = '/TicketsController/index';
$route['tickets/fetchTickets'] = '/TicketsController/fetchTickets';
$route['tickets/fetchTemplates'] = '/TicketsController/fetchTemplates';
$route['tickets/new'] = '/TicketsController/create';
$route['tickets/new/(:any)'] = '/TicketsController/create/$1';
$route['tickets/show/(:any)'] = '/TicketsController/show/$1';
$route['tickets/store'] = '/TicketsController/store';
$route['tickets/edit/(:any)'] = '/TicketsController/edit/$1';
$route['tickets/update/(:any)'] = '/TicketsController/update/$1';
$route['tickets/delete/(:any)'] = '/TicketsController/delete/$1';
$route['TicketMessages/addMessage/(:any)'] = 'TicketMessagesController/addMessage/$1';

// Get customers to use on the select of create new ticket
$route['customer/fetchCustomers'] = '/CustomerController/fetchCustomers';
$route['customers/listCustomers'] = '/CustomerController/listCustomers';
$route['customers/getCustomerAddresses'] = '/CustomerController/getCustomerAddresses';
$route['customers/getCustomerAddress'] = '/CustomerController/getCustomerAddress';

// Credit memo routes 
$route['creditMemo/addComment'] = '/CreditMemoController/addComment';
$route['creditMemo/createCreditMemo'] = '/CreditMemoController/createCreditMemo';

// Invoice routes
$route['invoice/createInvoice'] = '/InvoiceController/createInvoice';
$route['invoice/createBulkInvoices'] = '/InvoiceController/createBulkInvoices';
$route['invoice/createERPInvoice'] = '/InvoiceController/createERPInvoice';
$route['invoice/createBulkERPInvoices'] = '/InvoiceController/createBulkERPInvoices';

//lang
$route['langswitch/switchLanguage'] = '/LangSwitchController/switchLanguage';

# Events
$route['events'] = 'EventsController/index';
$route['events/create'] = 'EventsController/create';
$route['events/update'] = 'EventsController/update';
$route['events/delete'] = 'EventsController/delete';

// User Logs
$route['logs'] = 'UserLogController/index';

// Zones
$route['zones'] = 'ZonesController/index';
$route['zones/fetchZones'] = 'ZonesController/fetchZones';
$route['zones/getZone/(:any)'] = 'ZonesController/getZone/$1';
$route['zones/create']['post'] = 'ZonesController/create';
$route['zones/edit/(:any)']['get'] = 'ZonesController/edit/$1';
$route['zones/edit/(:any)']['post'] = 'ZonesController/update/$1';
$route['zones/delete/(:any)'] = 'ZonesController/delete/$1';
$route['zones/json'] = 'ZonesController/getZonesJSON';
$route['zones/updateJson'] = 'ZonesController/updateInMagento';

// Cities
$route['cities/fetchCities'] = 'CitiesController/fetchCities';
$route['cities/fetchZoneCities/(:any)'] = 'CitiesController/fetchZoneCities/$1';
$route['cities/create'] = 'CitiesController/create';
$route['cities/edit/(:any)']['get'] = 'CitiesController/edit/$1';
$route['cities/edit/(:any)']['post'] = 'CitiesController/update/$1';
$route['cities/delete/(:any)'] = 'CitiesController/delete/$1';
$route['cities/search'] = 'CitiesController/search';
$route['cities/zone'] = 'CitiesController/getCityZone';

# Batchs
$route['batches'] = 'BatchesController/index';
$route['batches/add'] = 'BatchesController/add';
$route['batches/edit'] = 'BatchesController/edit';
$route['batches/deleteBatch'] = 'BatchesController/deleteBatch';
$route['batches/getBatchInfo'] = 'BatchesController/getBatchInfo';
$route['batches/getBatchHistory'] = 'BatchesController/getBatchHistory';
$route['batches/fetchOreder'] = 'BatchesController/fetchOreder';
$route['batches/fetchBatches'] = 'BatchesController/fetchBatches';
$route['batches/fetchBatchOreders'] = '/BatchesController/fetchBatchOreders';
$route['batches/fetchOredersByBatche'] = '/BatchesController/fetchOredersByBatche';
$route['batches/updateBatchStatus'] = '/BatchesController/updateBatchStatus';
$route['batches/addComment'] = '/BatchesController/addComment';

// Notifications
$route['notifications'] = 'NotificationController/index';
$route['notifications/markAsRead'] = 'NotificationController/markAsRead';
$route['notifications/markAsUnread'] = 'NotificationController/markAsUnread';

$route['products/fetchProducts']    =   'ProductsController/fetchProducts';
$route['products/getProduct']    =   'ProductsController/getProduct';

// Accounting
$route['accounting']    =   'accounting/AccountingInvoiceController/index';
$route['accounting/fetchAccountedInvoices'] = 'accounting/AccountingInvoiceController/fetchAccountedInvoices';
$route['accounting/fetchAccountedCreditMemo'] = 'accounting/AccountingCreditMemoController/fetchAccountedCreditMemo';
$route['accounting/creditMemo'] = 'accounting/AccountingCreditMemoController/index';
$route['Excel/downloadInvoicesOrders'] = 'ExcelController/downloadInvoicesOrders';
$route['accounting/transactions'] = 'TransactionsController/index';
$route['accounting/transactions/fetchTransactions'] = 'TransactionsController/fetchTransactions';
$route['accounting/transactions/total'] = 'TransactionsController/getTotalTransactionsAmount';
$route['accounting/transactions/(:any)'] = 'TransactionsController/getTransaction/$1';
$route['accounting/transactions/(:any)/comments'] = 'TransactionsController/addComment/$1';
$route['accounting/countTotalSalesInvoices'] = 'accounting/AccountingInvoiceController/countTotalSalesInvoices';

// Shippers payments
$route['accounting/shippersPayments'] = 'ShipperPaymentsController/index';
$route['shippers/payments'] = 'ShipperPaymentsController/getPayments';
