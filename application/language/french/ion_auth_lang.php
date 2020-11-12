<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - French
*
* Author:     Stan
*         tfspir@gmail.com
*
* Updated by: Gwenaël Gallon
*      github@dev-ggallon
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.23.2010
* Updated:  22.10.2014
*
* Description:  French language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful']            = 'Compte créé avec succès';
$lang['account_creation_unsuccessful']          = 'Impossible de créer le compte';
$lang['account_creation_duplicate_email']       = 'Email déjà utilisé ou invalide';
$lang['account_creation_duplicate_identity']    = 'Nom d\'utilisateur déjà utilisé ou invalide';
$lang['account_creation_missing_default_group'] = 'Le groupe par défaut n\'est pas configuré';
$lang['account_creation_invalid_default_group'] = 'Le nom du groupe par défaut n\'est pas valide';

// Password
$lang['password_change_successful']   = 'Le mot de passe a été changé avec succès';
$lang['password_change_unsuccessful'] = 'Impossible de changer le mot de passe';
$lang['forgot_password_successful']   = 'Mail de réinitialisation du mot de passe envoyé';
$lang['forgot_password_unsuccessful'] = 'Impossible de réinitialiser le mot de passe';

// Activation
$lang['activate_successful']           = 'Compte activé';
$lang['activate_unsuccessful']         = 'Impossible d\'activer le compte';
$lang['deactivate_successful']         = 'Compte désactivé';
$lang['deactivate_unsuccessful']       = 'Impossible de désactiver le compte';
$lang['activation_email_successful']   = 'Email d\'activation envoyé avec succès';
$lang['activation_email_unsuccessful'] = 'Impossible d\'envoyer l\'email d\'activation';

// Login / Logout
$lang['login_successful']              = 'Connecté avec succès';
$lang['login_unsuccessful']            = 'Erreur lors de la connexion';
$lang['login_unsuccessful_not_active'] = 'Ce compte est inactif';
$lang['login_timeout']                 = 'Compte temporairement bloqué suite à de trop nombreuse tentative.  Veuillez réessayer plus tard.';
$lang['logout_successful']             = 'Déconnexion effectuée avec succès';

// Account Changes
$lang['update_successful']   = 'Compte utilisateur mis à jour avec succès';
$lang['update_unsuccessful'] = 'Impossible de mettre à jour le compte utilisateur';
$lang['delete_successful']   = 'Utilisateur supprimé';
$lang['delete_unsuccessful'] = 'Impossible de supprimer l\'utilisateur';
$lang['deactivate_current_user_unsuccessful']= 'You cannot De-Activate your self.';

// Groups
$lang['group_creation_successful'] = 'Groupe créé avec succès';
$lang['group_already_exists']      = 'Nom du groupe déjà pris';
$lang['group_update_successful']   = 'Informations sur le groupe mis à jour';
$lang['group_delete_successful']   = 'Groupe supprimé';
$lang['group_delete_unsuccessful'] = 'Impossible de supprimer le groupe';
$lang['group_delete_notallowed']    = 'Le groupe Administrateur ne peut pas être supprimé';
$lang['group_name_required']       = 'Le nom du groupe est un champ obligatoire';
$lang['group_name_admin_not_alter'] = 'Le nom du groupe Admin ne peut pas être modifié';

// Activation Email
$lang['email_activation_subject']  = 'Activation du compte';
$lang['email_activate_heading']    = 'Activer le compte pour %s';
$lang['email_activate_subheading'] = 'S\'il vous plaît cliquer sur ce lien pour %s.';
$lang['email_activate_link']       = 'Activez votre compte';

// Forgot Password Email
$lang['email_forgotten_password_subject'] = 'Mot de Passe Oublié - Vérification';
$lang['email_forgot_password_heading']    = 'Réinitialiser le mot de passe pour %s';
$lang['email_forgot_password_subheading'] = 'Veuillez cliquer sur ce lien pour %s.';
$lang['email_forgot_password_link']       = 'Réinitialiser votre mot de passe';

// New Password Email
$lang['email_new_password_subject']    = 'Nouveau Mot de Passe';
$lang['email_new_password_heading']    = 'Nouveau Mot de Passe pour %s';
$lang['email_new_password_subheading'] = 'Votre mot de passe a été réinitialisé à : %s';

// Navigation Bar
$lang['Sales'] 	  	 = 'Ventes';
$lang['Orders'] 	  	 = 'Commmandes';
$lang['Orders Preparation'] 	  	 = 'Préparation des commandes';
$lang['Manage Sellers'] 	  	 = 'Gérer les vendeurs';
$lang['Settings'] 	  	 = 'Paramètres';

// Buttons
$lang['Next'] 	  	 = 'Suivant';
$lang['Close'] 	  	 = 'Fermer';

$lang['Password'] 	  	 = 'Mot de passe';
$lang['Confirm Password'] 	  	 = 'Confirmer le mot de passe';
$lang['Detail informations'] 	  	 = 'Informations détaillées';
$lang['city'] 	  	 = 'Ville';
$lang['Date Of Birth'] 	  	 = 'Date de naissance';
$lang['bank information'] 	  	 = 'Information bancaire';
$lang['bank name'] 	  	 = 'Nom de banque';
$lang['bank account number'] 	  	 = 'Numéro de compte bancaire';
$lang['bank account title'] 	  	 = 'titre du compte bancaire';
$lang['RIB']				 = 'RIB';
$lang['deposition'] 	  	 = 'Déposition';

