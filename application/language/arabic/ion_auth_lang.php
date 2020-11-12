<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - Arabic
*
* Author: Emad Elsaid
* 		  blazeeboy@gmail.com
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  30.08.2010
*
* Description:  Arabic language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = 'تم انشاء حسابك بنجاح';
$lang['account_creation_unsuccessful']          = 'حدث خطأ اثناء انشاء حسابك لدينا';
$lang['account_creation_duplicate_email'] 	    = 'هذا البريد الإلكترونى تم استخدامه من قبل او غير صحيح';
$lang['account_creation_duplicate_identity']    = 'اسم المستخدم تم التسجيل به من قبل او غير صحيح';
$lang['account_creation_missing_default_group'] = 'Default group is not set';
$lang['account_creation_invalid_default_group'] = 'Invalid default group name set';



// Password
$lang['password_change_successful']   = 'تم تغيير كلمة السر';
$lang['password_change_unsuccessful'] = 'لا يمكن تغيير كلمة السر';
$lang['forgot_password_successful']   = 'تم ارسال بريد لإستعادة كلمة السر';
$lang['forgot_password_unsuccessful'] = 'لا يمكن استعادة كلمة السر';

// Activation
$lang['activate_successful']            = 'تم تفعيل حسابك';
$lang['activate_unsuccessful']          = 'لا يمكن تفعيل حسابك';
$lang['deactivate_successful']          = 'تم إيقاف حسابك';
$lang['deactivate_unsuccessful']        = 'لا يمكن إيقاف حسابك';
$lang['activation_email_successful']    = 'تم إرسال بريد التفعيل';
$lang['activation_email_unsuccessful']  = 'لا يمكن ارسال بريد التفعيل';
$lang['deactivate_current_user_unsuccessful']= 'You cannot De-Activate your self.';

// Login / Logout
$lang['login_successful']             = 'تم تسجيل الدخول بنجاح';
$lang['login_unsuccessful']           = 'معلومات الدخول غير صحيحة';
$lang['login_unsuccessful_not_active']= 'Account is inactive';
$lang['login_timeout']                = 'Temporarily Locked Out.  Try again later.';
$lang['logout_successful']            = 'تم تسجيل خروجك';

// Account Changes
$lang['update_successful'] 		 	 = 'تم تعديل معلومات حسابك';
$lang['update_unsuccessful'] 		 	 = 'لا يمكن تعديل معلومات الحساب';
$lang['delete_successful'] 		 	 = 'تم إلغاء المستخدم';
$lang['delete_unsuccessful'] 		 	 = 'لا يمكن إلغاء المستخدم';

// Groups
$lang['group_creation_successful']  = 'Group created Successfully';
$lang['group_already_exists']       = 'Group name already taken';
$lang['group_update_successful']    = 'Group details updated';
$lang['group_delete_successful']    = 'Group deleted';
$lang['group_delete_unsuccessful'] 	= 'Unable to delete group';
$lang['group_delete_notallowed']    = 'Can\'t delete the administrators\' group';
$lang['group_name_required'] 		= 'Group name is a required field';
$lang['group_name_admin_not_alter'] = 'Admin group name can not be changed';

// Activation Email
$lang['email_activation_subject']            = 'Account Activation';
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';
// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Forgotten Password Verification';
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';
// New Password Email
$lang['email_new_password_subject']          = 'New Password';
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';

// Navigation Bar
$lang['Sales'] 	  	 = 'البيع';
$lang['Orders'] 	  	 = 'الطلبيات';
$lang['All Users'] 	  	 = 'جميع المستخدمين';
$lang['Orders Preparation'] 	  	 = 'تحضير الطلبيات';
$lang['Shipping'] 	  	 = 'الشحن';
$lang['Manage Sellers'] 	  	 = 'إدارة البائعين';
$lang['Delivery Management'] 	  	 = 'إدارة التسليم';

$lang['Settings'] 	  	 = 'الإعدادات';


