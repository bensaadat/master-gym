<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = 'Account Successfully Created';
$lang['account_creation_unsuccessful']          = 'Unable to Create Account';
$lang['account_creation_duplicate_email']       = 'Email Already Used or Invalid';
$lang['account_creation_duplicate_identity']    = 'Identity Already Used or Invalid';
$lang['account_creation_missing_default_group'] = 'Default group is not set';
$lang['account_creation_invalid_default_group'] = 'Invalid default group name set';


// Password
$lang['password_change_successful']          = 'Password Successfully Changed';
$lang['password_change_unsuccessful']        = 'Unable to Change Password';
$lang['forgot_password_successful']          = 'Password Reset Email Sent';
$lang['forgot_password_unsuccessful']        = 'Unable to email the Reset Password link';


// Activation
$lang['activate_successful']                 = 'Account Activated';
$lang['activate_unsuccessful']               = 'Unable to Activate Account';
$lang['deactivate_successful']               = 'Account De-Activated';
$lang['deactivate_unsuccessful']             = 'Unable to De-Activate Account';
$lang['activation_email_successful']         = 'Activation Email Sent. Please check your inbox or spam';
$lang['activation_email_unsuccessful']       = 'Unable to Send Activation Email';
$lang['deactivate_current_user_unsuccessful']= 'You cannot De-Activate your self.';

// Login / Logout
$lang['login_successful']                    = 'Logged In Successfully';
$lang['login_unsuccessful']                  = 'Incorrect Login';
$lang['login_unsuccessful_not_active']       = 'Account is inactive';
$lang['login_timeout']                       = 'Temporarily Locked Out.  Try again later.';
$lang['logout_successful']                   = 'Logged Out Successfully';

// Account Changes
$lang['update_successful']                   = 'Account Information Successfully Updated';
$lang['update_unsuccessful']                 = 'Unable to Update Account Information';
$lang['delete_successful']                   = 'User Deleted';
$lang['delete_unsuccessful']                 = 'Unable to Delete User';

// Groups
$lang['group_creation_successful']           = 'Group created Successfully';
$lang['group_already_exists']                = 'Group name already taken';
$lang['group_update_successful']             = 'Group details updated';
$lang['group_delete_successful']             = 'Group deleted';
$lang['group_delete_unsuccessful']           = 'Unable to delete group';
$lang['group_delete_notallowed']             = 'Can\'t delete the administrators\' group';
$lang['group_name_required']                 = 'Group name is a required field';
$lang['group_name_admin_not_alter']          = 'Admin group name can not be changed';

// Activation Email
$lang['email_activation_subject']            = 'Account Activation';
$lang['email_activate_heading']              = 'Activate account for %s';
$lang['email_activate_subheading']           = 'Please click this link to %s.';
$lang['email_activate_link']                 = 'Activate Your Account';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Forgotten Password Verification';
$lang['email_forgot_password_heading']       = 'Reset Password for %s';
$lang['email_forgot_password_subheading']    = 'Please click this link to %s.';
$lang['email_forgot_password_link']          = 'Reset Your Password';

// New Password Email
$lang['email_new_password_subject']          = 'New Password';
$lang['email_new_password_heading']          = 'New Password for %s';
$lang['email_new_password_subheading']       = 'Your password has been reset to: %s';

// Navigation Bar
$lang['Sales'] 	  	 = 'Sales';
$lang['Orders'] 	  	 = 'Orders';
// $lang['All Users'] 	  	 = 'All Users';
$lang['Orders Preparation'] 	  	 = 'Orders Preparation';
$lang['Manage Sellers'] 	  	 = 'Manage Sellers';
$lang['Settings'] 	  	 = 'Settings';

// Buttons
$lang['Next'] 	  	 = 'Next';
$lang['Close'] 	  	 = 'Close';