// Orders
$lang['Order'] 	  	 = 'Commande';
$lang['add-new-order'] 	  	 = 'Créer une nouvelle commande';
$lang['Orders'] 	  	 = 'Commandes';
$lang['Order nmber'] 	  	 = 'Numéro de Commande';
$lang['Overview'] 	  	 = 'Aperçu';
$lang['invoice-and-shipping'] 	  	 = 'Facture et BL';
$lang['shipping'] 	  	 = 'Livraison';
$lang['billing'] 	  	 = 'facturation';
$lang['payment'] 	  	 = 'Paiement';
$lang['order-currency-MAD'] 	  	 = 'La commande a été passée dans la devise Dh';
$lang['order-shippment-method-shop'] 	  	 = 'Retrait du magasin';
$lang['Offered'] 	  	 = 'Offerte';
$lang['order-shippment-method-express'] = 'Livraison Express';
$lang['Express Delivery'] 	  	 = 'Livraison Express';
$lang['order-payment-method-Payzone'] 	  	 = 'Payzone';
$lang['order-payment-method-cashondelivery'] 	  	 = 'Paiement à la livraison " Contre Remboursement "';
$lang['Delivery in X hours'] = 'Livraison en %sh';
$lang['Delivery in X days'] = 'Livraison en %s jours';
$lang['X hours'] = '%sh';
$lang['X days'] = '%s jours';
$lang['no-payment-information-required'] 	  	 = 'Aucune information de paiement n\'est requise';
$lang['Comments'] 	  	 = 'commentaires';
$lang['rma'] 	  	 = 'RMA';
$lang['dropship'] 	  	 = 'DropShip';
$lang['Tracking'] 	  	 = 'Suivi';
$lang['Comment'] 	  	 = 'commentaire';
$lang['Customer'] 	  	 = 'Client';
$lang['Information'] 	  	 = 'Information';
$lang['client-information'] 	  	 = 'Information du client';
$lang['shipments'] 	  	 = 'Livraisons';
$lang['shipment'] 	  	 = 'Livraison';
$lang['ship'] 	  	 = 'Expédier';
$lang['items-to-ship'] 	  	 = 'Articles à expédier';
$lang['Client name'] 	  	 = 'Nom du client';
$lang['Address'] 	  	 = 'Adresse';
$lang['address'] 	  	 = 'Adresse';
$lang['customer firstname'] 	  	 = 'Prénom du client';
$lang['customer lastname'] 	  	 = 'Nom du client';
$lang['Place the client\'s street here...'] 	  	 = 'Placez la rue du client ici ...';
$lang['Place the client\'s city here...'] 	  	 = 'Placez la ville du client ici ...';
$lang['Place the client\'s zip code here...'] 	  	 = 'Placez le code postal du client ici ...';
$lang['Place the client\'s country here...'] 	  	 = 'Placez le pays du client ici ...';
$lang['Phone'] 	  	 = 'téléphone';
$lang['Products'] 	  	 = 'Produits';
$lang['downloadable']  = 'Téléchargeable';
$lang['simple']  = 'Simple';
$lang['configurable']  = 'Configurable';
$lang['bundle']  = 'Pack';
$lang['product-type']  = 'Type de produit';
$lang['pack']    = 'Pack';
$lang['products-to-shipp'] 	  	 = 'Produits à expédier';
$lang['All products ordered'] 	  	 = 'Articles commandés';
$lang['shipping-handling-information'] 	  	 = 'Informations d\'expédition';
$lang['payment-information'] 	  	 = 'Informations de paiement';
$lang['Order Totals'] 	  	 = 'Totaux commande';
$lang['Paiement'] 	  	 = 'Paiement';
$lang['Sous-total'] 	  	 = 'Sous-total';
$lang['Shipping cost'] 	  	 = 'Frais de livraison';
$lang['ID'] 	  	 = 'Identifiant';
$lang['VAT'] 	  	 = 'TVA';
$lang['Total Paid'] 	  	 = 'Total payé';
$lang['payment-method'] 	  	 = 'Mode de paiement';
$lang['Status'] 	  	 = 'Statut';
$lang['Date'] 	  	 = 'Date';
$lang['cashondelivery'] 	  	 = 'Espèces';
$lang['payzone_standard'] 	  	 = 'Payzone';
$lang['date_start'] 	  	 = 'Date de début';
$lang['global filter'] 	  	 = 'filtre global';
$lang['save'] 	  	 = 'Enregistrer';
$lang['search'] 	  	 = 'chercher';
$lang['Reset Filter'] 	  	 = 'Réinitialiser';
$lang['Action'] 	  	 = 'Action';
$lang['N° Order'] 	  	 = 'N ° Commande';
$lang['CRBT'] 	  	 = 'CRBT';
$lang['change-status'] 	  	 = 'Changer le statut';
$lang['billing_address'] 	  	 = 'Adresse de facturation';
$lang['shipping_address'] 	  	 = 'Adresse de livraison';
$lang['phone_number'] 	  	 = 'Numéro de téléphone';
$lang['client_name'] 	  	 = 'Nom du client';
$lang['client_email'] 	  	 = 'E-mail  du client';
$lang['sku'] 	  	 = 'Sku';
$lang['product'] 	  	 = 'Produit';
$lang['warehouse'] 	  	 = 'entrepôt';
$lang['qty'] 	  	 = 'Qte';
$lang['qty_in_stock'] 	  	 = 'Qté en stock';
$lang['price'] 	  	 = 'Prix';
$lang['price-ttc'] 	  	 = 'Prix TTC';
$lang['date'] 	  	 = 'Date';
$lang['expiry-date'] 	  	 = "Date d'expiration";
$lang['reference'] 	  	 = 'Référence';
$lang['products'] 	  	 = 'Produits';
$lang['carrier'] 	  	 = 'Carrier';
$lang['custom'] 	  	 = 'Valeur personnalisée';
$lang['shipping-cost'] 	  	 = 'Frais de livraison';
$lang['payment-method'] 	  	 = 'Méthode de paiement';
$lang['magento-invoice'] 	  	 = 'Facture Magento';
$lang['products-to-invoice'] 	  	 = 'Produits à facturer';
$lang['erp-invoice'] 	  	 = 'Facture ERP';
$lang['invoice'] 	  	 = 'Facture';
$lang['invoices'] 	  	 = 'Factures';
$lang['TOTAL SALES incl'] 	  	 = 'Total des ventes TTC';
$lang['CREDIT'] 	  	 = 'Credit';
$lang['invoice-erp'] 	  	 = 'Facture ERP';
$lang['create-invoice'] 	  	 = 'Facturer';
$lang['created_at'] 	  	 = 'Créé le';
$lang['customer'] 	  	 = 'Client';
$lang['store'] 	  	 = 'Magasin';
$lang['manager'] 	  	 = 'Gérant'; // TODOO look for the right translation
$lang['customer-comment'] 	  	 = 'Commentaire client';
$lang['supplier'] 	  	 = 'fournisseur';
$lang['order'] 	  	 = 'Commande';
$lang['order-date'] 	  	 = 'Date de commande';
$lang['order-status'] 	  	 = 'Statut de la commande';
$lang['payment-status'] 	  	 = 'Statut de paiement';
$lang['total-paid'] 	  	 = 'Total payé';
$lang['total-due'] 	  	 = 'Total dû';
$lang['add-payment'] 	  	 = 'Ajouter un paiement';
$lang['payment-records'] 	  	 = 'Enregistrements de paiement';
$lang['amount'] 	  	 = 'Montant';
$lang['comment'] 	  	 = 'Commentaire';
$lang['method'] 	  	 = 'Method';
$lang['action'] 	  	 = 'Action';
$lang['submit'] 	  	 = 'Soumettre';
$lang['edit'] 	  	 = 'Modifier';
$lang['country'] 	  	 = 'Pays';
$lang['street'] 	  	 = 'Adresse';
$lang['zip-code'] 	  	 = 'Code postal';
$lang['request_geolocation'] 	  	 = 'Demander la localisation';
$lang['send_email'] 	  	 = 'Envoyer un e-mail';
$lang['print'] 	  	 = 'Imprimer';
$lang['select-all'] 	  	 = 'Sélectionner tout ';
$lang['deselect-all'] 	  	 = 'Déselectionner tout';
$lang['reset-filter'] 	  	 = 'Réinitialiser le filtre';
$lang['search-by-name-city-number-status-order'] 	  	 = 'Chercher par nom, ville, # Téléphone, statut ou # commande';
$lang['call'] 	  	 = 'Appel';
$lang['Delivery Management'] 	  	 =  'Gestion des livraison';
$lang['coupon'] 	  	 = 'Coupon';
$lang['coupon_code'] 	  	 = 'Code coupon';
$lang['apply_coupon'] 	  	 = 'Appliquer Coupon';

