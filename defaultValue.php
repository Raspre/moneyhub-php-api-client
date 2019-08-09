<?php
define('BANK_IDS',
    [
        'ALL' => 'all',
        'LEGACY' => 'legacy',
        'TEST' => 'test',
        'MONZO' => 'fa37a6ecc38eea38bdf3dd0fdcb68fab',
        'DAG_BANK_TEST' => '1b3cd579899b5f5b666c15561a48c8b6',
        'DAG_INVESTMENT_TEST' => '06995ed5c6c6f25e323b34dc45968426',
        'MODELO_OPEN_BANKING_TEST' => 'b74f1a79f0be8bdb857d82d0f041d7d2',
        'MONEYHUB_OPEN_BANKING_TEST' => '1ffe704d39629a929c8e293880fb449a',
    ]
);

define('DEFAULT_VALUES', [
    'DEFAULT_BANK_ID' => BANK_IDS['MONEYHUB_OPEN_BANKING_TEST'],
    'DEFAULT_STATE' => 'foo',
    'DEFAULT_NONCE' => 'bar',
    'DEFAULT_PAYMENT_AMOUNT' => 100,
]);