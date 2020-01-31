## Laraman Beyonic.

Laraman Beyonic is a Laravel package for working with [Beyonic Mobile Money APIs](https://apidocs.beyonic.com/).

## Requirements

- Laravel **v5.0+**
- Beyonic API Token

### Note

- For **NOW** this packages works with **Collection Requests, Collections and Payments**. More options are coming soon.

## Installation

- To get started, install the `laraman/beyonic` package.

```php
composer require laraman/beyonic
```

- For Laravel **<=5.4**, register the Facade in the `app.php` file inside config directory

- To List of providers add:

```php
Laraman\Beyonic\BeyonicServiceProvider::class,
```

- To alias add:

```php
'LaramanBeyonic' => Laraman\Beyonic\Facades\BeyonicFacade::class,
```

- For Laravel **>5.4**, NO need to worry, the `LaramanBeyonic` facade will be automatically discovered and loaded for you.

## Environment files

- Add `BEYONIC_API_KEY` to your `.env` file and provide a valid Beyonic Token.
- You can also publish the config file `beyonic.php` to your `config` directory and make necessary adjustments but this is optinal.

```php
php artisan vendor:publish  --provider="Laraman\Beyonic\BeyonicServiceProvider"
```

## How to use

- Inside your controller, import `LaramanBeyonic`.

```php
use LaramanBeyonic;
```

- Then in your controller method, you can the make the various requests, follow the [Beyonic API Documentation](https://apidocs.beyonic.com/) and format your request body accordingly.

- You can then leverage on the `LaramanBeyonic` Methods to make your requests simpler.

#### Collection Requests.

- To make collection request, you can use the following methods.

|Method Description|Method| Argument | Expects Argument| Comment |
|------------------|------|----------|-----------------|---------|
| Make Collection Request | `createCollectionRequest()` | $data | Mandatory | Array of objects|
| Get all Collection Requests|`getAllCollectionRequests()`|$data or NULL|Optional| You can get All or Filter records| 
| Get a Collection Request|`getCollectionRequest()`|$data|Mandatory|Get a specific record|
| Update a Collection Request|`updateCollectionRequest()`|$data, $id|Mandatory | You must have permission|
| Delete a Collection Request|`deleteCollectionRequest()`|$id| Mandatory |You must have permission|


#### Collections.

- To manage your collections, you can use the following methods.

|Method Description|Method| Argument | Expects Argument| Comment |
|------------------|------|----------|-----------------|---------|
| Get all Collections|`getCollections()`|$data or NULL|Optional| You can get All or Filter records| 
| Get a Collection|`getCollection()`|$data|Mandatory|Get a specific record|
| Delete a Collection Request|`deleteCollection()`|$id| Mandatory |You must have permission|


#### Payments.

- To send money to (Pay) mobile users, you can use the following methods.

|Method Description|Method| Argument | Expects Argument| Comment |
|------------------|------|----------|-----------------|---------|
| Make Payment Request | `createPayment()` | $data | Mandatory | Array of objects|
| Get all Payments|`getAllPayments()`|$data or NULL|Optional| You can get All or Filter records| 
| Get a Payment record|`getPayment()`|$data|Mandatory|Get a specific record|
| Update Payment|`updatePayment()`|$data, $id|Mandatory | You must have permission|
| Delete Payment|`deletePayment()`|$id| Mandatory |You must have permission|


#### Example.

- To avoid unncessary errors, you may decide to wrap your request in a `try` and `catch`.

```php
<?php

...

use LaramanBeyonic;

...

class PaymentController {
  
    public function createCollection(Request $request) {
        
        $requestData = [
            "phonenumber" => "+80000000001",
            "amount" => "100.2",
            "currency" => "BXC",
            "metadata" => ["my_id"=>"123ASDAsd123"],
            "send_instructions" => True,
            "subscription_settings" => [
                 "start_date"=>"24/05/2019 10:30:00",
                 "end_date"=>"24/06/2019 10:30:00",
                 "frequency"=>"weekly"
            ]
        ];
        
        try {
          $response = LaramanBeyonic::createCollection( $requestData );
          ...
        } catch (\Exception $ex) {
          $error = json_decode($ex->getMessage());
          ...
        }
    }
}


```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