$lang['credit_memo'] 	  	 = 'Avoirs';
$lang['erp_credit_memo'] 	  	 = 'Avoirs ERP';
$lang['increment_id'] 	  	 = 'Increment ID';
$lang['total'] 	  	 = 'Total';
$lang['comments'] 	  	 = 'Commentaires';
$lang['credit_memo'] 	  	 = 'Avoirs';
$lang['magento-refunded-items'] 	  	 = 'Articles remboursés sur Magento';
$lang['refunded-items'] 	  	 = 'Articles remboursés';
$lang['erp-refunded-items'] 	  	 = 'Articles remboursés (ERP)';
$lang['order-id'] 	  	 = 'Identifiant de commande';
$lang['ticket-id'] 	  	 = 'Identifiant de la réclamation';
$lang['created-at'] 	  	 = 'créé le';
$lang['ticket-messages'] 	  	 = 'Messages de la réclamation';
$lang['closed-ticket'] 	  	 = 'Réclamations fermé';
$lang['ordered'] 	  	 = 'Commandé';
$lang['canceled'] 	  	 = 'Annulé';
$lang['shipped'] 	  	 = 'Expédié';
$lang['save-changes'] 	  	 = 'Sauvegarder les modifications';
$lang['close'] 	  	 = 'Fermer';
$lang['not-notified'] 	  	 = 'n\'est pas notifié';
$lang['is-notified'] 	  	 = 'est notifié';
$lang['customer'] 	  	 = 'Le client';
$lang['hours'] 	  	 = 'h';
$lang['minutes'] 	  	 = 'min';
$lang['lifetime'] 	  	 = 'Durée de vie du commande ';
$lang['counting-didn\'t-start-yet'] 	  	 = 'Le compteur n\'a pas encore commencé';
$lang['by'] 	  	 = 'par';
$lang['submit-order'] 	  	 = 'Soumettre la commande';

//credit memo
$lang['create-credit-memo'] 	  	 = 'Créer un avoir';
$lang['credit-memo'] 	  	 = 'Avoir';
$lang['creditmemo'] 	  	 = 'Avoir';
$lang['store_credit'] 	  	 = 'Crédit magasin';
$lang['order-command-date'] 	  	 = 'Date de la commande';
$lang['purchased-on'] 	  	 = 'Acheté sur';
$lang['order-details'] 	  	 = 'Détails de la commande';
$lang['customer-details'] 	  	 = 'Détails du compte';
$lang['billing-address'] 	  	 = 'Adresse de facturation';
$lang['shipping-address'] 	  	 = 'Adresse de livraison';
$lang['products-to-refund'] 	  	 = 'Produits à rembourser';
$lang['client-name'] 	  	 = 'Nom du client';
$lang['email'] 	  	 = 'E-mail';
$lang['client-group'] 	  	 = 'Groupe de clients';
$lang['full-name'] 	  	 = 'Nom et Prénom';
$lang['paid-amount'] 	  	 = 'Montant payé';
$lang['update-qty'] 	  	 = 'Modifier la quantité';
$lang['refund-amount'] 	  	 = 'Montant du remboursement';
$lang['shipping-amount'] 	  	 = 'Frais de port';
$lang['products-to-shipp'] 	  	 = 'Produits à expédier';
$lang['shipping-refund'] 	  	 = 'Remboursement livraison';
$lang['change-shipping-method'] = 'Changer la méthode d\'expédition';
$lang['get-shipping-methods-and-rates'] = 'Récupérer les modes de livraison et les taux';
$lang['comments'] 	  	 = 'Commentaires';
$lang['order-grand-total'] 	  	 = 'Prix total du commande';
$lang['total-refunded'] 	  	 = 'Total remboursé';
$lang['comment-panel'] 	  	 = 'Panneau des commentaires';
$lang['add-comment'] 	  	 = 'Ajouter un commentaire';
$lang['notify-customer'] = "Notifier le client";
$lang['appear-to-shipper'] = "Apparaître au livreur";
$lang['unassign-shipper'] = "desaffecter le livreur";