// DataTable Users
$lang['User'] 	  	 = 'المستخدم';
$lang['Users'] 	  	 = ' قإمة المستخدمين ';
$lang['Users List'] 	  	 = 'المستخدمين';
$lang['Users Management'] 	  	 = ' إدارة المستخدمين';
$lang['Cin'] 	  	 = 'رقم البطاقة الوطنية';
$lang['Email'] 	  	 = 'البريد الإلكتروني';
$lang['Phone'] 	  	 = 'الهاتف';
$lang['Groupe'] 	  	 = 'المجموعة';
$lang['Statut'] 	  	 = 'الحالة';
$lang['Active'] 	  	 = 'مفعل';
$lang['Inactive'] 	  	 = 'غير مفعل';
// Groups
$lang['Add User'] 	  	 = 'إضافة مستخدم';
$lang['Select Groupe Of User'] 	  	 = 'إختيار مجموعة المستخدم';
$lang['shipper'] 	  	 = 'خدمة التوصيل';
$lang['merchant'] 	  	 = 'تاجر';
$lang['customer_service'] 	  	 = 'خدمة الزبائن';
$lang['admin'] 	  	 = 'الادارة';
$lang['warehouse'] 	  	 = 'مستودع';
$lang['relaypoint'] 	  	 = 'نقطة التتابع';
// Buttons
$lang['Next'] 	  	 = 'التالي';
$lang['Close'] 	  	 = 'إغلاق';
// Add User
$lang['Add shipper'] 	  	 = 'أضف فتى توصيل';
$lang['General'] 	  	 = 'عام';
$lang['Geniral information'] 	  	 = ' معلومات عامة';
$lang['Account Information'] 	  	 = ' معلومات الحساب';
$lang['first_name'] 	  	 = 'الإسم العائلي';
$lang['last_name'] 	  	 = 'الإسم الشخصي';
$lang['Password'] 	  	 = 'كلمة المرور';
$lang['Confirm Password'] 	  	 = ' تأكيد كلمة المرور ';
$lang['Detail informations'] 	  	 = 'معلومات مفصلة';
$lang['city'] 	  	 = 'المدينة';
$lang['Date Of Birth'] 	  	 = 'تاريخ الإزدياد';
$lang['Vehicle'] 	  	 = 'العربة';
$lang['care'] 	  	 = 'سيارة';
$lang['motorbike'] 	  	 = 'دراجة نارية';
$lang['bank information'] 	  	 = 'المعلومات المصرفية';
$lang['bank name'] 	  	 = 'اسم البنك';
$lang['bank account number'] 	  	 = 'رقم الحساب المصرفي';
$lang['bank account title'] 	  	 = 'عنوان الحساب المصرفي';
$lang['deposition'] 	  	 = 'إيداع';
// Orders
$lang['Order'] 	  	 = 'طلبية';
$lang['Orders'] 	  	 = 'الطلبيات';
$lang['Order nmber'] 	  	 = 'رقم الطلب';
$lang['Overview'] 	  	 = 'نضرة عامة';
$lang['invoice-and-shipping'] 	  	 = 'الفاتورة والشحن';
$lang['shipping'] 	  	 = 'الشحن';
$lang['billing'] 	  	 = 'الفوترة';
$lang['payment'] 	  	 = 'الدفع';
$lang['Comments'] 	  	 = 'تعليقات';
$lang['rma'] 	  	 = 'RMA';
$lang['dropship'] 	  	 = 'DropShip';
$lang['Tracking'] 	  	 = 'تتبع';
$lang['Comment'] 	  	 = 'التعليق';
$lang['Customer'] 	  	 = 'الزبون';
$lang['Information'] 	  	 = 'معلومات';
$lang['shipments'] 	  	 = 'شحنات';
$lang['shipment'] 	  	 = 'الشحنة';
$lang['items-to-ship'] 	  	 = 'منتجات للشحن';
$lang['Client name'] 	  	 = 'إسم الزبون';
$lang['Address'] 	  	 = 'العنوان';
$lang['address'] 	  	 = 'العنوان';
$lang['Products'] 	  	 = 'المنتجات';
$lang['pack']    = 'رزمة';
$lang['products-to-shipp'] 	  	 = 'المنتجات التي سيتم شحنها';
$lang['All products ordered'] 	  	 = 'جميع المنتجات المطلوبة';
$lang['shipping-handling-information'] 	  	 = 'معلومات الشحن';
$lang['payment-information'] 	  	 = 'معلومات الدفع';
$lang['order-currency-MAD'] 	  	 = 'تم تقديم الطلب باستخدام عملة الدرهم';
$lang['order-shippment-method-shop'] 	  	 = 'تم الاستلام من المتجر - مجانًا';
$lang['Offered'] 	  	 = 'مهدى';
$lang['order-shippment-method-express'] 	  	 = 'تم الاستلام من المتجر - مجانًا';
$lang['Express Delivery'] 	  	 = 'تسليم سريع';
$lang['order-payment-method-Payzone'] 	  	 = 'بايزون';
$lang['order-payment-method-cashondelivery'] 	  	 = 'الدفع عند الاستلام';
$lang['Order Totals'] 	  	 = 'إجمالي الطلب';
$lang['Paiement'] 	  	 = 'الدفع';
$lang['Sous-total'] 	  	 = 'المجموع';
$lang['Shipping cost'] 	  	 = 'تكلفة الشحن';
$lang['ID'] 	  	 = 'الرقم الخاص';
$lang['VAT'] 	  	 = 'ضريبة القيمة المضافة';
$lang['Total Paid'] 	  	 = 'مجموع المبالغ المدفوعة';
$lang['payment-method'] 	  	 = 'طريقة الدفع';
$lang['no-payment-information-required'] 	  	 = 'لا توجد معلومات الدفع المطلوبة';
$lang['Date'] 	  	 = 'التاريخ';
$lang['cashondelivery'] 	  	 = 'الدفع عند الاستلام';
$lang['Delivery in X hours'] = 'التوصيل خلال %s ساعة';
$lang['Delivery in X days'] = 'التوصيل خلال %s أيام';
$lang['X hours'] = '%s ساعة';
$lang['X days'] = '%s أيام';
// $lang['payzone_standard'] 	  	 = 'معيار بايزون';
$lang['date_start'] 	  	 = 'تاريخ البدء';
$lang['global filter'] 	  	 = 'المصفي العام';
$lang['save'] 	  	 = 'حفظ';
$lang['search'] 	  	 = 'بحث';
$lang['Reset Filter'] 	  	 = 'إعادة تعيين المصفي';
$lang['Action'] 	  	 = 'اجراء';
$lang['N°'] 	  	 = 'رقم';
$lang['Products'] 	  	 = 'المنتجات';
$lang['All products ordered'] 	  	 = 'جميع المشتريات';
$lang['warehouse'] 	  	 = 'المستودع';
$lang['Order Totals'] 	  	 = 'إجمالي الطلب';
$lang['Paiement'] 	  	 = 'الدفع';
$lang['Sous-total'] 	  	 = 'المجموع الاصلي';
$lang['Shipping cost'] 	  	 = 'تكاليف التوصيل';
$lang['VAT'] 	  	 = 'ضريبة القيمة المضافة';
$lang['Total Paid'] 	  	 = 'إجمالي المدفوع';
$lang['total'] 	  	 = 'مجموع';
$lang['product(s)'] 	  	 = 'منتج/منتجات';
$lang['Date'] 	  	 = 'التاريخ';
$lang['payzone_standard'] 	  	 = 'الدفع بالبطاقة';
$lang['date_start'] 	  	 = 'تاريخ البدء';
$lang['global filter'] 	  	 = 'بحت عام';
$lang['save'] 	  	 = 'حفظ';
$lang['search'] 	  	 = 'بحث';
$lang['Reset Filter'] 	  	 = 'تحديت';
$lang['Action'] 	  	 = 'إجراء';
$lang['N° Order'] 	  	 = 'رقم الطلب';
$lang['CRBT'] 	  	 = 'المبلغ';
$lang['change-status'] 	  	 = 'تغيير الحالة';
$lang['weight'] 	  	 = 'الوزن';
$lang['billing_address'] 	  	 = 'عنوان الفوترة'; //TODOO
$lang['shipping_address'] 	  	 = 'عنوان التسليم';
$lang['phone_number'] 	  	 = 'رقم الهاتف';
$lang['client_name'] 	  	 = 'اسم الزبون';
$lang['client_email'] 	  	 = 'البريد الإلكتروني للعميل';
$lang['client-information'] 	  	 = 'معلومات الزبون';
$lang['sku'] 	  	 = 'وحدة التخزين'; //TODOO check translation
$lang['product'] 	  	 = 'المنتج';
$lang['qty'] 	  	 = 'الكمية';
$lang['qty_in_stock'] 	  	 = 'الكمية في المخزون';
$lang['price'] 	  	 = 'السعر';
$lang['price-ttc'] 	  	 = 'السعر شامل';
$lang['date'] 	  	 = 'التاريخ';
$lang['expiry-date'] 	  	 = "تاريخ انتهاء الصلاحية";
$lang['reference'] 	  	 = 'المرجع';
$lang['products'] 	  	 = 'المنتجات';
$lang['carrier'] 	  	 = 'الناقل';
$lang['custom'] 	  	 = 'قيمة مخصصة';
$lang['shipping-cost'] 	  	 = 'تكاليف التوصيل';
$lang['magento-invoice'] 	  	 = 'فاتورة ماجنتو';
$lang['erp-invoice'] 	  	 = 'فاتورة ERP';
$lang['invoice'] 	  	 = 'فاتورة';
$lang['invoices'] 	  	 = 'الفواتير';
$lang["Invoice number"]   = 'رقم الفاتورة';
$lang['TOTAL SALES incl'] 	  	 = 'إجمالي المبيعات';
$lang['invoice-erp'] 	  	 = 'فاتورة ERP';
$lang['create-invoice'] 	  	 = 'إنشاء فاتورة';
$lang['CREDIT'] 	  	 = 'ائتمان';
$lang['created_at'] 	  	 = 'أنشئت في';
$lang['customer'] 	  	 = 'الزبون';
$lang['store'] 	  	 = 'المتجر';
$lang['manager'] 	  	 = 'المسير'; // TODOO look for the right translation
$lang['customer-comment'] 	  	 = 'تعليق العملاء';
$lang['supplier'] 	  	 = 'المتعهد';
$lang['order'] 	  	 = 'طلبية';
$lang['order-date'] 	  	 = 'تاريخ الطلب';
$lang['order-status'] 	  	 = 'حالة الطلب';
$lang['payment-status'] 	  	 = 'حالة السداد';
$lang['total-paid'] 	  	 = 'مجموع المبالغ المدفوعة';
$lang['total-due'] 	  	 = 'الاجمالي المستحق';
$lang['add-payment'] 	  	 = 'أضف دفعة';
$lang['payment-records'] 	  	 = 'سجلات الدفع';
$lang['amount'] 	  	 = 'المبلغ';
$lang['comment'] 	  	 = 'تعليق';
$lang['method'] 	  	 = 'الطريقة';
$lang['action'] 	  	 = 'عملية';
$lang['submit'] 	  	 = 'إرسال';
$lang['edit'] 	  	 = 'تعديل';
$lang['country'] 	  	 = 'البلد';
$lang['street'] 	  	 = 'العنوان';
$lang['zip-code'] 	  	 = 'رقم المنطقة البريدي';
$lang['request_geolocation'] 	  	 = 'طلب الموقع';
$lang['send_email'] 	  	 = 'إرسال رسالة إلكترونية';
$lang['print'] 	  	 = 'طبع';
$lang['call'] 	  	 = 'اتصل';
$lang['select-all'] 	  	 = 'تحديد الكل';
$lang['deselect-all'] 	  	 = 'الغاء تحديد الكل';
$lang['Payment'] 	  	 = 'دفع';
$lang['Image'] 	  	 = 'صورة';
$lang['Description'] 	  	 = 'وصف';
$lang['Scan'] 	  	 = 'مسح';
$lang['credit_memo'] 	  	 = 'الأصول';
$lang['creditmemo'] 	  	 = 'الأصول';
$lang['store_credit'] 	  	 = 'ائتمان في المتجر';
$lang['erp_credit_memo'] 	  	 = '(ERP) الأصول';
$lang['magento-refunded-items'] 	  	 = '(Magento)المنتجات المسترجعة';
$lang['refunded-items'] 	  	 = 'العناصر المستردة من ماجنتو';
$lang['refunded-items'] 	  	 = 'العناصر المستردة';
$lang['erp-refunded-items'] 	  	 = '(ERP) العناصر المستردة';
$lang['order-id'] 	  	 = 'الرقم الخاص بالطلب';
$lang['ticket-id'] 	  	 = 'الرقم الخاص بشكوى';
$lang['created-at'] 	  	 = 'أنشئ في';
$lang['ticket-messages'] 	  	 = 'رسائل الشكوى';
$lang['closed-ticket'] 	  	 = 'شكاية مغلقة';
$lang['ordered'] 	  	 = 'طلبت';
$lang['canceled'] 	  	 = 'ألغيت';
$lang['shipped'] 	  	 = 'شحنت';
$lang['save-changes'] 	  	 = 'احفظ التغييرات';
$lang['close'] 	  	 = 'أغلق';
$lang['not-notified'] 	  	 = 'لم يتم إخطار العميل';
$lang['is-notified'] 	  	 = 'تم إخطار العميل';
$lang['customer'] 	  	 = '';
$lang['add-new-order'] 	  	 = 'أضف طلبية جديدة';
$lang['reset-filter'] 	  	 = 'حذف الفلتر';
$lang['search-by-name-city-number-status-order'] 	  	 = 'ابحث بالاسم أو المدينة أو رقم الهاتف أو الحالة أو الطلب رقم';
$lang['by'] 	  	 = 'من قبل';
$lang['submit-order'] 	  	 = 'أرسل الطلب';
$lang['order-does-not-exist'] 	  	 = 'الطلب غير موجود';
$lang['coupon'] 	  	 = 'قسيمة';
$lang['coupon_code'] 	  	 = 'رمز القسيمة';
$lang['apply_coupon'] 	  	 = 'تفعيل القسيمة';