// Add User
$lang['Add shipper'] 	  	 = 'Add shipper';
$lang['General'] 	  	 = 'Geniral';
$lang['Geniral information'] 	  	 = 'Geniral information';
$lang['Account Information'] 	  	 = 'Geniral information';
$lang['Password'] 	  	 = 'Password';
$lang['Confirm Password'] 	  	 = 'Confirm Password';
$lang['Detail informations'] 	  	 = 'Detail informations';
$lang['city'] 	  	 = 'City';
$lang['Date Of Birth'] 	  	 = 'Date Of Birth';
$lang['Vehicle'] 	  	 = 'Vehicle';
$lang['care'] 	  	 = 'care';
$lang['motorbike'] 	  	 = 'motorbike';
$lang['bank information'] 	  	 = 'Bank information ';
$lang['bank name'] 	  	 = 'Bank name';
$lang['bank account number'] 	  	 = 'Bank account number';
$lang['bank account title'] 	  	 = 'Bank account title';
$lang['RIB'] 	  	 		 = 'RIB';
$lang['deposition'] 	  	 = 'Deposition';
$lang['selected'] = "selected";
$lang['Welcome to the Preparation area'] = 'Welcome to the Preparation area';
// Orders
$lang['Order'] 	  	 = 'Order';
$lang['Orders'] 	  	 = 'Orders';
$lang['Order nmber'] 	  	 = 'Order nmber';
$lang['Overview'] 	  	 = 'Overview';
$lang['invoice-and-shipping'] 	  	 = 'Invoice & shipping';
$lang['payment'] 	  	 = 'payment';
$lang['order-currency'] 	  	 = 'Order was placed using';
$lang['order-shippment-method-shop'] 	  	 = 'Pick up from Store';
$lang['Offered'] = 'Offered';
$lang['order-shippment-method-express'] 	  	 = 'Express Delivery';
$lang['Express Delivery'] 	  	 = 'Express Delivery';
$lang['Delivery in X hours'] = 'Delivery in %sh';
$lang['Delivery in X days'] = 'Delivery in %s days';
$lang['X days'] = '%s days';
$lang['X hours'] = '%s hours';
$lang['order-payment-method-Payzone'] 	  	 = 'Payzone';
$lang['order-payment-method-cashondelivery'] 	  	 = 'Cash on delivery';
$lang['Comments'] 	  	 = 'Comments';
$lang['order-grand-total'] 	  	 = 'Order grand total';
$lang['total-refunded'] 	  	 = 'Total refunded';
$lang['price-ttc'] 	  	 = 'Price TTC';
$lang['rma'] 	  	 = 'RMA';
$lang['dropship'] 	  	 = 'DropShip';
$lang['Tracking'] 	  	 = 'Tracking';
$lang['Comment'] 	  	 = 'Comment';
$lang['Customer'] 	  	 = 'Customer';
$lang['hours'] 	  	 = 'h';
$lang['minutes'] 	  	 = 'min';
$lang['Information'] 	  	 = 'Information';
$lang['shipments'] 	  	 = 'Shipments';
$lang['shipment'] 	  	 = 'Shipment';
$lang['items-to-ship'] 	  	 = 'Items to ship';
$lang['Client name'] 	  	 = 'Client name';
$lang['client-information'] 	  	 = 'Client information';
$lang['Address'] 	  	 = 'Address';
$lang['customer firstname'] 	  	 = 'Customer first name';
$lang['customer lastname'] 	  	 = 'Customer last name';
$lang['Place the client\'s street here...'] 	  	 = 'Place the client\'s street here...';
$lang['Place the client\'s city here...'] 	  	 = 'Place the client\'s city here...';
$lang['Place the client\'s zip code here...'] 	  	 = 'Place the client\'s zip code here...';
$lang['Place the client\'s country here...'] 	  	 = 'Place the client\'s country here...';
$lang['Phone'] 	  	 = 'Phone';
$lang['Products'] 	  	 = 'Products';
$lang['pack']    = 'Pack';
$lang['All products ordered'] 	  	 = 'All products ordered';
$lang['Order Totals'] 	  	 = 'Order Totals';
$lang['Paiement'] 	  	 = 'Payment';
$lang['Sous-total'] 	  	 = 'Subtotal';
$lang['Shipping cost'] 	  	 = 'Shipping cost';
$lang['ID'] 	  	 = 'ID';
$lang['VAT'] 	  	 = 'TVA';
$lang['Total Paid'] 	  	 = 'Total Paid';
$lang['payment-method'] 	  	 = 'Payment method';
$lang['magento-invoice'] 	  	 = 'Magento Invoice';
$lang['erp-invoice'] 	  	 = 'ERP Invoice';
$lang['Date'] 	  	 = 'Date';
$lang['cashondelivery'] 	  	 = 'Cash on delivery';
$lang['payzone_standard'] 	  	 = 'Payzone Standard';
$lang['date_start'] 	  	 = 'Start date';
$lang['global filter'] 	  	 = 'Global filter';
$lang['save'] 	  	 = 'Save';
$lang['search'] 	  	 = 'Search';
$lang['Reset Filter'] 	  	 = 'Reset Filter';
$lang['Action'] 	  	 = 'Action';
$lang['N°'] 	  	 = 'N°';
$lang['CRBT'] 	  	 = 'Amount ordered';
$lang['change-status'] 	  	 = 'Change status';
$lang['billing_address'] 	  	 = 'Billing address';
$lang['shipping_address'] 	  	 = 'Shipping address';
$lang['phone_number'] 	  	 = 'Phone number';
$lang['client_name'] 	  	 = 'Client name';
$lang['client_email'] 	  	 = 'Client e-mail';
$lang['sku'] 	  	 = 'Sku';
$lang['product'] 	  	 = 'Product';
$lang['warehouse'] 	  	 = 'Warehouse';
$lang['qty'] 	  	 = 'Qty';
$lang['qty_in_stock'] 	  	 = 'Qty in stock';
$lang['price'] 	  	 = 'Price';
$lang['date'] 	  	 = 'Date';
$lang['expiry-date'] 	  	 = 'Expiry date';
$lang['reference'] 	  	 = 'Reference';
$lang['products'] 	  	 = 'Products';
$lang['carrier'] 	  	 = 'Carrier';
$lang['custom'] 	  	 = 'Custom';
$lang['shipping-cost'] 	  	 = 'Shipping cost';
$lang['magento-invoice'] 	  	 = 'Magento Invoice';
$lang['erp-invoice'] 	  	 = 'ERP Invoice';
$lang['invoice'] 	  	 = 'Invoice';
$lang['TOTAL SALES incl'] 	  	 = 'Total sales incl';
$lang['CREDIT'] 	  	 = 'Crdit';
$lang['invoices'] 	  	 = 'Invoices';
$lang['invoice-erp'] 	  	 = 'ERP Invoice';
$lang['create-invoice'] 	  	 = 'Create invoice';
$lang['created_at'] 	  	 = 'Created at';
$lang['customer'] 	  	 = 'Customer';
$lang['store'] 	  	 = 'Store';
$lang['manager'] 	  	 = 'Manager';
$lang['customer-comment'] 	  	 = 'Customer comment';
$lang['supplier'] 	  	 = 'Supplier';
$lang['order'] 	  	 = 'Order';
$lang['order-date'] 	  	 = 'Order date';
$lang['order-status'] 	  	 = 'Order status';
$lang['payment-status'] 	  	 = 'Payment status';
$lang['total-paid'] 	  	 = 'Total paid';
$lang['total-due'] 	  	 = 'Total due';
$lang['add-payment'] 	  	 = 'Add payment';
$lang['payment-records'] 	  	 = 'Payment records';
$lang['amount'] 	  	 = 'Amount';
$lang['comment'] 	  	 = 'Comment';
$lang['method'] 	  	 = 'Method';
$lang['action'] 	  	 = 'Action';
$lang['submit'] 	  	 = 'Submit';
$lang['edit'] 	  	 = 'Edit';
$lang['country'] 	  	 = 'Country';
$lang['street'] 	  	 = 'Address';
$lang['zip-code'] 	  	 = 'Zip code';
$lang['request_geolocation'] 	  	 = 'Request geolocation';
$lang['send_email'] 	  	 = 'Send email';
$lang['print'] 	  	 = 'Print';
$lang['call'] 	  	 = 'Call';
$lang['select-all'] 	  	 = 'Select All';
$lang['deselect-all'] 	  	 = 'Deselect All';
$lang['credit-memo'] 	  	 = 'Credit memo';
$lang['creditmemo'] 	  	 = 'Credit memo';
$lang['store_credit'] 	  	 = 'Store credit';
$lang['erp_credit_memo'] 	  	 = 'ERP credit memo';
$lang['increment_id'] 	  	 = 'Increment ID';
$lang['total'] 	  	 = 'Total';
$lang['comments'] 	  	 = 'Comments';
$lang['Shipping'] 	  	 = 'Shipping';
$lang['billing'] 	  	 = 'billing';
$lang['shipping'] 	  	 = 'shipping';
$lang['credit_memo'] 	  	 = 'Credit memo';
$lang['erp_credit_memo'] 	  	 = 'ERP Credit memo';
$lang['magento-refunded-items'] 	  	 = 'Magento Refunded items';
$lang['refunded-items'] 	  	 = 'Refunded items';
$lang['erp-refunded-items'] 	  	 = 'ERP Refunded items';
$lang['order-id'] 	  	 = 'Order id';
$lang['ticket-id'] 	  	 = 'ticket id';
$lang['created-at'] 	  	 = 'created at';
$lang['ticket-messages'] 	  	 = 'Ticket messages';
$lang['closed-ticket'] 	  	 = 'Closed ticket';
$lang['ordered'] 	  	 = 'Ordered';
$lang['canceled'] 	  	 = 'Canceled';
$lang['shipped'] 	  	 = 'Shipped';
$lang['save-changes'] 	  	 = 'Save changes';
$lang['close'] 	  	 = 'Close';
$lang['not-notified'] 	  	 = 'Not Notified';
$lang['is-notified'] 	  	 = 'Is Notified';
$lang['customer'] 	  	 = 'Customer';
$lang['weight'] 	  	 = 'weight';
$lang['add-new-order'] 	  	 = 'Add new order';
$lang['reset-filter'] 	  	 = 'Reset filter';
$lang['search-by-name-city-number-status-order'] = 'Search by name city number status order';
$lang['by'] 	  	 = 'by';
$lang['submit-order'] 	  	 = 'Submit order';
$lang['order-does-not-exist'] 	  	 = 'Order does not exist';
$lang['coupon'] 	  	 = 'Coupon';
$lang['coupon_code'] 	  	 = 'Coupon code';
$lang['apply_coupon'] 	  	 = 'Apply Coupon';



