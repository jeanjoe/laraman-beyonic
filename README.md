## Laraman Beyonic.

Laraman Beyonic is a Laravel package for managing Beyonic Mobile Money APIs.

## Requirements

- Laravel v5.4+
- Beyonic API Token

### Note

- This packages is only for Collections yet. More options are coming

## How to install

- To ger started, install the laraman/beyonic package

```
composer require laraman/beyonic
```

- For Laravel <=5.4, register the Facade in the `app.php` file inside config directory

- To List of providers add:

```
Laraman\Beyonic\BeyonicServiceProvider::class,
```

- To alias add:

```
'LaramanBeyonic' => Laraman\Beyonic\Facades\BeyonicFacade::class,
```

## Environment files

- Add `BEYONIC_API_KEY` to your `.env` file
- You can also publish the configuration file `beyonic.php` to your `config` directory with

```
php artisan vendor:publish  --provider="Laraman\Beyonic\BeyonicServiceProvider"
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