//credit memo
$lang['create-credit-memo'] 	  	 = 'إنشاء مذكرة دائنة';
$lang['order-command-date'] 	  	 = 'تاريخ الطلب';
$lang['purchased-on'] 	  	 = 'تم شراؤها في';
$lang['order-details'] 	  	 = 'تفاصيل الطلب';
$lang['customer-details'] 	  	 = 'تفاصيل الحساب';
$lang['billing-address'] 	  	 = 'عنوان وصول الفواتير';
$lang['shipping-address'] 	  	 = 'عنوان الشحن';
$lang['products-to-refund'] 	  	 = 'المنتجات المراد استردادها';
$lang['client-name'] 	  	 = 'اسم العميل';
$lang['email'] 	  	 = 'البريد الإلكتروني';
$lang['client-group'] 	  	 = 'مجموعة العملاء';
$lang['groups'] 	  	 = 'المجموعات';
$lang['full-name'] 	  	 = 'الاسم الكامل';
$lang['paid-amount'] 	  	 = 'المبلغ المدفوع';
$lang['refund-amount'] 	  	 = 'المبلغ المسترد';
$lang['shipping-amount'] 	  	 = 'كمية مبلغ الشحن';
$lang['products-to-shipp'] 	  	 = 'المنتجات المراد شحنها';
$lang['shipping-refund'] 	  	 = 'مبلغ الشحن المسترد';
$lang['change-shipping-method'] = 'تغيير طريقة الشحن';
$lang['get-shipping-methods-and-rates'] = 'احصل على طرق الشحن والأسعار';
$lang['order-grand-total'] 	  	 = 'مجموع الحساب';
$lang['total-refunded'] 	  	 = 'إجمالي المبلغ المسترد';
$lang['add-comment'] 	  	 = 'أضف تعليق';
$lang['notify-customer'] = "أبلغ الزبون";
$lang['appear-to-shipper'] = "يظهر للشاحن";
$lang['unassign-shipper'] = "إلغاء تعيين الشاحن";
$lang['subtotal'] 	  	 = 'المبلغ الإجمالي';
$lang['refund-shipping-inc-tax'] 	  	 = '( رد أموال التسليم (بما في ذلك الضرائب';
$lang['adjustment-refund'] 	  	 = 'سداد رسوم الملف';
$lang['adjustment-fee'] 	  	 = 'رسوم الملف';
$lang['grand-total-exc-tax'] 	  	 = '(المبلغ الإجمالي(غير شامل ضريبة';
$lang['tax'] 	  	 = 'ضريبة';
$lang['grand-total-inc-tax'] 	  	 = '(المبلغ الإجمالي(شامل ضريبة';
$lang['return-to-stock'] 	  	 = 'اعادة إلى المخزن';
$lang['qty-to-refund'] 	  	 = 'الكمية المستردة';
$lang['tax-amount'] 	  	 = 'قيمة الضريبة';
$lang['discount-amount'] 	  	 = 'مقدار الخصم';
$lang['change-status'] 	  	 = 'تغيير الحالة';
$lang['in-resolution'] 	  	 = 'في تقدم';
$lang['refunded'] 	  	 = 'تم رد الأموال';
$lang['exchanged'] 	  	 = 'تم التبادل';
$lang['comment-panel'] 	  	 = 'لوحة التعليق';
$lang['this-order-can-not-have-a-credit-memo-yet,'] 	  	 = 'لا يمكن أن يحتوي هذا الطلب على مذكرة ائتمان،';
$lang['an-invoice-is-required'] 	  	 = 'مطلوب فاتورة';
$lang['no-erp-credit-memo-has-been-created,'] 	  	 = 'لم يتم إنشاء مذكرة ائتمان (erp) ،';
$lang['if-you-wish-to-create-one,'] 	  	 = 'إذا كنت ترغب في إنشاء واحد ،';
$lang['click-here'] 	  	 = 'انقر هنا';
$lang['attention'] 	  	 = 'انتباه';
$lang['credit_memo_magento'] 	  	 = '(مذكرة دائنة (ماجنتو';