$lang['subtotal'] 	  	 = 'Sous-total';
$lang['refund-shipping-inc-tax'] 	  	 = 'Remboursement livraison (Incl. Tax)';
$lang['adjustment-refund'] 	  	 = 'Remboursement des frais de dossier';
$lang['adjustment-fee'] 	  	 = 'Frais de dossier';
$lang['grand-total-exc-tax'] 	  	 = 'Total (Excl.Tax)';
$lang['tax'] 	  	 = 'Tax';
$lang['grand-total-inc-tax'] 	  	 = 'Total (Incl.Tax)';
$lang['return-to-stock'] 	  	 = 'Retour au stock';
$lang['qty-to-refund'] 	  	 = 'Qté à rembourser';
$lang['tax-amount'] 	  	 = 'Montant de la taxe';
$lang['discount-amount'] 	  	 = 'Montant de la remise';
$lang['change-status'] 	  	 = 'Changer le statut';
$lang['orders-status-changed'] 	  	 = 'Statut des commandes modifié';
$lang['in-resolution'] 	  	 = 'En résolution';
$lang['refunded'] 	  	 = 'Remboursé';
$lang['exchanged'] 	  	 = 'Échangé';
$lang['this-order-can-not-have-a-credit-memo-yet,'] 	  	 = 'cette commande ne peut pas encore avoir un avoir,';
$lang['an-invoice-is-required'] 	  	 = 'une facture est requise';
$lang['no-erp-credit-memo-has-been-created,'] 	  	 = 'aucun avoir erp n\'a été créé,';
$lang['if-you-wish-to-create-one,'] 	  	 = 'si vous souhaitez en créer un,';
$lang['attention'] 	  	 = 'Attention';
$lang['click-here'] 	  	 = 'cliquez ici';
$lang['credit_memo_magento'] 	  	 = 'Avoir ( Magento )';
$lang['Order']      = 'Commande';
$lang['Orders']      = 'Commandes';
$lang['Order nmber']      = 'Numéro de Commande';
$lang['Overview']      = 'Aperçu';
$lang['invoice-and-shipping']      = 'Facture et Livraison';
$lang['payment']      = 'Paiement';
$lang['order-currency-MAD']      = 'La commande a été passée dans la devise Dh';
$lang['order-shippment-method']      = 'Retrait du magasin - Offerte';
$lang['order-payment-method-Payzone']      = 'Payzone';
$lang['order-payment-method-cashondelivery']      = 'Paiement à la livraison " Contre Remboursement "';
$lang['Comments']      = 'commentaires';
$lang['rma']      = 'RMA';
$lang['dropship']      = 'DropShip';
$lang['Tracking']      = 'Suivi';
$lang['Comment']      = 'commentaire';
$lang['Customer']      = 'Client';
$lang['Information']      = 'Information';
$lang['shipments']      = 'Livraisons';
$lang['shipment']      = 'Livraison';
$lang['items-to-ship']      = 'Articles à expédier';
$lang['Client name']      = 'Nom du client';
$lang['Address']      = 'Adresse';
$lang['address']      = 'Adresse';
$lang['Products']      = 'Produits';
$lang['All products ordered']      = 'Articles commandés';
$lang['products to order']      = 'Articles à commander';
$lang['products list']      =   'Liste des produits';
$lang['shipping-handling-information']      = 'Informations d\'expédition et de manutention';
$lang['payment-information']      = 'Informations de paiement';
$lang['Order Totals']      = 'Totaux commande';
$lang['Paiement']      = 'Paiement';
$lang['Sous-total']      = 'Sous-total';
$lang['Shipping cost']      = 'Frais de livraison';
$lang['ID']      = 'Identifiant';
$lang['VAT']      = 'TVA';
$lang['Total Paid']      = 'Total payé';
$lang['total'] 	  	 = 'Total';
$lang['product(s)'] 	  	 = 'produit(s)';
$lang['payment-method']      = 'Mode de paiement';
$lang['Date']      = 'Date';
$lang['cashondelivery']      = 'Espèces';
$lang['payzone_standard']      = 'Payzone';
$lang['date_start']      = 'Date de début';
$lang['global filter']      = 'filtre global';
$lang['save']      = 'Enregistrer';
$lang['search']      = 'chercher';
$lang['Reset Filter']      = 'Réinitialiser';
$lang['Action']      = 'Action';
$lang['N°']      = 'N°';
$lang['CRBT']      = 'CRBT';
$lang['change-status']      = 'Changer le statut';
$lang['billing_address']      = 'Adresse de facturation';
$lang['shipping_address']      = 'Adresse de livraison';
$lang['phone_number']      = 'Numéro de téléphone';
$lang['client_name']      = 'Nom du client';
$lang['client_email']      = 'E-mail  du client';
$lang['sku']      = 'Sku';
$lang['product']      = 'Produit';
$lang['qty']      = 'Qte';
$lang['price']      = 'Prix';
$lang['date']      = 'Date';
$lang['expiry-date']      = "Date d'expiration";
$lang['reference']      = 'Référence';
$lang['products']      = 'Produits';
$lang['carrier']      = 'Carrier';
$lang['order-does-not-exist'] 	  	 = 'La commande n\'existe pas';

// Tickets
$lang['priority']      = 'Priorité';
$lang['department']      = 'département';
$lang['sent-from']      = 'Envoyé par';
$lang['sender-name']      = "Nom de l'expéditeur";
$lang['sender-email']      = "Email de l'expéditeur";
$lang['normal']      = 'Normal';
$lang['medium']      = 'Moyen';
$lang['hight']      = 'Élevé';
$lang['urgent']      = 'Urgent';
$lang['emergency']      = 'Urgence';
$lang['critical']      = 'Critique';
$lang['on hold']      = 'En attente';
$lang['open']      = 'Ouvert';
$lang['ticket']      = 'Réclamation';
$lang['agent']      = 'Agent';
$lang['updated_at']      = 'Modifié le';
$lang['Created_at']      = 'Créé à';
$lang['sender_name']      = "Nom de l'expéditeur";
$lang['sender_email']      = "Email de l'expéditeur";
$lang['sender']      = 'Expéditeur';
$lang['resolved']      = 'Résolue';
$lang['ticket-status']      = 'Statut de la réclamation';
$lang['additional-informations']      = 'informations additionnelle';
$lang['information-related-to-ticket']      = 'Information relative a la réclamation';
$lang['write-reply']      = 'Écrire une réponse';
$lang['messages']      = 'Messages';
$lang['quote']      = 'Citation';
$lang['sent-by']      = 'Envoyée par';
$lang['client']      = 'Client';
$lang['response']      = 'Réponse';
$lang['update']      = 'Modifier';
$lang['send']      = 'Envoyer';
$lang['response']      = 'Réponse';
$lang['ticket-title']      = 'Titre de la réclamation';
$lang['new-ticket']      = 'Nouvelle réclamation';
$lang['view-ticket']      = 'Réclamation';
$lang['tickets']      = 'Réclamations';
$lang['create-ticket']      = 'Créer une réclamations';
$lang['new']      = 'Nouvelle réclamation';
$lang['macros']      = 'Macros';
$lang['Shipping']      = 'Livraison';
$lang['quote']      = 'Citation';
$lang['no-tickets-has-been-created,']      = 'aucun ticket n\'a été créé,';
$lang['unassigned']      = 'Non attribué';

