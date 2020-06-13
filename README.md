# Laraform-Command

This library provides a simple command to generate Laraform forms.

## Installation

Use the package manager [composer](https://getcomposer.org/) to install foobar.

```bash
composer require gabrielchavezme/laraform-command
```

## Usage
You can generate an empty Laraform class by running the following command:
```bash
php artisan make:laraform YourFormName
```
If you need to generate a class with the default methods and save some time, you can add the --m or --methods parameter:
```bash
php artisan make:laraform YourFormName -m
```
This will generate a class with the default methods, saving some time in your development.


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)