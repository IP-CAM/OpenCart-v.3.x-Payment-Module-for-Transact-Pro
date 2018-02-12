<?php

$_['text_default_payment_method_name']  = 'Credit / Debit Card';
$_['text_redirect']                     = 'You will be redirected to payment gateway to enter card details';
$_['text_card_details']                 = 'Card Details';
$_['text_loading']                      = 'Loading... Please wait...';
$_['text_trial']                        = '%s every %s %s for %s payments then ';
$_['text_recurring']                    = '%s every %s %s';
$_['text_length']                       = ' for %s payments';


$_['card_number_label']                 = 'Card Number:';
$_['card_number_entry']                 = 'XXXX XXXX XXXX XXXX';
$_['card_number_error']                 = 'Card Number is required.';
$_['card_cvv_label']                    = 'Card Security Code (CVC):';
$_['card_cvv_entry']                    = 'CVV';
$_['card_cvv_error']                    = 'Card Security Code (CVC) is required.';
$_['card_expiry_label']                 = 'Card Expiry (MM/YY):';
$_['card_expiry_entry']                 = 'MM/YY';
$_['card_expiry_error']                 = 'Card Expiry is required.';
$_['card_cardholder_name_label']        = 'Cardholder Name:';
$_['card_cardholder_name_entry']        = 'John Doe';
$_['card_cardholder_name_error']        = 'Cardholder Name is required.';

$_['error_recurring_not_supported']    = 'Order contains recurring items which not supporting by selected payment method.';

$_['transaction_status_init_comment'] =                          'Successful transaction start.';
$_['transaction_status_sent_to_bank_comment'] =                  'Awaiting response from acquirer.';
$_['transaction_status_hold_ok_comment'] =                       'Funds successfully reserved.';
$_['transaction_status_dms_hold_failed_comment'] =               'Fund reservation failed.';
$_['transaction_status_sms_failed_sms_comment'] =                'SMS transaction failed.';
$_['transaction_status_dms_charge_failed_comment'] =             'Reserved fund charge failed.';
$_['transaction_status_success_comment'] =                       'Funds successfully transferred.';
$_['transaction_status_expired_comment'] =                       'Time given to perform current action is expired.';
$_['transaction_status_hold_expired_comment'] =                  'Fund reservation is expired.';
$_['transaction_status_refund_failed_comment'] =                 'Failed to perform REFUND transaction.';
$_['transaction_status_refund_pending_comment'] =                'Refund request is in process.';
$_['transaction_status_refund_success_comment'] =                'Successful refund operation.';
$_['transaction_status_dms_cancel_ok_comment'] =                 'Reservation successfully canceled.';
$_['transaction_status_dms_cancel_failed_comment'] =             'Failed to cancel reserved funds.';
$_['transaction_status_reversed_comment'] =                      'Operation successfully reversed.';
$_['transaction_status_input_validation_failed_comment'] =       'Invalid payload data provided.';
$_['transaction_status_br_validation_failed_comment'] =          'Business rules declined current action.';
$_['transaction_status_terminal_group_select_failed_comment'] =  'Failed to select terminal group.';
$_['transaction_status_terminal_select_failed_comment'] =        'Failed to select terminal.';
$_['transaction_status_declined_by_br_action_comment'] =         'Business rules declined current action.';
$_['transaction_status_waiting_card_form_fill_comment'] =        'Transaction is waiting till cardholder enters card data.';
$_['transaction_status_mpi_url_generated_comment'] =             'Gateway provided URL to proceed with 3D authentication.';
$_['transaction_status_waiting_mpi_comment'] =                   'Transaction is waiting for 3D authentication.';
$_['transaction_status_mpi_failed_comment'] =                    '3D authentication failed.';
$_['transaction_status_mpi_not_reachable_comment'] =             '3D authentication service is unavailable.';
$_['transaction_status_inside_form_url_sent_comment'] =          'Gateway provided URL where inside form resides.';
$_['transaction_status_mpi_auth_failed_comment'] =               '3D service declined transaction.';
$_['transaction_status_acquirer_not_reachable_comment'] =        'Acquirer service is unavailable.';
$_['transaction_status_reversal_failed_comment'] =               'Failed to reverse given transaction.';
$_['transaction_status_credit_failed_comment'] =                 'Failed to process credit transaction.';
$_['transaction_status_p2p_failed_comment'] =                    'Failed to process P2P transaction.';