// Actions
$lang['created']      = 'Créé';
$lang['create']      = 'Créer';

// Invoice
$lang["this-order-doesn't-have-a-magento-invoice-yet,"]      = 'cette commande n\'a pas encore de facture magento,';

// Records
$lang['records-found']      = 'Enregistrement(s) trouvé(s)';

// status
$lang['pending']      = 'En attente';
$lang['pending-orders'] 	  	 = 'Commande(s) en attente';
$lang['orders-in-processing'] 	  	 = 'Commande(s) en cours...';
$lang['attentedepaiement']      = 'En attente de paiement';
$lang['awaiting_validation']      = 'En attente de validation';
$lang['waiting']      = 'En suspens';
$lang['validated'] = 'Validé';
$lang['flagged_fraud'] = 'Signalé fraude';
$lang['in_preparation'] = 'En preparation';
$lang['ready_to_shipp'] = 'Prêt à expédié';
$lang['pending_in_relay_point'] = 'En instance au guichet';
$lang['in_shipping'] = 'En livraison';
$lang['failed_delivery'] = 'Échec de livraison';
$lang['delivered'] = 'Livré';
$lang['complete'] = 'Payé';
$lang['payable'] = 'Créance client';
$lang['billed_in_erp'] = 'Facturé';
$lang['canceled'] = 'Annulée';
$lang['cancelation'] = 'annulation';
$lang['returned'] = 'Annulé et  Reçu';
$lang['rejected_by_quality_control'] = 'Refusé';
$lang['waiting for validation']      = 'en attente de validation';
$lang['cancel']      = 'Annuler';
$lang['All']      = 'Tout';
$lang['return']      =  'Retour';
$lang['delivery failure'] 	  	 =  'échec de livraison';
$lang['weight']      = 'poids';
$lang['to_be_canceled']      =  'A annuler';
$lang['prepared_and_canceled'] 	  	 =  'A annuler';
$lang['closed'] 	  	 =  'Fermée';
// texts 
$lang['there is']      = 'il y a';
$lang['day']      = 'jour';
$lang['Zone']      = 'Zone';
$lang['delay']      = 'delay';
$lang['Preparation']      = 'Préparation';
$lang['Image']      = 'picture';
$lang['Description']      = 'Description';
$lang['Scan']      = 'Scan';
$lang['Payment']      = 'Paiement';
$lang['Choose order']      = 'Choisissez la commande';
$lang['select order from list of orders to show']      = 'sélectionner la commande dans la liste des commandes à afficher';
$lang['Scan Product']      =  'Scanner le Produit';
$lang['scan each  product in this order']      =  'scanner chaque produit dans cette commande';
$lang['Print bill']      =  'Imprimer la facture';
$lang['print bill for order and put it into the box']      =  'imprimer la facture pour la commande et la mettre dans la boîte';
$lang['Print bill']      =  'Imprimer la facture';
$lang['Print label']      =  'Imprimer l\'étiquette';
$lang['print label and pick to the box of order']      =  'imprimer l\'étiquette et coller sur la commande';





//actions
$lang['validate']      = 'valider';
$lang['Refused']      = 'Refusé';
$lang['Canceled and Received']      = 'Annulé et reçu';


//Orders tracking modal tab
$lang['status'] = "Status";
$lang['shipment_date'] = "Date de livraison";
$lang['shipper'] = "Livreur";
$lang['shipper_number'] = "Numéro du livreur";
$lang['not_available_yet'] = "N/D";


// Email templates
$lang['email_templates'] = "Macros";
$lang['macros'] = "Macros";
$lang['subject'] = "Sujet";
$lang['title'] = "Titre";
$lang['content'] = "Contenu";
$lang['delete'] = "Supprimer";
$lang['records_found'] = "Enregistrement(s) trouvé(s)";
$lang['add_macro'] = "Ajouter Macro";
$lang['edit_macros'] = "Éditer Macros";
$lang['add_email_template'] = "Ajouter un Macro";
$lang['add'] = "Ajouter";
$lang['actions'] = "Actions";
$lang['search_here'] = "Chercher ici";
$lang['All Shippers'] = "Tous les livreurs";
$lang['Shippers Management'] = "gestion de livreur ";
$lang['Add Shipper'] = "ajouter un livreur";
$lang['Shipper'] = "livreur";
$lang['add comment here ..'] = "ajouter un commentaire ici ..";
$lang['Staut'] = "Staut";
$lang['total gain per month'] = "gain total par mois";
$lang['Last CRBT'] = "Dernière CRBT";
$lang['at'] = "à";
$lang['DH'] = "DH";
$lang['total amount delivered'] = "Mntant total livré";
$lang['Orders delivered'] = "Commandes livrées";
$lang['Orders returned'] = "Commandes retournées";
$lang['return rate'] = "Taux de retour";
$lang['Bonus'] = "Bonus";
$lang['DELIVERY RATES'] = "TAUX DE LIVRAISON";
$lang['Freelance shipper'] = "Freelance shipper";
$lang['Amount delivered'] = "Montant livré";
$lang['Shipper gain'] = "gain de livreur";
$lang['Payment'] = "Paiement";
$lang['Batches'] = "Lots";
$lang['Delivere at'] = "Livrer le";
$lang['Reviews'] = "Commentaires";
$lang['Download'] = "Télécharger";