//credit memo
$lang['create-credit-memo'] 	  	 = 'Create credit memo';
$lang['order-command-date'] 	  	 = 'Order command date';
$lang['purchased-on'] 	  	 = 'Purchased on';
$lang['order-details'] 	  	 = 'Order details';
$lang['customer-details'] 	  	 = 'Account details';
$lang['billing-address'] 	  	 = 'Billing address';
$lang['shipping-address'] 	  	 = 'Shipping address';
$lang['products-to-refund'] 	  	 = 'Products to refund';
$lang['client-name'] 	  	 = 'Client name';
$lang['email'] 	  	 = 'Email';
$lang['client-group'] 	  	 = 'Client group';
$lang['full-name'] 	  	 = 'Full name';
$lang['paid-amount'] 	  	 = 'Paid amount';
$lang['refund-amount'] 	  	 = 'Refund amount';
$lang['shipping-amount'] 	  	 = 'Shipping amount';
$lang['products-to-shipp'] 	  	 = 'Products to shipp';
$lang['shipping-refund'] 	  	 = 'Shipping refund';
$lang['order-trand-total'] 	  	 = 'Order grand total';
$lang['add-comment'] 	  	 = 'Add Comment';
$lang['subtotal'] 	  	 = 'Subtotal';
$lang['refund-shipping-inc-tax'] 	  	 = 'Refund Shipping (Incl. Tax)';
$lang['change-shipping-method'] = 'Change shipping method';
$lang['get-shipping-methods-and-rates'] = 'Get shipping methods and rates';
$lang['adjustment-refund'] 	  	 = 'Adjustment Refund';
$lang['adjustment-fee'] 	  	 = 'Adjustment Fee';
$lang['grand-total-exc-tax'] 	  	 = 'Grand Total (Excl.Tax)';
$lang['tax'] 	  	 = 'Tax';
$lang['grand-total-inc-tax'] 	  	 = 'Grand Total (Incl.Tax)';
$lang['return-to-stock'] 	  	 = 'Return to stock';
$lang['qty-to-refund'] 	  	 = 'Qty to refund';
$lang['tax-amount'] 	  	 = 'Tax Amount';
$lang['discount-amount'] 	  	 = 'Discount Amount';
$lang['change-status'] 	  	 = 'Change status';
$lang['in-resolution'] 	  	 = 'In resolution';
$lang['refunded'] 	  	 = 'Refunded';
$lang['exchanged'] 	  	 = 'Exchanged';
$lang['comment-panel'] 	  	 = 'Comment panel';
$lang['this-order-can-not-have-a-credit-memo-yet,'] 	  	 = 'this order can not have a credit memo yet,';
$lang['an-invoice-is-required'] 	  	 = 'an invoice is required';
$lang['no-erp-credit-memo-has-been-created,'] 	  	 = 'no erp credit memo has been created,';
$lang['if-you-wish-to-create-one,'] 	  	 = 'if you wish to create one,';
$lang['click-here'] 	  	 = 'click here';
$lang['attention'] 	  	 = 'Attention';
$lang['credit_memo_magento'] 	  	 = 'Credit Memo ( Magento )';