// Tickets
$lang['priority'] 	  	 = 'أولية';
$lang['department'] 	  	 = 'القسم';
$lang['sent-from'] 	  	 = 'ارسلت من';
$lang['normal'] 	  	 = 'عادي';
$lang['medium'] 	  	 = 'متوسط';
$lang['hight'] 	  	 = 'عالي';
$lang['urgent'] 	  	 = 'مستعجل';
$lang['emergency'] 	  	 = 'طارئ';
$lang['critical'] 	  	 = 'حرج';
$lang['on hold'] 	  	 = 'في الانتظار';
$lang['open'] 	  	 = 'مفتوح';
$lang['ticket'] 	  	 = 'شكوى';
$lang['agent'] 	  	 = 'الوكيل';
$lang['updated_at'] 	  	 = 'اخر تحديث';
$lang['Created_at'] 	  	 = 'أنشئت في';
$lang['sender_name'] 	  	 = 'اسم المرسل';
$lang['sender_email'] 	  	 = 'البريد الإلكتروني للمرسل';
$lang['sender'] 	  	 = 'المرسل';
$lang['resolved'] 	  	 = 'Resolved';
$lang['ticket-status'] 	  	 = 'حالة الشكوى';
$lang['additional-informations'] 	  	 = 'المعلومات إضافية';
$lang['information-related-to-client'] 	  	 = 'المعلومات المتعلقة بالشكوى';
$lang['write-reply'] 	  	 = 'اكتب الرد';
$lang['messages'] 	  	 = 'الرسائل';
$lang['quote'] 	  	 = 'اقتبس';
$lang['sent-by'] 	  	 = 'ارسلت من طرف';
$lang['client'] 	  	 = 'العميل';
$lang['update'] 	  	 = 'تعديل';
$lang['send'] 	  	 = 'إبعث';
$lang['response'] 	  	 = 'الرد';
$lang['ticket-title'] 	  	 = 'عنوان الشكوى';
$lang['new-ticket'] 	  	 = 'شكوى جديدة';
$lang['view-ticket'] 	  	 = 'شكوى';
$lang['tickets'] 	  	 = 'شكايات';
$lang['create-ticket'] 	  	 = 'إنشاء شكاية';
$lang['new'] 	  	 = 'شكوى جديدة';
$lang['macros'] 	  	 = 'نموذج بريد إلكتروني';
$lang['quote'] 	  	 = 'اقتبس';
$lang['no-tickets-has-been-created,'] 	  	 = 'لم يتم إنشاء أية شكايات ،';
$lang['unassigned'] 	  	 = 'غير معين';

// Actions
$lang['created'] 	  	 = 'أضيف';
$lang['create'] 	  	 = 'أضف';

// Invoice
$lang["this-order-doesn't-have-a-magento-invoice-yet,"] 	  	 = 'لا يحتوي هذا الطلب على فاتورة ماجنتو بعد ،';

// Records
$lang['records-found'] 	  	 = 'تسجيل';


