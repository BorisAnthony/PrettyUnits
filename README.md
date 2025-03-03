# Pretty Unit

<!-- ![GitHub](https://img.shields.io/github/license/borisanthony/pretty-unit)
![PHP Version Support](https://img.shields.io/packagist/php-v/borisanthony/pretty-unit) -->

### A wrapper class for accessing [Prinsfrank/measurement-unit](https://github.com/PrinsFrank/measurement-unit/) and formatting its output.

Pretty Unit combines most of Measurement Unit's power in a simple API and adds a `sprintf` formatter, for when you need to format measurements values and their symbols.

The methods return a formatted `(string)`, ready for outputing or storing.

---

## Setup

> **Note**: Measurement Unit requires PHP 8.1 - 8.3

To use this package in your project, run the following command:

```shell
composer require borisanthony/pretty-unit
```
*[Measurement Unit](https://github.com/PrinsFrank/measurement-unit/) is a dependency, so if you don't already have it installed it will be.*


## Usage

**See `/tests/Unit/PrettyUnitTest.php` for a few examples of usage.**

To keep commands shorter, we skip Measurement Unit's "type" groupings.

To avoid method name collisions, we drop-capped the initial of our method names 

```php
$HTML = PrettyUnit::meterPerSecond(10)->Html();
```
This will invoke `PrinsFrank\MeasurementUnit\Speed\MeterPerSecond` and pass it to the Html formatter.



### Formatting

The formatter uses [`vsprintf()`](https://www.php.net/manual/en/function.vsprintf.php) under the hood.
Once you get the hang of its syntax, it'll do most what you might need here.
There is a default HTML template loaded in the `Html()` method (`<span class="value">%1$.1f</span> <span class="symbol">%2$s</span>`), but you can pass any `printf()` pattern you like, as well as invoke `->Format()` directly.


### Unit conversions

Just for the heck of it, we maintain the ability to convert between Measurement Unit's types.

```php
$HTML = PrettyUnit::meterPerSecond(13.2)->toKilometerPerHour()->Html();
```

*This way you get most of MU's power coupled with the formatter.*

---

## Units provided by Measurement Unit

| Type        | Available unit                                                                                                |
|-------------|---------------------------------------------------------------------------------------------------------------|
| Length      | Fathom, Foot, Furlong, HorseLength, Inch, Meter, Kilometer, NauticalMile, StatuteMile, SurveyMile, Thou, Yard |
| Speed       | KilometerPerHour, Knot, MeterPerSecond, MilesPerHour                                                          |
| Temperature | Celsius, Fahrenheit, Kelvin, Rankine                                                                          |
| Time        | Day, Hour, Minute, Second                                                                                     |
| Torque      | NewtonMeter                                                                                                   |
| Volume      | CubicInch, CubicMeter, CubicYard, FluidDram, FluidOunce, Liter, Pint, Quart, TableSpoon                       |
| Weight      | Kilogram, MetricTon, Pound                                                                                    |

All the units of a type can be converted to each other with corresponding methods.