// Tickets
$lang['priority'] 	  	 = 'Priority';
$lang['department'] 	  	 = 'Department';
$lang['sent-from'] 	  	 = 'Sent from';
$lang['sent-name'] 	  	 = 'Sent name';
$lang['sent-email'] 	  	 = 'Sent email';
$lang['normal'] 	  	 = 'Normal';
$lang['medium'] 	  	 = 'Medium';
$lang['hight'] 	  	 = 'High';
$lang['urgent'] 	  	 = 'Urgent';
$lang['emergency'] 	  	 = 'Emergency';
$lang['critical'] 	  	 = 'Critical';
$lang['on hold'] 	  	 = 'On Hold';
$lang['open'] 	  	 = 'Open';
$lang['ticket'] 	  	 = 'Ticket';
$lang['agent'] 	  	 = 'Agent';
$lang['updated_at'] 	  	 = 'Updated at';
$lang['send'] 	  	 = 'Send';
$lang['Created_at'] 	  	 = 'created at';
$lang['sender_name'] 	  	 = 'Sender name';
$lang['sender_email'] 	  	 = "Sent by 'e-mail'";
$lang['sender'] 	  	 = 'Sender';
$lang['resolved'] 	  	 = 'Resolved';
$lang['ticket-status'] 	  	 = 'Ticket status';
$lang['additional-informations'] 	  	 = 'Additional informations';
$lang['information-related-to-client'] 	  	 = 'Information related to client';
$lang['write-reply'] 	  	 = 'Write reply';
$lang['messages'] 	  	 = 'Messages';
$lang['quote'] 	  	 = 'Quote';
$lang['sent-by'] 	  	 = 'Sent by';
$lang['client'] 	  	 = 'Client';
$lang['response'] 	  	 = 'Response';
$lang['update'] 	  	 = 'Update';
$lang['send'] 	  	 = 'Send';
$lang['ticket-title'] 	  	 = 'Ticket title';
$lang['new-ticket'] 	  	 = 'New ticket';
$lang['view-ticket'] 	  	 = 'View ticket';
$lang['tickets'] 	  	 = 'Tickets';
$lang['create-ticket'] 	  	 = 'Create ticket';
$lang['new'] 	  	 = 'New';
$lang['macros'] 	  	 = 'Macros';
$lang['email-from'] 	  	 = 'Email from';
$lang['unassigned'] 	  	 = 'Unassigned';
$lang['quote'] 	  	 = 'Quote';
$lang['no-tickets-has-been-created,'] 	  	 = 'no tickets has been created,';

// Actions
$lang['created'] 	  	 = 'Created';
$lang['create'] 	  	 = 'Create';

// Invoice
$lang["this-order-doesn't-have-a-magento-invoice-yet,"] 	  	 = 'this order doesn\'t have a magento invoice yet,';

// Records
$lang['records-found'] 	  	 = 'Record(s) found';

// Products
$lang['Products'] 	  	 = 'Products';
$lang['All products ordered'] 	  	 = 'All products ordered';
$lang['products list']      =   'Products list';
$lang['products to order']      = 'Products to order';
$lang['shipping-handling-information'] 	  	 = 'Shipping & Handling Information';
$lang['payment-information'] 	  	 = 'Payment Information';
$lang['Paiement'] 	  	 = 'Paiement';
$lang['order-currency-MAD'] 	  	 = 'Order was placed using MAD';
$lang['Sous-total'] 	  	 = 'Sous-total';
$lang['Shipping cost'] 	  	 = 'Shipping cost';
$lang['Sous-total'] 	  	 = 'Sous-total';
$lang['VAT'] 	  	 = 'VAT';
$lang['Total Paid'] 	  	 = 'Total Paid';
$lang['total'] 	  	 = 'Total';
$lang['product(s)'] 	  	 = 'product(s)';
$lang['payment-method'] 	  	 = 'Payment method';
$lang['Status'] 	  	 = 'Status';
$lang['dedicated-to-virtual-control'] 	  	 = 'dedicated to virtual control';
$lang['no-payment-information-required'] 	  	 = 'No payment information required';
$lang['Date'] 	  	 = 'Date';
$lang['cashondelivery'] 	  	 = 'Cash on delivery';
$lang['payzone_standard'] 	  	 = 'Payzone';
$lang['date_start'] 	  	 = 'date start';
$lang['global filter'] 	  	 = 'global filter';
$lang['save'] 	  	 = 'save';
$lang['search'] 	  	 = 'search';
$lang['Reset Filter'] 	  	 = 'Reset Filter';
$lang['Action'] 	  	 = 'Action';
$lang['N° Order'] 	  	 = 'N° Order';
// status
$lang['pending'] 	  	 = 'Pending';
$lang['pending-orders'] 	  	 = 'pending order(s)';
$lang['orders-in-processing'] 	  	 = 'order(s) in processing';
$lang['attentedepaiement'] 	  	 = 'Awaiting payment';
$lang['awaiting_validation'] 	  	 = 'Awaiting Validation';
$lang['waiting'] 	  	 = 'Waiting';
$lang['validated'] = 'Validated';
$lang['flagged_fraud'] = 'Flagged as fraud';
$lang['in_preparation'] = 'In preparation';
$lang['ready_to_shipp'] = 'Ready to ship';
$lang['in_shipping'] = 'In shipping';
$lang['pending_in_relay_point'] = 'Pending in relay point';
$lang['failed_delivery'] = 'Failed delivery';
$lang['delivered'] = 'Delivered';
$lang['complete'] = 'Paid';
$lang['payable'] = 'Payable';
$lang['billed_in_erp'] = 'Billed';
$lang['canceled'] = 'Canceled';
$lang['cancelation'] = 'cancelation';
$lang['returned'] = 'Canceled & Received';
$lang['rejected_by_quality_control'] = 'Rejected';
$lang['waiting for validation'] 	  	 = 'waiting for validation';
$lang['cancel'] 	  	 = 'cancel';
$lang['All'] 	  	 = 'All';
$lang['all'] 	  	 = 'All';
$lang['return'] 	  	 =  'Return';
$lang['delivery failure'] 	  	 =  'delivery failure';
$lang['to_be_canceled'] 	  	 =  'To be canceled';
$lang['prepared_and_canceled'] 	  	 =  'To be canceled';
$lang['closed'] 	  	 =  'Closed';