// status
$lang['pending'] 	  	 = 'قيد الانتظار';
$lang['pending-orders'] 	  	 = 'طلبية قيد الانتظار';
$lang['orders-in-processing'] 	  	 = ' ...الطلبات قيد المعالجة';
$lang['attentedepaiement'] 	  	 = 'في انتظار الدفع';
$lang['awaiting_validation'] 	  	 = 'في انتظار التأكيد';
$lang['waiting'] 	  	 = 'معلقة';
$lang['validated'] = 'تم التحقق منها';
$lang['flagged_fraud'] = 'أمر احتيال';
$lang['in_preparation'] = 'قيد الإعداد';
$lang['ready_to_shipp'] = 'جاهز للشحن';
$lang['in_shipping'] = 'في الشحن';
$lang['pending_in_relay_point'] = 'عند نقطة التسليم';
$lang['failed_delivery'] = 'فشل التسليم';
$lang['delivered'] = 'سلمت';
$lang['complete'] = 'تلقى الدفع';
$lang['payable'] = 'مستحق الدفع';
$lang['billed_in_erp'] = 'تم إصدار فاتورة';
$lang['canceled'] = 'ألغيت';
$lang['cancelation'] = 'إلغاء';
$lang['returned'] = 'تم إرجاع الطلب وإلغائه';
$lang['rejected_by_quality_control'] = 'مرفوض';
$lang['waiting for validation'] = 'في انتظار التأكيد ';
$lang['cancel'] = 'إلغاء';
$lang['All'] = 'الكل';
$lang['return'] 	  	 =  'إرجاع';
$lang['delivery failure'] 	  	 =  'فشل تسليم';
$lang['to_be_canceled'] 	  	 =  'ليتم إلغاؤها';
$lang['prepared_and_canceled'] 	  	 =  'للإلغاء';
$lang['closed'] 	  	 =  'مغلق';

// texts 
$lang['there is'] 	  	 = 'يوجد';
$lang['day'] 	  	 = 'يوم';
$lang['Zone'] 	  	 = 'منطقة';
$lang['delay'] 	  	 = 'مهلة';
$lang['Preparation'] 	  	 = 'تجهيز';
$lang['Choose order'] 	  	 = 'اختر الطلب';
$lang['select order from list of orders to show'] 	  	 = 'حدد الطلب من قائمة الطلبات لإظهارها';
$lang['Scan Product'] 	  	 =  'مسح المنتج';
$lang['scan each  product in this order'] 	  	 =  'مسح كل منتج بهذا الطلب';
$lang['Print bill'] 	  	 =  'طباعة الفاتورة';
$lang['print bill for order and put it into the box'] 	  	 =  'طباعة الفاتورة ووضعها في الصندوق';
$lang['Print label'] 	  	 =  'طباعة الملصق';
$lang['print label and pick to the box of order'] 	  	 =  'طباعة الملصق وإلصاقه فوق الطلبية';

//actions
$lang['validate'] 	  	 = 'تأكيد';
$lang['Refused'] 	  	 = 'رفض';
$lang['Canceled and Received'] 	  	 = 'ألغيت واستلمت';


//Orders tracking modal tab

$lang['status'] = "الحالة";
$lang['Status'] = "الحالة";
$lang['shipment_date'] = "تاريخ الشحن";
$lang['shipper'] = "عامل التوصيل";
$lang['shipper_number'] = "رقم عامل التوصيل";
$lang['not_available_yet'] = "غير متوفر بعد";

// Email templates
$lang['email_templates'] = "نماذج بريد إلكتروني";
$lang['macros'] = "نماذج بريد إلكتروني";
$lang['subject'] = "الموضوع";
$lang['title'] = "العنوان";
$lang['content'] = "المحتوى";
$lang['delete'] = "حذف";
$lang['records_found'] = "النماذج الموجودة";
$lang['add_macro'] = "أضف نموذج بريد إلكتروني";
$lang['edit_macros'] = "عدل نموذج بريد إلكتروني";
$lang['add_email_template'] = "أضف نموذج بريد إلكتروني";
$lang['add'] = "أضف";
$lang['actions'] = "إجراءات";
$lang['search_here'] = "ابحث هنا";
$lang['All Shippers'] = "جميع رجال التوصيل";
$lang['Shippers Management'] = "إدارة الشاحنين";
$lang['Add Shipper'] = "إضافة رجل التوصيل";
$lang['Shipper'] = "رجل التوصيل";
$lang['add comment here ..'] = "أضف تعليق هنا";
$lang['Staut'] = "الحالة";
$lang['total gain per month'] = "إجمالي الربح في الشهر";
$lang['Last CRBT'] = "أخر دفع";
$lang['at'] = "في";
$lang['DH'] = "درهم";
$lang['total amount delivered'] = "المبلغ الإجمالي المسلم";
$lang['Orders delivered'] = "طلبية سلمت";
$lang['Orders returned'] = "الطلبيات الراجعة";
$lang['return rate'] = "معدل العائد";
$lang['Bonus'] = "علاوة";
$lang['DELIVERY RATES'] = "معدلات التسليم";
$lang['Freelance shipper'] = "رجل التوصل مستقل";
$lang['Amount delivered'] = "المبلغ المحصل";
$lang['Shipper gain'] = "ربح الموصل";
$lang['Payment'] = "الدفع";
$lang['Delivere at'] = "توصيل في";	
$lang['Reviews'] = "التعاليق";
$lang['Download'] = "تحميل";