// swal messages
$lang['Please add some text on the comment text area !'] = "Veuillez ajouter du texte dans la zone de texte du commentaire !";
$lang['Warning !!'] = "Attention !!";
$lang['Great !!'] = "Génial";
$lang['Comment was added successfully !'] = "Le commentaire a été ajouté avec succès!";
$lang['Something went wrong !'] = "Quelque chose a mal tourné !";
$lang['Ticket has been updated Successfully'] = "La réclamation a été mise à jour avec succès";
$lang['Updated'] = "Modifier";
$lang['Invalid qty to refund !!'] = "Quantité à rembourser invalide !!";
$lang['Invalid qty to ship !!'] = "Quantité des produit à livrer est invalide !!";
$lang['Credit memo created successfully !!'] = "L'avoir a été créée avec succès !!";
$lang['Created !!'] = "Créé";
$lang['The credit memo has been created successfully !'] = "L'avoir a été créée avec succès !!";
$lang['Changed'] = "Changer";
$lang['Order status Successfully changed !!'] = "Statut de la commande modifié avec succès !!";
$lang['Invoice created successfully !!'] = "Facture créée avec succès !!";
$lang['The credit memo has been created successfully !'] = "L'avoir a été créée avec succès !!";
$lang['The credit memo has been created successfully !'] = "L'sms a été envoyé avec succès!";
$lang['Sent !!'] = "Envoyé !!";
$lang['Something went wrong !!'] = "Quelque chose a mal tourné !!";
$lang['this-order-has-an-invalid-status-!!'] = "CETTE COMMANDE A UN STATUT INVALIDE !!";
$lang['Can not create invoice for requested order, The status most be complete !!'] = "Impossible de créer une facture pour la commande demandée, le statut est le plus complet !!";
$lang['Can not create invoice for requested order, This order doesn\'t exist !!'] = "Impossible de créer une facture pour la commande demandée, cette commande n'existe pas !!";
$lang['Can not create invoice for requested order, The order is still NEW !!'] = "Impossible de créer une facture pour la commande demandée, la commande est encore NOUVELLE !!";
$lang['Magento Invoice doesn\'t exist'] = "La facture Magento n'existe pas";
$lang['ERP Invoice already exist'] = "La facture ERP existe déjà";
$lang['Invoice created seccessfully'] = "Facture créée avec succès";
$lang['Can not create credit memo for requested order !!'] = "Impossible de créer un avoir pour la commande demandée !!";
$lang['ERP Invoice does not exist'] = "La facture ERP n'existe pas";
$lang['Credit memo created seccessfully'] = "L'avoir est créé avec succès";
$lang['THIS TICKET HAS NO MESSAGE !!'] = "CETTE RÉCLAMATION N'A PAS DE MESSAGE !!";
$lang['Shipment already exists !!'] = "L'expédition existe déjà !!";
$lang['Shipment was created successfully'] = "L'expédition a été créé avec succès";
$lang['Can not create shipment for requested order !!'] = "Impossible de créer l'expédition pour cette commande !!";
$lang['you-have-changed-status-from-%s-to-%s-for-%d-order(s)'] 	  	 = 'Vous avez changé le statut de <b> %s </b> à <b> %s </b> pour <b> %d </b> commande (s)';
$lang['you-need-to-choose-at-least-one-order-to-change-status'] 	  	 = 'Vous devez choisir au moins une commande pour changer le statut';
$lang['you-need-choose-a-status-in-order-to-complete-the-action'] 	  	 = 'Vous devez choisir un statut pour terminer l\'action';
$lang['Shipping-method-changed-to-express'] 	  	 = 'Nouvelle Methode d\'expédition : Livraison express';
$lang['Shipping-method-changed-to-shop'] 	  	 = 'Nouvelle Methode d\'expédition : Retrait du magasin';
$lang['shipment-can-not-be-created,-status-must-be-in-preparation'] = 'L\'expédition ne peut pas être créée, le statut doit être "en préparation"';
$lang['Can-not-create-invoice-for-requested-order,-The-status-must-be-"delivered" !!'] = 'Impossible de créer une facture pour la commande demandée, le statut doit être "livré" !!';
$lang['Order-shipping-method-has-been-changed-by'] = 'La méthode d\'expédition de la commande a été modifiée par';
$lang['ERP invoice has been sent successfully !'] = 'La facture ERP a été envoyée avec succès!';
$lang['certain-products-could-not-be-added'] = 'Certains produits n\'ont pas pu être ajoutés';

$lang["Order N° %s was created"]   = 'Commande N° %s a été créée';
$lang["Invoice N° %d was created"]   = 'La facture N° %d a été créée';
$lang["ERP Invoice with N° %d already exist"]   = 'La facture ERP avec le N° %d existe déjà';
$lang["ERP Invoice N° %s was created"]   = 'La facture ERP N° %s a été créée';
$lang["Invoice number"]   = 'Numéro de facture';
$lang["Shipment N° %d was created"]   = 'L\'expédition N° %d a été créée';
$lang["Credit memo N° %d was created"]   = 'L\'avoir N° %d a été créé';
$lang["Order status changed to"]   = 'Le statut de la commande est devenu';
$lang["Order address changed"]   = 'L\'adresse de commande est changé';
$lang["The sms has been sent"]   = 'Le sms a été envoyé';
$lang["Comment was added, with status"]   = 'Un commentaire a été ajouté, avec le statut';
$lang["Added !!"]   = 'Ajouté';
$lang["at-least-one-product-needs-to-be-selected"]   = 'Au moins un produit doit être choisi';
$lang["City name is incorrect"]   = 'Le nom de la ville est incorrect';
$lang["order-not-available"]   = 'Commande non disponible';
$lang["this-order-can-not-be-modified"]   = 'Cette commande ne peut pas etre modifié';
$lang["You want to change status for multiple orders ?"] = 'Vous souhaitez changer le statut de plusieurs commandes?';
$lang['Please follow these steps'] = 'Veuillez suivre ces étapes';
$lang["Filter orders on a specific status."] = 'Filtrer les commandes sur un statut spécifique.';
$lang["Select the orders you wanna change it for."] = 'Sélectionnez les commandes lesquelles vous voulez modifier.';
$lang["Choose the status you wanna change to and submit."] = 'Choisissez le statut que vous souhaitez et soumettez.';

// RMA
$lang['create-rma']      = 'Créer rma';
$lang['no-rma-is-available-for-this-order,'] = "aucun RMA n'est disponible pour cette commande,";
$lang['file type'] = "type de fichier";
$lang['number of orders'] = "nombre de commandes";

// Batchs
$lang['All Batches'] = "Tous les lots";
$lang['Batches Management'] = "Gestion des lots";$lang['Batches List'] = "Liste des lots";
$lang['Add Batch'] = "Ajouter un lot";
$lang['Edit Batch'] = "Modifier le lot";
$lang['Batch'] = "Lot";