// texts 
$lang['there is'] 	  	 = 'there is';
$lang['day'] 	  	 = 'day';
$lang['Zone'] 	  	 = 'Zone';
$lang['delay'] 	  	 = 'delay';
$lang['Preparation'] 	  	 = 'Preparation';
$lang['Image'] 	  	 = 'Image';
$lang['Description'] 	  	 = 'Description';
$lang['Scan'] 	  	 = 'Scan';
$lang['Payment'] 	  	 = 'Payment';
$lang['Choose order'] 	  	 = 'Choose order';
$lang['select order from list of orders to show'] 	  	 = 'select order from list of orders to show';
$lang['Scan Product'] 	  	 = 'Scaner le Produit';
$lang['scan each  product in this order'] 	  	 = 'scan each  product in this order';
$lang['print bill for order and put it into the box'] 	  	 =  'print bill for order and put it into the box';
$lang['Print bill'] 	  	 =  'Print bill';
$lang['Print label'] 	  	 =  'Print label';
$lang['print label and pick to the box of order'] 	  	 =  'print label and pick to the box of order';
$lang['Delivery Management'] 	  	 =  'Delivery Management';








//actions
$lang['validate'] 	  	 = 'validate';
$lang['Refused'] 	  	 = 'Refused';
$lang['Canceled and Received'] 	  	 = 'Canceled and Received';

//Orders tracking modal tab

$lang['status'] = "Status";
$lang['shipment_date'] = "Shipment day";
$lang['shipper'] = "Shipper";
$lang['shipper_number'] = "Shipper number";
$lang['not_available_yet'] = "N/A";


// Email templates
$lang['email_templates'] = "Email templates";
$lang['macros'] = "Macros";
$lang['subject'] = "Subject";
$lang['title'] = "Title";
$lang['content'] = "Content";
$lang['delete'] = "Delete";
$lang['records_found'] = "Record(s) found";
$lang['add_macro'] = "Add Macro";
$lang['edit_macros'] = "Edit Macro";
$lang['add_email_template'] = "Add Macro";

$lang['add'] = "Add";
$lang['actions'] = "Actions";
$lang['search_here'] = "Search here";
$lang['All Shippers'] = "All Shippers";
$lang['Shippers Management'] = "Shippers Management";
$lang['Add Shipper'] = "Add Shipper";
$lang['Shipper'] = "Shipper";
$lang['ship'] = "Ship";
$lang['add comment here ..'] = "add comment here ..";
$lang['notify-customer'] = "Notify customer";
$lang['appear-to-shipper'] = "Appear to shipper";
$lang['unassign-shipper'] = "Unassign shipper";