// swal messages
$lang['Please add some text on the comment text area !'] = "يرجى إضافة بعض النص في منطقة نص التعليق !";
$lang['Warning !!'] = "Warning !!";
$lang['Great !!'] = "Great";
$lang['Comment was added successfully !'] = "تمت إضافة التعليق بنجاح!";
$lang['Something went wrong !'] = "هناك خطأ ما !";
$lang['Ticket has been updated Successfully'] = "تم تحديث التذكرة بنجاح";
$lang['Updated'] = "محدث";
$lang['Invalid qty to refund !!'] = "كمية المنتجات غير صحيحة";
$lang['Invalid qty to ship !!'] = "كمية الشحن غير صحيحة !!";
$lang['Credit memo created successfully !!'] = "تم إنشاء مذكرة الائتمان بنجاح !!";
$lang['Created !!'] = "انشئت";
$lang['The credit memo has been created successfully !'] = "تم إنشاء المذكرة الدائنة بنجاح !!";
$lang['Changed'] = "تغيرت";
$lang['Order status Successfully changed !!'] = "تغيرت حالة الطلب بنجاح !!";
$lang['Invoice created successfully !!'] = "تم إنشاء الفاتورة بنجاح !!";
$lang['The sms has been sent successfully !'] = "تم إرسال الرسالة القصيرة بنجاح!";
$lang['Sent !!'] = "أرسلت !!";
$lang['Something went wrong !!'] = "هناك خطأ ما !!";
$lang['this-order-has-an-invalid-status-!!'] = "هذه الطلبية لديها حالة غير صحيحة !!";
$lang['Can not create invoice for requested order, The status most be complete !!'] = "لا يمكن إنشاء فاتورة للطلب  !!";
$lang['Can not create invoice for requested order, This order doesn\'t exist !!'] = "لا يمكن إنشاء فاتورة للطلب، هذا الطلب غير موجود !!";
$lang['Can not create invoice for requested order, The order is still NEW !!'] = "لا يمكن إنشاء فاتورة، الطلب لا يزال جديدًا !!";
$lang['Magento Invoice doesn\'t exist'] = "فاتورة ماجنتوغير موجودة";
$lang['ERP Invoice already exist'] = "فاتورة ERP موجودة بالفعل";
$lang['Invoice created seccessfully'] = "تم إنشاء الفاتورة بنجاح";
$lang['Can not create credit memo for requested order !!'] = "لا يمكن إنشاء مذكرة دائنة للطلب  !!";
$lang['ERP Invoice does not exist'] = "فاتورة ERP غير موجودة";
$lang['Credit memo created seccessfully'] = "تم إنشاء مذكرة الائتمان بنجاح";
$lang['THIS TICKET HAS NO MESSAGE !!'] = "هذه الشكاية ليس لها رسالة !!";
$lang['Shipment already exists !!'] = "الشحنة موجودة بالفعل !!";
$lang['Shipment was created successfully'] = "تم إنشاء الشحنة بنجاح";
$lang['Can not create shipment for requested order !!'] = "!! لا يمكن إنشاء شحنة للطلبية";
$lang['you-have-changed-status-from-%s-to-%s-for-%d-order(s)'] 	  	 = 'لقد قمت بتغيير الحالة من <b> %s </b> إلى <b> %s </b> لـ <b> ٪d </b> طلب';
$lang['you-need-to-choose-at-least-one-order-to-change-status'] 	  	 = 'تحتاج إلى اختيار طلب واحد على الأقل لتغيير الحالة';
$lang['you-need-choose-a-status-in-order-to-complete-the-action'] 	  	 = 'تحتاج إلى اختيار الحالة لإكمال العملية';
$lang['Shipping-method-changed-to-express'] 	  	 = 'طريقة الشحن الجديدة : تسليم سريع';
$lang['Shipping-method-changed-to-shop'] 	  	 = 'طريقة الشحن الجديدة : الاستلام من المتجر';
$lang['shipment-can-not-be-created,-status-must-be-in-preparation'] = ' "لا يمكن إنشاء الشحنة ، يجب أن تكون الحالة "قيد الإعداد';
$lang['Can-not-create-invoice-for-requested-order,-The-status-must-be-"delivered" !!'] = ' "لا يمكن إنشاء فاتورة للطلب، يجب أن تكون الحالة "تم التسليم';
$lang['Order-shipping-method-has-been-changed-by'] = 'تم تغيير طريقة شحن الطلب من قبل ';
$lang['ERP invoice has been sent successfully !'] = ' !تم إرسال الفاتورة بنجاح';
$lang['certain-products-could-not-be-added'] = 'بعض المنتجات لم يتم اضافتها';

$lang["Order N° %s was created"]   = '٪s تم إنشاء  الطلبية رقم';
$lang["Invoice N° %d was created"]   = 'تم إنشاء الفاتورة بنجاح';
$lang["ERP Invoice with N° %d already exist"]   = 'فاتورة (ارب) موجودة بالفعل';
$lang["ERP Invoice N° %s was created"]   = 'تم إنشاء فاتورة (ارب) بنجاح';
$lang["Shipment N° %d was created"]   = '٪d تم إنشاء الشحنة رقم';
$lang["Credit memo N° %d was created"]   = ' %d تم إنشاء مذكرة دائنة رقم';
$lang["Order status changed to"]   = 'تغيرت حالة الطلب إلى';
$lang["Order address changed"]   = 'تم تغيير عنوان الطلب';
$lang["The sms has been sent"]   = 'تم إرسال الرسالة القصيرة';
$lang["Comment was added, with status"]   = 'تمت إضافة تعليق بالحالة :';
$lang["Added !!"]   = 'تمت الإضافة';
$lang["at-least-one-product-needs-to-be-selected"]   = 'يجب تحديد منتج واحد على الأقل';   
$lang["City name is incorrect"]   = 'اسم المدينة غير صحيح';
$lang["order-not-available"]   = 'الطلبية غير متوفرة';
$lang["this-order-can-not-be-modified"]   = 'لا يمكن تعديل هذا الطلب';

// RMA
$lang['create-rma'] 	  	 = 'RMA إنشاء';
$lang['no-rma-is-available-for-this-order,'] = "،(rma) لا يتوفر هذا الطلب على";
$lang['file type'] = "نوع الملف";
$lang['number of orders'] = "عدد الطلبات";

// Batchs
$lang['Batches'] = "دفعات";
$lang['All Batches'] = "جميع الدفعات";
$lang['Batches Management'] = "إدارة الدفعات";
$lang['Add Batch'] = "إضافة دفعة";
$lang['Edit Batch'] = "تحرير الدفعة";
$lang['Batch'] = "دفعة";


// Events
$lang['New event'] = 'حدث جديد';
$lang['New event was added for you'] = 'تم إضافة حدث جديد لك من قبل %s: %s في %s';
$lang['New recurring event was added for you'] = 'تم إضافة حدث متكرر جديد لك من قبل %s: %s في %s';
$lang['Dimension'] = "البعد";

$lang['Total selected'] = "الإجمالي المحدد";
$lang['Choose shipper first'] = "اختر الشاحن أولاً";
$lang['Date of assignment'] = "تاريخ التكليف";
$lang['Choose shipper'] = "اختر الشاحن";
$lang['Choose file type'] = "اختر نوع الملف";
$lang['Today'] = "اليوم";
$lang['Interval'] = "فترة";
$lang['update stock'] = "تحديث المخزون";

