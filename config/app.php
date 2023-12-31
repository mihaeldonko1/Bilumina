<?php return array (
  'name' => 'Laravel',
  'env' => 'production',
  'debug' => false,
  'url' => 'http://127.0.0.1:8000/',
  'asset_url' => NULL,
  'timezone' => 'UTC',
  'locale' => 'sl_SI',
  'fallback_locale' => 'en',
  'key' => 'base64:cE81WlhFQXpMMjlIb2FNZDRwNDZwSUxsRFp1aW1ETlg=',
  'cipher' => 'AES-256-CBC',
  'log' => 'daily',
  'providers' => 
  array (
    0 => 'MicroweberPackages\\App\\Providers\\AppServiceProvider',
    1 => 'MicroweberPackages\\App\\Providers\\EventServiceProvider',
    2 => 'MicroweberPackages\\App\\Providers\\RouteServiceProvider',
  ),
  'manifest' => storage_path().DIRECTORY_SEPARATOR.'framework',
);