// swal messages
$lang['Please add some text on the comment text area !'] = "Please add some text on the comment text area !";
$lang['Warning !!'] = "Warning !!";
$lang['Great !!'] = "Great";
$lang['Comment was added successfully !'] = "Comment was added successfully !";
$lang['Something went wrong !'] = "Something went wrong !";
$lang['Ticket has been updated Successfully'] = "Ticket has been updated Successfully";
$lang['Updated'] = "Updated";
$lang['Invalid qty to refund !!'] = "Invalid items qty to refund !!";
$lang['Invalid qty to ship !!'] = "Invalid qty to ship !!";
$lang['Credit memo created successfully !!'] = "Credit memo created successfully !!";
$lang['Created !!'] = "Created";
$lang['The credit memo has been created successfully !'] = "The credit memo has been created successfully !!";
$lang['Changed'] = "Changed";
$lang['Order status Successfully changed !!'] = "Order status Successfully changed !!";
$lang['Invoice created successfully !!'] = "Invoice created successfully !!";
$lang['The sms has been sent successfully !'] = "The sms has been sent successfully !";
$lang['Sent !!'] = "Sent !!";
$lang['Something went wrong !!'] = "Something went wrong !!";
$lang['this-order-has-an-invalid-status-!!'] = "THIS ORDER HAS AN INVALID STATUS !!";
$lang['Can not create invoice for requested order, The status most be complete !!'] = "Can not create invoice for requested order, The status most be complete !!";
$lang['Can not create invoice for requested order, This order doesn\'t exist !!'] = "Can not create invoice for requested order, This order doesn't exist !!";
$lang['Can not create invoice for requested order, The order is still NEW !!'] = "Can not create invoice for requested order, The order is still NEW !!";
$lang['Magento Invoice doesn\'t exist'] = "Magento Invoice doesn't exist";
$lang['ERP Invoice already exist'] = "ERP Invoice already exist";
$lang['Invoice created seccessfully'] = "Invoice created seccessfully";
$lang['Can not create credit memo for requested order !!'] = "Can not create credit memo for requested order !!";
$lang['ERP Invoice does not exist'] = "ERP Invoice does not exist";
$lang['Credit memo created seccessfully'] = "Credit memo created seccessfully";
$lang['THIS TICKET HAS NO MESSAGE !!'] = "THIS TICKET HAS NO MESSAGE !!";
$lang['Shipment already exists !!'] = "Shipment already exists !!";
$lang['Shipment was created successfully'] = "Shipment was created successfully";
$lang['Can not create shipment for requested order !!'] = "Can not create shipment for requested order !!";
$lang['you-have-changed-status-from-%s-to-%s-for-%d-order(s)'] 	  	 = 'You have changed status from <b> %s </b> to <b> %s </b> for <b> %d </b> order(s)';
$lang['you-need-to-choose-at-least-one-order-to-change-status'] 	  	 = 'You need to choose at least one order to change the status';
$lang['you-need-choose-a-status-in-order-to-complete-the-action'] 	  	 = 'You need to choose a status to complete the action';
$lang['Shipping-method-changed-to-express'] 	  	 = 'New shipping method : Express Delivery';
$lang['Shipping-method-changed-to-shop'] 	  	 = 'New shipping method : Pick up from shop';
$lang['shipment-can-not-be-created,-status-must-be-in-preparation'] = 'Shipment can not be created, status must be "in preparation"';
$lang['Can-not-create-invoice-for-requested-order,-The-status-must-be-"delivered" !!'] = 'Can not create invoice for requested order, The status must be "delivered" !!';
$lang['Order-shipping-method-has-been-changed-by'] = 'Order shipping method has been changed by ';
$lang['ERP invoice has been sent successfully !'] = 'ERP invoice has been sent successfully ! ';
$lang['certain-products-could-not-be-added'] = 'Certain products could-not be added';

$lang["Order N° %s was created"]   = 'Order N° %s was created';
$lang["Invoice N° %d was created"]   = 'Invoice N° %d was created';
$lang["ERP Invoice with N° %d already exist"]   = 'ERP Invoice with N° %d already exist';
$lang["ERP Invoice N° %s was created"]   = 'ERP Invoice N° %s was created';
$lang["Shipment N° %d was created"]   = 'Shipment N° %d was created';
$lang["Credit memo N° %d was created"]   = 'Credit memo N° %d was created';
$lang["Order status changed to"]   = 'Order status changed to';
$lang["Order address changed"]   = 'The order address is changed';
$lang["The sms has been sent"]   = 'The sms has been sent';
$lang["Comment was added, with status"]   = 'Comment was added, with status';
$lang["Added !!"]   = 'Added';
$lang["at-least-one-product-needs-to-be-selected"]   = 'At least one product needs to be selected';
$lang["City name is incorrect"]   = 'City name is incorrect';
$lang["order-not-available"]   = 'Order not available';
$lang["this-order-can-not-be-modified"]   = 'This order can not be modified';
$lang["You want to change status for multiple orders ?"] = 'You want to change status for multiple orders ?';
$lang['Please follow these steps'] = 'Please follow these steps';
$lang["Filter orders on a specific status."] = 'Filter orders on a specific status.';
$lang["Select the orders you wanna change it for."] = 'Select the orders you wanna change it for.';
$lang["Choose the status you wanna change to and submit."] = 'Choose the status you wanna change to and submit.';


// RMA
$lang['create-rma'] 	  	 = 'Create RMA';
$lang['no-rma-is-available-for-this-order,'] = "no rma is available for this order,";

$lang['Staut'] = "Staut";
$lang['total gain per month'] = "total gain per month";
$lang['Last CRBT'] = "Last CRBT";
$lang['at'] = "at";
$lang['DH'] = "DH";
$lang['total amount delivered'] = "Total amount delivered";
$lang['Orders delivered'] = "Orders delivered";
$lang['Orders returned'] = "Orders returned";
$lang['return rate'] = "Return rate";
$lang['Bonus'] = "Bonus";
$lang['DELIVERY RATES'] = "DELIVERY RATES";
$lang['Freelance shipper'] = "Freelance shipper";
$lang['Amount delivered'] = "Amount delivered";
$lang['Shipper gain'] = "Shipper gain";
$lang['Payment'] = "Payment";
$lang['Batches'] = "Batches";
$lang['Delivere at'] = "Delivere at";
$lang['Reviews'] = "Reviews";
$lang['Download'] = "Download";
$lang["Invoice number"]   = 'Invoice number';
$lang['file type'] = "file type";
$lang['number of orders'] = "number of orders";

// Batchs
$lang['All Batches'] = "All Batchs";
$lang['Batches Management'] = "Batchs Management";
$lang['Batches List'] = "Batches List";
$lang['Add Batch'] = "Add Batch";
$lang['Edit Batch'] = "Edit Batch";
$lang['Batch'] = "Batch";
$lang['Dimension'] = "Dimension";

// Events
$lang['New event'] = 'New Event';
$lang['New event was added for you'] = 'A new event was added for you by %s: %s at %s';
$lang['New recurring event was added for you'] = 'A new recurring event was added for you by %s: %s at %s';

$lang['Total selected'] = "Total selected";
$lang['Choose shipper first'] = "Choose shipper first";
$lang['Date of assignment'] = "Date of assignment";
$lang['Choose shipper'] = "Choose shipper";
$lang['Choose file type'] = "Choose file type";
$lang['Interval'] = "Interval";
$lang['update stock'] = "Update stock";