// validation fields
$lang['firstname'] 	  	 = 'الاسم الأول';
$lang['lastname'] 	  	 = 'الاسم العائلي';
$lang['shipping method'] 	  	 = 'طريقة الشحن';
$lang['method description'] 	  	 = 'وصف طريقة الشحن';
$lang['Department'] 	  	 = 'القسم';
$lang['Title'] 	  	 = 'العنوان';
$lang['Status'] 	  	 = 'الحالة';
$lang['dedicated-to-virtual-control'] 	  	 = 'مخصص لطلبيات الافتراضية';
$lang['Priority'] 	  	 = 'الأولوية';
$lang['Agent'] 	  	 = 'الوكيل';
$lang['Message'] 	  	 = 'الرسالة';
$lang['Sender name'] 	  	 = 'اسم المرسل';
$lang['Sender e-mail'] 	  	 = 'البريد الإلكتروني للمرسل';
$lang['Subject'] 	  	 = 'الموضوع';
$lang['Content'] 	  	 = 'المحتوى';
$lang['Macro'] 	  	 = 'بريد إلكتروني';
$lang['Returned to client'] = "إرجاع للزبون";
$lang['Supplier forwarded'] = "إرجاع للمورد";
$lang['Defective stock transfer'] = "نقل المخزون المعيب";
$lang['Choose the batch'] = "اختر الدفعة";
$lang['select batch from list of orders to show'] 	  	 = 'حدد الدفعة من قائمة الطلبات لإظهارها';
$lang['Scan order'] 	  	 =  'مسح الطلبية';
$lang['put the order inside his batch'] 	  	 =  'وضع الطلبية داخل دفعته';
$lang['Orders'] =  'طلبيات';
$lang['order scanned successfully'] = 'تم فحص الطلب بنجاح';
$lang['order scanned'] = 'طلبية فحصت';
$lang['product scanned'] = 'منتج فحص';
$lang['wallet'] = 'محفظة';
$lang['type'] = 'نوع';
$lang['delivery'] = 'توصيل';
$lang['Add to wallet'] = 'أضف إلى المحفظة';
$lang['paid'] = 'دفعت';
$lang['transfer'] = 'نقل';
$lang['cash'] = 'السيولة النقدية';
$lang['Are you sure?'] = 'هل أنت متأكد';
$lang['You won\'t be able to revert this!'] = 'لن تتمكن من التراجع عن هذا!';
$lang['yes'] = 'نعم';
$lang['Shipper has been paid'] = 'تم دفع الشاحن';
$lang['There is no'] = 'لا يوجد';
$lang['collect'] = 'تجميع';
$lang['select all'] = 'اختر الكل';
$lang['deselect all'] = 'الغاء تحديد الكل';
$lang['customer_id'] 	  	 = 'الزبون';
$lang['hours'] 	  	 = 'س';
$lang['minutes'] 	  	 = 'د';
$lang['store_id'] 	  	 = 'المتجر';
$lang['product_ids'] 	  	 = 'المنتجات';
$lang['shipping_firstname'] 	  	 = '(الاسم الأول (عنوان الفوترة';
$lang['shipping_lastname'] 	  	 = '(الاسم العائلي (عنوان الفوترة';
$lang['shipping_city'] 	  	 = '(المدينة (عنوان الفوترة';
$lang['shipping_country'] 	  	 = '(البلد (عنوان الفوترة';
$lang['shipping_street'] 	  	 = '(العنوان (عنوان الفوترة';
$lang['shipping_phone_number'] 	  	 = '(رقم الهاتف (عنوان الفوترة';
$lang['billing_firstname'] 	  	 = '(الاسم الأول(عنوان التسليم';
$lang['billing_lastname'] 	  	 = '(الاسم العائلي(عنوان التسليم';
$lang['billing_city'] 	  	 = '(المدينة(عنوان التسليم';
$lang['billing_country'] 	  	 = '(البلد(عنوان التسليم';
$lang['billing_street'] 	  	 = '(العنوان(عنوان التسليم';
$lang['billing_phone_number'] 	  	 = '(رقم الهاتف(عنوان التسليم';
$lang['product_qtys'] 	  	 = 'كمية المنتجات';
$lang['payment_method'] 	  	 = 'طريقة الدفع';
$lang['shipping_method'] 	  	 = 'طريقة التوصيل';

// create order
$lang['firstname']      =   'الاسم الأول';
$lang['lastname']      =   'الاسم العائلي';
$lang['prefix']      =   'Préfix';
$lang['suffix']      =   'Suffix';
$lang['company']      =   'Société';
$lang['ice']      =   'ICE';
$lang['group']      =   'المجموعة';
$lang['row_subtotal']      =   'المجموع الفرعي للصف';
$lang['name']      =   'الاسم الكامل';
$lang['add-new-address']      =   'أضف عنوانا جديدا';
$lang['add-new-customer']      =   'قم بإضافة عميل جديد';
$lang['discount']      =   'الخصم';
$lang['stores']      =   'المتاجر';
$lang['customers']      =   'العملاء';
$lang['products ordered']      =   'المنتجات المطلوبة';
$lang['products list']      =   'قائمة المنتجات';
$lang['products to order']      = 'المنتجات المطلوبة';
$lang['downloadable']  = 'للتحميل';
$lang['simple']  = 'بسيط';
$lang['configurable']  = 'Configurable';
$lang['bundle']  = 'رزمة';
$lang['product-type']  = 'نوع المنتوج';
$lang['create-order']      =   'أضف الطلب';
$lang['edit-order']      =   'تعديل الطلبية -';
$lang['Choose-a-customer']      =   'اختر الزبون';
$lang['Choose-a-store']      =   'اختر متجرًا';
$lang['Id']      =   'الرقم الخاص';
$lang['add-products']  = 'أضف منتجات';
$lang['arome']  = 'النكهة';
$lang['selected'] = "إختيرت";
$lang['Welcome to the Preparation area'] = 'مرحبًا بكم في منطقة التحضير';
$lang['address_id']  = 'العنوان';
$lang['custome_price']  = 'سعر مخصص';
$lang['apply']  = 'تطبيق';
$lang['MAD']  = ' دم';
$lang['related-products']  = 'منتجات ذات صله';
$lang['configure-the-product']  = 'تهيئة المنتج';
$lang['choose-an-option']   =   'اختر ميزة...';
$lang['this-is-a-required-field']   =   '.هدا الحقل اجباري';
$lang['same-as-billing-address']   =   'نفس عنوان ارسال الفواتير';
$lang['remove']   =   'إزالة';
$lang['update-items-selected']   =   'تحديث العناصر المحددة';
$lang['update-qty'] = "تحديث الكمية";
$lang['choose-a-currency']   =   'اختر عملة...';
$lang['currency']   =   'العملة';
$lang['Sorry,-no-quotes-are-available-for-this-order-at-this-time.']   =   'لا توجد طريقة توصيل متاحة.';
$lang['payment-by-credit-card']   =   'الدفع ببطاقة الائتمان';
$lang['paiement-à-la-livraison-"-Contre-Remboursement-"']   =   'الدفع عند الاستلام "الدفع عند الاستلام"';