// Events
$lang['New event'] = 'Nouvel évènement';
$lang['New event was added for you'] = 'Un nouvel événement a été ajouté pour vous par %s: %s le %s';
$lang['New recurring event was added for you'] = 'Un nouvel événement récurrent a été ajouté pour vous par %s: %s le %s';

$lang['Dimension'] = "Dimension";
$lang['Total selected'] = "Total sélectionné";
$lang['Choose shipper first'] = "choisissez le livreur en premier";
$lang['Date of assignment'] = "date d'affectation";
$lang['Choose shipper'] = "Choisissez le Livreur";
$lang['Choose file type'] = "Choisissez le type de fichier";
$lang['Today'] = "aujourd'hui";
$lang['Interval'] = "intervalle";
$lang['update stock'] = "mettre à jour le stock";

// validation fields
$lang['firstname'] 	  	 = 'Prénom';
$lang['lastname'] 	  	 = 'Nom';
$lang['shipping method'] 	  	 = 'Méthode d\'expédition';
$lang['method description'] 	  	 = 'Description de la méthode';
$lang['Department'] 	  	 = 'Departement';
$lang['Title'] 	  	 = 'Titre';
$lang['Status'] 	  	 = 'Statut';
$lang['dedicated-to-virtual-control'] 	  	 = 'dédié au commande virtuelles';
$lang['Priority'] 	  	 = 'Priorité';
$lang['Agent'] 	  	 = 'Agent';
$lang['Message'] 	  	 = 'Message';
$lang['Sender name'] 	  	 = 'Nom de l\'expéditeur';
$lang['Sender e-mail'] 	  	 = 'Email de l\'expéditeur';
$lang['Subject'] 	  	 = 'Sujet';
$lang['Content'] 	  	 = 'Contenu';
$lang['Macro'] 	  	 = 'Macro'; 
$lang['Returned to client'] = "Réexpédié au client";
$lang['Supplier forwarded'] = "Réexpédié fournisseur";
$lang['Defective stock transfer'] = "Transfert stock défectueux";
$lang['Choose the batch'] = "Choisissez le batch";
$lang['select batch from list of orders to show']      = 'sélectionner le batch dans la liste des batches à afficher';
$lang['Scan order']      =  'Scanner la commande';
$lang['Pre order']      =  'Scanner la commande';
$lang['put the order inside his batch']      =  'mettre la commande dans son batch';
$lang['Orders'] = 'Commandes';
$lang['scanned successfully'] = 'Scanné avec succès';
$lang['order scanned'] = 'Commande à été Scanné';
$lang['product scanned'] = 'Produit à été Scanné';
$lang['wallet'] = 'portefeuille';
$lang['type'] = 'type';
$lang['delivery'] = 'Livraison';
$lang['Add to wallet'] = 'Ajouter au portefeuille';
$lang['paid'] = 'payé';
$lang['transfer'] = 'virement';
$lang['cash'] = 'en espèces';
$lang['Check'] = 'Chèque';
$lang['Are you sure?'] = 'Êtes-vous sûr?';
$lang['You won\'t be able to revert this!'] = 'Vous ne pourrez pas revenir en arrière!';
$lang['yes'] = 'Oui';
$lang['Shipper has been paid'] = 'Livreur a été payé';
$lang['There is no'] = 'il n\'y a pas';
$lang['collect'] = 'Collecte';
$lang['select all'] = 'Tout sélectionner';
$lang['deselect all'] = 'Tout déselectionner';
$lang['Not scanned'] = 'Non scanné';
$lang['customer_id'] 	  	 = 'Client';
$lang['selected'] = "sélectionné";
$lang['store_id'] 	  	 = 'Magasin';
$lang['product_ids'] 	  	 = 'Produits';
$lang['shipping_firstname'] 	  	 = 'Prénom';
$lang['shipping_lastname'] 	  	 = 'Nom';
$lang['shipping_city'] 	  	 = 'Ville de livraison';
$lang['shipping_country'] 	  	 = 'Pays de livraison';
$lang['shipping_street'] 	  	 = 'Address de livraison';
$lang['shipping_phone_number'] 	  	 = 'Numéro telephone ( livraison )';
$lang['billing_firstname'] 	  	 = 'Prénom';
$lang['billing_lastname'] 	  	 = 'Nom';
$lang['billing_city'] 	  	 = 'Ville de facturation';
$lang['billing_country'] 	  	 = 'Pays de facturation';
$lang['billing_street'] 	  	 = 'Address de facturation';
$lang['billing_phone_number'] 	  	 = 'Numéro de telephone ( facturation )';
$lang['product_ids'] 	  	 = 'Produits';
$lang['product_qtys'] 	  	 = 'Quantité des produits';
$lang['payment_method'] 	  	 = 'Mode de paiement';
$lang['shipping_method'] 	  	 = 'Mode de livraison';
$lang['Welcome to the Preparation area'] = 'Bienvenue dans la zone de préparation';