// validation fields
$lang['first_name'] 	  	 = 'First name';
$lang['last_name'] 	  	 = 'Last name';
$lang['shipping method'] 	  	 = 'Shipping method';
$lang['method description'] 	  	 = 'Method description';
$lang['Department'] 	  	 = 'Department';
$lang['Title'] 	  	 = 'Title';
$lang['Status'] 	  	 = 'Status';
$lang['Priority'] 	  	 = 'Priority';
$lang['Agent'] 	  	 = 'Agent';
$lang['Message'] 	  	 = 'Message';
$lang['Sender name'] 	  	 = 'Sender name';
$lang['Sender e-mail'] 	  	 = 'Sender e-mail';
$lang['Subject'] 	  	 = 'Subject';
$lang['Content'] 	  	 = 'Content';
$lang['Macro'] 	  	 = 'Macro';
$lang['Returned to client'] = "Returned to client";
$lang['Supplier forwarded'] = "Supplier forwarded";
$lang['Defective stock transfer'] = "Defective stock transfer";
$lang['Choose the batch'] = "Choose the batch";
$lang['select batch from list of orders to show'] 	  	 = 'select batch from list of orders to show';
$lang['Scan order'] 	  	 =  'Scan la commande';
$lang['put the order inside his batch'] 	  	 =  'put the order inside his batch';
$lang['Orders'] = 'Orders';
$lang['order scanned successfully'] = 'Order scanned successfully';
$lang['order scanned'] = 'Order scanned';
$lang['product scanned'] = 'Product scanned';
$lang['wallet'] = 'wallet';
$lang['type'] = 'type';
$lang['delivery'] = 'delivery';
$lang['Add to wallet'] = 'Add to wallet';
$lang['paid'] = 'paid';
$lang['transfer'] = 'transfer';
$lang['cash'] = 'cash';
$lang['Check'] = 'Check';
$lang['Are you sure?'] = 'Are you sure?';
$lang['You won\'t be able to revert this!'] = 'You won\'t be able to revert this!';
$lang['yes'] = 'yes';
$lang['Shipper has been paid'] = 'Shipper has been paid';
$lang['There is no'] = 'There is no';
$lang['collect'] = 'Collect';
$lang['select all'] = 'Select all';
$lang['deselect all'] = 'Deselect all';
$lang['Not scanned'] = 'Not scanned';
$lang['scanned'] = 'scanned';
$lang['customer_id'] 	  	 = 'Customer';
$lang['store_id'] 	  	 = 'Store';
$lang['product_ids'] 	  	 = 'Products';
$lang['shipping_firstname'] 	  	 = 'Shipping firstname';
$lang['shipping_lastname'] 	  	 = 'Shipping lastname';
$lang['shipping_city'] 	  	 = 'Shipping city';
$lang['shipping_country'] 	  	 = 'Shipping country';
$lang['shipping_street'] 	  	 = 'Shipping street';
$lang['shipping_phone_number'] 	  	 = 'shipping phone number';
$lang['billing_firstname'] 	  	 = 'Billing firstname';
$lang['billing_lastname'] 	  	 = 'Billing lastname';
$lang['billing_city'] 	  	 = 'Billing city';
$lang['billing_country'] 	  	 = 'Billing country';
$lang['billing_street'] 	  	 = 'Billing street';
$lang['billing_phone_number'] 	  	 = 'Billing phone number';
$lang['product_ids'] 	  	 = 'Products';
$lang['product_qtys'] 	  	 = 'Product qtys';
$lang['payment_method'] 	  	 = 'Payment method';
$lang['shipping_method'] 	  	 = 'Shipping method';