$lang['counting-didn\'t-start-yet']   =   'لم يبدأ العد بعد';
$lang['ship'] 	  	 = 'اشحن';
$lang['This product is currently out of stock.'] = 'لقد نفذ هذا المنتج حاليا.';
$lang['The maximum quantity allowed for purchase is'] = 'الكمية القصوى المسموح بها للشراء هي';
$lang['save-in-address-book'] = 'حفظ في دفتر العناوين';
$lang['Records found'] = 'تم العثور على';
$lang['selected orders'] = 'الطلبات المختارة';
$lang['History'] = 'التاريخ';
$lang['Batch will be canceled'] = 'سيتم إلغاء الدفعة';
$lang['Your work has been saved'] = 'تم حفظ عملك';
$lang['Please select an order'] = 'الرجاء تحديد طلب';
$lang['No selected orders'] = 'لا توجد طلبيات محددة';
$lang['Shout by'] = 'من طرف';

$lang['Order address has been changed by '] = 'تم تغيير عنوان الطلبية من قبل';
$lang['of department '] = 'من مجموعة ';
$lang['of group '] = 'من مجموعة ';
$lang['Invoice has been created by'] = 'تم إنشاء الفاتورة بواسطة ';
$lang['Shipment has been created by'] = 'تم إنشاء الشحنة بواسطة ';
$lang['L\'avoir ERP a été créée avec un ticket par'] = 'تم إنشاء مذكرة ائتمان ERP مع بطاقة بواسطة ';
$lang['ERP invoice has been created by'] = 'تم إنشاء فاتورة ERP بواسطة ';
$lang['Credit memo has been created by '] = 'تم إنشاء مذكرة الائتمان بواسطة ';
$lang['Order %s address has been changed'] = 'ثم تحديث عنوان s%';

$lang[''] = '';

$lang['Credit memo has been created by %s of department %s'] = ' %s من مجموعة %s تم إنشاء مذكرة الائتمان بواسطة';
// $lang['ERP credit memo has been created along with a ticket by %s of department %s'] = ' %s من مجموعة %s تم إنشاء مذكرة ائتمان تخطيط موارد المؤسسات مع التذكرة من قبل';
$lang['Invoice has been created by %s of department %s'] = ' %s من مجموعة %s تم إنشاء الفاتورة بواسطة';
$lang['ERP invoice has been created by %s of department %s'] = ' %s من مجموعة %s تم إنشاء فاتورة ERP بواسطة';
$lang['Order status has been changed by %s of department %s'] = ' %s من مجموعة %s تم تغيير حالة الطلب من قبل';
$lang['Order address has been changed by %s of department %s'] = ' %s من مجموعة %s تم تغيير عنوان الطلبية من قبل';
$lang['Geolocation request has been sent by %s of department %s'] = ' %s من مجموعة %s تم إرسال طلب تحديد الموقع الجغرافي من قبل';
$lang['Order-shipping-method-has-been-changed-by %s of department %s'] = ' %s من مجموعة %s تم تغيير طريقة شحن الطلب من قبل ';
$lang['Shipment has been created by %s of department %s'] = ' %s من مجموعة %s تم إنشاء الشحنة بواسطة ';
$lang['Ticket was created by %s of department %s'] = ' %s من مجموعة %s تم إنشاء شكاية من قبل';
$lang['The Order is canceled and put back in stock by'] = 'تم إلغاء الطلب وإعادته إلى المخزون';
$lang['please-specify-a-valid-city'] = 'الرجاء تحديد مدينة متوفرة في وحدة البيانات';
$lang['deselect-all-products'] = 'قم بإلغاء تحديد جميع المنتجات';
$lang['link-to-previous-order'] = 'الرابط إلى الطلبية السابقة';
$lang['link-to-new-order'] = 'الرابط إلى الطلبية الجديدة';
$lang['you have scanned %s items and this exceeds the ordered quantity'] = 'لقد قمت بمسح %s من العناصر وتجاوزت الكمية المطلوبة';
$lang['Download'] = 'تحميل';
$lang['This bar code is not attributed to any product in this order. Please try with a correct product'] = 'لا يُنسب هذا الرمز الشريطي أي منتج في هذا الطلب. يرجى المحاولة مع المنتج الصحيح';
$lang['Error'] = 'خطأ';
// Batch states
$lang['batch_state'] = 'الوضع';
$lang['batch_state_new'] = 'جديد';
$lang['batch_state_processing'] = 'في المعالجة';
$lang['batch_state_closing'] = 'إغلاق';
$lang['batch_state_canceled'] = 'ملغى';

// Batch statuses
$lang['batch_status'] = 'الحالة';
$lang['batch_status_open'] = 'مفتوح';
$lang['batch_status_loading'] = 'جار التحميل';
$lang['batch_status_in_preparation'] = 'قيد التحضير';
$lang['batch_status_ready_to_ship'] = 'جاهز للشحن';
$lang['batch_status_in_delivery'] = 'جاري الارسال';
$lang['batch_status_delivered'] = 'تم التوصيل';
$lang['batch_status_orders_collected'] = 'تم جمع الطلبات';
$lang['batch_status_payed'] = 'تم الدفع';
$lang['batch_status_completed'] = 'اكتمل';
$lang['batch_status_canceled'] = 'ملغى';
$lang['batch_status_canceled_and_returned'] = 'تم إلغاؤه وإعادته';
$lang['batch_status_refused'] = 'رفض';

$lang['batch_comment'] = 'تعليق';

$lang['to'] = 'إلى';


// Profiles
$lang['super_admin'] = 'مشرف';
$lang['all payments'] = 'جميع المدفوعات';
$lang['kg'] = 'كلغ';
$lang['assigned'] = 'تعيين';


// Packing
$lang['Warning! FRAGILE'] = ' إحذر منتج هش';

$lang['This order is already in preparation'] = 'هذا الطلب قيد الإعداد';
$lang['defective_stock'] = 'مخزون معيب';
$lang['Total Scanned Quantities'] = 'إجمالي الكميات الممسوحة';
$lang['preparation'] = 'تجهيز';