// create order
$lang['firstname']      =   'Prénom';
$lang['lastname']      =   'Nom';
$lang['prefix']      =   'Préfix';
$lang['suffix']      =   'Suffix';
$lang['company']      =   'Société';
$lang['ice']      =   'ICE';
$lang['group']      =   'Groupe';
$lang['row_subtotal']      =   'Sous-total de la ligne';
$lang['name']      =   'Nom complet';
$lang['General'] 	  	 = 'General';
$lang['add-new-address']      =   'Ajouter une nouvelle addresse';
$lang['add-new-customer']      =   'Ajouter un nouveau client';
$lang['discount']      =   'Remise';
$lang['stores']      =   'Magasins';
$lang['customers']      =   'Clients';
$lang['products ordered']      =   'Articles commandés';
$lang['create-order']      =   'Créer une commander';
$lang['edit-order']      =   'Modifier la commande - ';
$lang['Choose-a-customer']      =   'Sélectionnez un client';
$lang['Choose-a-store']      =   'Sélectionnez un magasin';
$lang['Id']      =   'ID';
$lang['add-products']  = 'Ajouter des produits';
$lang['arome']  = 'Arome';
$lang['address_id']  = 'Adresse';
$lang['custome_price']  = 'Prix personnalisé';
$lang['apply']  = 'Appliquer';
$lang['MAD']  = ' Dh(s)';
$lang['related-products']  = 'Produits associés';
$lang['configure-the-product']  = 'Configurer le produit';
$lang['choose-an-option']   =   'Choisissez une option...';
$lang['this-is-a-required-field']   =   'Ce champ est obligatoire.';
$lang['same-as-billing-address']   =   'Identique à l\'adresse de facturation';
$lang['remove']   =   'Supprimer';
$lang['update-items-selected']   =   'Mettre à jour les articles et quantités';
$lang['choose-a-currency']   =   'Choisissez une devise...';
$lang['currency']   =   'Devise';
$lang['Sorry,-no-quotes-are-available-for-this-order-at-this-time.']   =   'Aucun mode de livraison n\'est disponible pour votre adresse.';
$lang['payment-by-credit-card']   =   'Paiement par carte bancaire';
$lang['paiement-à-la-livraison-"-Contre-Remboursement-"']   =   'Paiement à la livraison " Contre Remboursement "';
$lang['This product is currently out of stock.'] = 'Ce produit est actuellement en rupture de stock.';
$lang['The maximum quantity allowed for purchase is'] = 'La quantité maximale autorisée pour la commande est';
$lang['save-in-address-book'] = 'Enregistrer dans le carnet d\'adresses';
$lang['Records found'] = 'Enregistrement(s) trouvé(s)';
$lang['selected orders'] = 'Commandes sélectionnées';
$lang['History'] = 'L\'historique ';
$lang['Batch will be canceled'] = 'Le lot sera annulé';
$lang['Your work has been saved'] = 'Votre travail a été enregistré'; 
$lang['Please select an order'] = 'veuillez sélectionner une commande';
$lang['No selected orders'] = 'aucune commande sélectionnée';
$lang['Shout by'] = 'crier par';

$lang['Order address has been changed by '] = 'L\'adresse de commande a été modifiée par ';
$lang['of department '] = 'du département ';
$lang['of group '] = 'du département ';
$lang['Invoice has been created by'] = 'La facture a été créée par ';
$lang['Shipment has been created by'] = 'L\'expédition a été créée par ';
$lang['ERP credit memo has been created along with a ticket by'] = 'L\'avoir ERP a été créée avec un ticket par ';
$lang['ERP invoice has been created by'] = 'La facture ERP a été créée par ';
$lang['Credit memo has been created by '] = 'L\'avoir a été créée par ';
$lang['Order %s address has been changed'] = 'L\'addresse de %s de la commande a été modifiée';

$lang[''] = '';

$lang['Credit memo has been created by %s of department %s'] = 'L\'avoir a été créée par %s du groupe %s';
// $lang['ERP credit memo has been created along with a ticket by %s of department %s'] = 'L\'avoir ERP a été créée avec un ticket par %s du groupe %s';
$lang['Invoice has been created by %s of department %s'] = 'La facture a été créée par %s du groupe %s';
$lang['ERP invoice has been created by %s of department %s'] = 'La facture ERP a été créée par %s du groupe %s';
$lang['Order status has been changed by %s of department %s'] = 'Le status de la commande a été changé par %s du groupe %s';
$lang['Order address has been changed by %s of department %s'] = 'L\'adresse de commande a été modifiée par %s du groupe %s';
$lang['Geolocation request has been sent by %s of department %s'] = 'La demande de géolocalisation a été envoyée par %s du groupe %s';
$lang['Order-shipping-method-has-been-changed-by %s of department %s'] = 'Le mode d\'expédition de la commande a été modifié par %s du groupe %s';
$lang['Shipment has been created by %s of department %s'] = 'L\'expédition a été créée par %s du groupe %s';
$lang['Ticket was created by %s of department %s'] = 'La réclamation a été créée par %s du groupe %s';
$lang['The Order is canceled and put back in stock by'] = 'La Commande est annulée et remise en stock par';

$lang['please-specify-a-valid-city'] = 'Veuillez spécifier une ville valide';
$lang['deselect-all-products'] = 'Désélectionner tous les produits';
$lang['link-to-previous-order'] = 'Lien vers la commande précédente';
$lang['link-to-new-order'] = 'Lien vers la nouvelle commande';
$lang['you have scanned %s items and this exceeds the ordered quantity'] = 'vous avez scanné %s articles et cela dépasse la quantité commandée';
$lang['This bar code is not attributed to any product in this order. Please try with a correct product'] = 'Ce code à barres n\'est attribué à aucun produit de cette commande. Veuillez essayer avec un produit correct';
$lang['Error'] = 'Erreur';
$lang['This order is already in preparation'] = 'Cette commande est déjà en préparation';

// Batch states
$lang['batch_state'] = 'State';
$lang['batch_state_new'] = 'Nouveau';
$lang['batch_state_processing'] = 'En cours de traitement';
$lang['batch_state_closing'] = 'Phase de clôture';
$lang['batch_state_canceled'] = 'Annulé';

// Batch statuses
$lang['batch_status'] = 'Statut';
$lang['batch_status_open'] = 'Ouvert';
$lang['batch_status_loading'] = 'En chargement';
$lang['batch_status_in_preparation'] = 'En préparation';
$lang['batch_status_ready_to_ship'] = 'Prêt á expédié';
$lang['batch_status_in_delivery'] = 'En livraison';
$lang['batch_status_delivered'] = 'Livré';
$lang['batch_status_orders_collected'] = 'Commandes collectes';
$lang['batch_status_payed'] = 'Payé';
$lang['batch_status_completed'] = 'Terminé';
$lang['batch_status_canceled'] = 'Annulé';
$lang['batch_status_canceled_and_returned'] = 'Annulé et recu';
$lang['batch_status_refused'] = 'Refusé';

$lang['batch_comment'] = 'Commentaire';

$lang['to'] = 'de';

// Profiles
$lang['super_admin'] = 'super admin';
$lang['all payments'] = 'tous les paiements';
$lang['kg'] = 'kg';
$lang['assigned'] = 'Affecter';

// Packing
$lang['Warning! FRAGILE'] = ' Attention! FRAGILE';
$lang['defective_stock'] = 'Stock Défectueux';
$lang['defective_stock'] = 'Stock Défectueux';
$lang['Total Scanned Quantities'] = 'Total Quantités scannés';
$lang['preparation'] = 'mise en préparation';