// create order
$lang['firstname']      =   'Firstname';
$lang['lastname']      =   'Lastname';
$lang['prefix']      =   'Prefix';
$lang['suffix']      =   'Suffix';
$lang['company']      =   'Company';
$lang['ice']      =   'VAT ID';
$lang['group']      =   'Group';
$lang['row_subtotal']      =   'Row subtotal';
$lang['name']      =   'Name';
$lang['add-new-address']      =   'Add new address';
$lang['add-new-customer']      =   'Add new customer';
$lang['discount']      =   'Discount';
$lang['stores']      =   'Stores';
$lang['customers']      =   'Customers';
$lang['products ordered']      =   'Products ordered';
$lang['create-order']      =   'Create order';
$lang['edit-order']      =   'Edit order - ';
$lang['Choose-a-customer']      =   'Choose a customer';
$lang['Choose-a-stores']      =   'Choose a Stores';
$lang['Id']      =   'ID';
$lang['add-products']  = 'Add products';
$lang['arome']  = 'Aroma';
$lang['downloadable']  = 'Downloadable';
$lang['simple']  = 'Simple';
$lang['configurable']  = 'Configurable';
$lang['bundle']  = 'Bundle';
$lang['product-type']  = 'Product type';
$lang['address_id']  = 'Address';
$lang['custome_price']  = 'Custome price';
$lang['apply']  = 'Apply';
$lang['MAD']  = ' MAD';
$lang['related-products']  = 'Related products';
$lang['configure-the-product']  = 'Configure the product';
$lang['choose-an-option']   =   'Choose an option...';
$lang['this-is-a-required-field']   =   'This is a required field';
$lang['same-as-billing-address']   =   'Same as billing address';
$lang['remove']   =   'Remove';
$lang['update-items-selected']   =   'Update selected items';
$lang['update-qty'] = "Update qty";
$lang['choose-a-currency']   =   'Choose a currency...';
$lang['currency']   =   'Currency';
$lang['Sorry,-no-quotes-are-available-for-this-order-at-this-time.']   =   'Sorry, no quotes are available for this order at this time.';
$lang['payment-by-credit-card']   =   'Payment by credit card';
$lang['paiement-à-la-livraison-"-Contre-Remboursement-"']   =   'Payment on delivery " Contre Remboursement "';
$lang['counting-didn\'t-start-yet']   =   'Counting didn\'t start yet';
$lang['Order address has been changed by '] = 'Order address has been changed by ';
$lang['of department '] = 'of department ';
$lang['of group '] = 'of department ';
$lang['Invoice has been created by'] = 'Invoice has been created by';
$lang['Shipment has been created by'] = 'Shipment has been created by';
// $lang['ERP credit memo has been created along with a ticket by'] = 'ERP credit memo has been created along with a ticket by';
// $lang['ERP invoice has been created by'] = 'ERP invoice has been created by ';
$lang['Credit memo has been created by %s of department %s'] = 'Credit memo has been created by %s of department %s';
$lang['Credit memo has been created by'] = 'Credit memo has been created by %s of department %s';
$lang['ERP credit memo has been created along with a ticket by'] = 'ERP credit memo has been created along with a ticket by';
// $lang['ERP credit memo has been created along with a ticket by %s of department %s'] = 'ERP credit memo has been created along with a ticket by %s of department %s';
$lang['Invoice has been created by %s of department %s'] = 'Invoice has been created by %s of department %s';
$lang['Invoice has been created by'] = 'Invoice has been created by %s of department %s';
$lang['ERP invoice has been created by'] = 'ERP invoice has been created by %s of department %s';
$lang['ERP invoice has been created by %s of department %s'] = 'ERP invoice has been created by %s of department %s';
$lang['Order status has been changed by'] = 'Order status has been changed by %s of department %s';
$lang['Order status has been changed by %s of department %s'] = 'Order status has been changed by %s of department %s';
$lang['Order address has been changed by'] = 'Order address has been changed by %s of department %s';
$lang['Order address has been changed by %s of department %s'] = 'Order address has been changed by %s of department %s';
$lang['Geolocation request has been sent by'] = 'Geolocation request has been sent by %s of department %s';
$lang['Geolocation request has been sent by %s of department %s'] = 'Geolocation request has been sent by %s of department %s';
$lang['Order-shipping-method-has-been-changed-by'] = 'Order shipping method has been changed by %s of department %s';
$lang['Order-shipping-method-has-been-changed-by %s of department %s'] = 'Order shipping method has been changed by %s of department %s';
$lang['Shipment has been created by'] = 'Shipment has been created by %s of department %s';
$lang['Shipment has been created by %s of department %s'] = 'Shipment has been created by %s of department %s';
$lang['Ticket was created by'] = 'Ticket was created by %s of department %s';
$lang['Ticket was created by %s of department %s'] = 'Ticket was created by %s of department %s';
$lang['The Order is canceled and put back in stock by'] = 'The Order is canceled and put back in stock by';

$lang[''] = '';

$lang['save-in-address-book'] = 'Save in address book';
$lang['This product is currently out of stock.'] = 'This product is currently out of stock.';
$lang['The maximum quantity allowed for purchase is'] = 'The maximum quantity allowed for purchase is';
$lang['Records found'] = 'Record (s) found';
$lang['selected orders'] = 'Selected orders';
$lang['History'] = 'History';
$lang['Batch will be canceled'] = 'Batch will be canceled';
$lang['Your work has been saved'] = 'Your work has been saved';
$lang['Please select an order'] = 'Please select an order';
$lang['No selected orders'] = 'No selected orders';
$lang['Shout by'] = 'Shout by';
$lang['Order %s address has been changed'] = 'Order %s address has been changed';

$lang['please-specify-a-valid-city'] = 'Please specify a valid city';
$lang['deselect-all-products'] = 'Deselect all products';
$lang['link-to-previous-order'] = 'Link to the previous order';
$lang['link-to-new-order'] = 'Link to the new order';
$lang['you have scanned %s items and this exceeds the ordered quantity'] = 'you have scanned %s items and this exceeds the ordered quantity';
$lang['This bar code is not attributed to any product in this order. Please try with a correct product'] = 'This bar code is not attributed to any product in this order. Please try with a correct product';
$lang['Error'] = 'Error';
$lang['to'] = 'to';
$lang['This order is already in preparation'] = 'This order is already in preparation';


// Batch states
$lang['batch_state'] = 'State';
$lang['batch_state_new'] = 'New';
$lang['batch_state_processing'] = 'Processing';
$lang['batch_state_closing'] = 'Closing';
$lang['batch_state_canceled'] = 'Canceled';

// Batch statuses
$lang['batch_status'] = 'Status';
$lang['batch_status_open'] = 'Open';
$lang['batch_status_loading'] = 'Loading';
$lang['batch_status_in_preparation'] = 'In preparation';
$lang['batch_status_ready_to_ship'] = 'Ready to ship';
$lang['batch_status_in_delivery'] = 'In delivery';
$lang['batch_status_delivered'] = 'Delivered';
$lang['batch_status_orders_collected'] = 'Orders collected';
$lang['batch_status_payed'] = 'Payed';
$lang['batch_status_completed'] = 'Completed';
$lang['batch_status_canceled'] = 'Canceled';
$lang['batch_status_canceled_and_returned'] = 'Canceled and returned';
$lang['batch_status_refused'] = 'Refused';

$lang['batch_comment'] = 'Comment';



// Profiles
$lang['super_admin'] = 'super admin';
$lang['all payments'] = 'all payments';
$lang['kg'] = 'kg';
$lang['assigned'] = 'Assigned';

// Packing
$lang['Warning! FRAGILE'] = ' Warning! FRAGILE';
$lang['defective_stock'] = 'Defective Stock';
$lang['Total Scanned Quantities'] = 'Total Scanned Quantities';
$lang['preparation'] = 'preparation';








