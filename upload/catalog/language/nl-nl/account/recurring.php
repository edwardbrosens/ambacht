<?php
// Heading
$_['heading_title'] 			= 'Terugkerende betaling(en)';

// Text
$_['text_account'] 				= 'Klant';
$_['text_recurring'] 			= 'Terugkerende betaling(en)';
$_['text_recurring_detail'] 	= 'Details';
$_['text_order_recurring_id'] 	= 'Profiel ID: ';
$_['text_date_added'] 			= 'Datum';
$_['text_status'] 				= 'Status: ';
$_['text_payment_method']		= 'Betaalmethode: ';
$_['text_order_id'] 			= 'Bestelnummer: ';
$_['text_product'] 				= 'Product:';
$_['text_quantity'] 			= 'Aantal:';
$_['text_description']        	= 'Omschrijving';
$_['text_reference']          	= 'Referentie';
$_['text_transaction'] 			= 'Transactie(s)';


$_['text_status_1'] = 'Actief';
$_['text_status_2'] = 'Inactief';
$_['text_status_3'] = 'Geannuleerd';
$_['text_status_4'] = 'Gestopt';
$_['text_status_5'] = 'Verlopen';
$_['text_status_6'] = 'Lopend';

$_['text_transaction_date_added'] 		   = 'Aangemaakt';
$_['text_transaction_payment'] 			   = 'Betaling';
$_['text_transaction_outstanding_payment'] = 'Openstaande betaling';
$_['text_transaction_skipped'] 			   = 'Betaling overgeslagen';
$_['text_transaction_failed'] 			   = 'Betaling mislukt';
$_['text_transaction_cancelled'] 		   = 'Geannuleerd';
$_['text_transaction_suspended'] 		   = 'Gestopt';
$_['text_transaction_suspended_failed']    = 'Gestopt wegens mislukte betaling(en)';
$_['text_transaction_outstanding_failed']  = 'Mislukte openstaande betaling(en)';
$_['text_transaction_expired'] 			   = 'Verlopen';




$_['text_empty'] = 'Dit betalingsprofiel heeft nog geen transactie(s)';
$_['text_error'] = 'Het opgegeven nummer is niet gevonden.';








$_['text_cancelled'] = 'Terugkerende betaling(en) geannuleerd';

/*

		$data['status_types'] = array(
			1 => $this->language->get('text_status_inactive'),
			2 => $this->language->get('text_status_active'),
			3 => $this->language->get('text_status_suspended'),
			4 => $this->language->get('text_status_cancelled'),
			5 => $this->language->get('text_status_expired'),
			6 => $this->language->get('text_status_pending'),
		);

		$data['transaction_types'] = array(
			0 => $this->language->get('text_transaction_date_added'),
			1 => $this->language->get('text_transaction_payment'),
			2 => $this->language->get('text_transaction_outstanding_payment'),
			3 => $this->language->get('text_transaction_skipped'),
			4 => $this->language->get('text_transaction_failed'),
			5 => $this->language->get('text_transaction_cancelled'),
			6 => $this->language->get('text_transaction_suspended'),
			7 => $this->language->get('text_transaction_suspended_failed'),
			8 => $this->language->get('text_transaction_outstanding_failed'),
			9 => $this->language->get('text_transaction_expired'),
		);
		
			private $recurring_status = array(
		0 => 'Inactief',
		1 => 'Actief',
		2 => 'Gestopt',
		3 => 'Geannuleerd',
		4 => 'Verlopen / Voldaan'
	);

	private $transaction_type = array(
		0 => 'Aangemaakt',
		1 => 'Betaling',
		2 => 'Openstaande betalingen',
		3 => 'betaling overgeslagen',
		4 => 'Betaling mislukt',
		5 => 'Geannuleerd',
		6 => 'Gestopt',
		7 => 'Gestopt door mislukte betaling(en)',
		8 => 'Openstaande betaling mislukt',
		9 => 'Verlopen'
	);

		
		
*/


// Column
$_['column_date_added'] 	= 'Datum';
$_['column_type'] 			= 'Type';
$_['column_amount']			= 'Bedrag';
$_['column_status'] 		= 'Status';
$_['column_product'] 		= 'Product';
$_['column_order_recurring_id']	= 'Profiel ID';

// Error
$_['error_not_cancelled'] = 'Error: %s';
$_['error_not_found'] 	  = 'Annuleren van het betalingsprofiel is mislukt';

// Button
$_['button_return']       = 'Terug';