<?php

declare(strict_types=1);

namespace BorisAnthony\PrettyUnit;

// use PrinsFrank\MeasurementUnit;
use PrinsFrank\MeasurementUnit\MeasurementUnit;

use PrinsFrank\MeasurementUnit\Length\Length;
use PrinsFrank\MeasurementUnit\Length\Fathom;
use PrinsFrank\MeasurementUnit\Length\Foot;
use PrinsFrank\MeasurementUnit\Length\Furlong;
use PrinsFrank\MeasurementUnit\Length\HorseLength;
use PrinsFrank\MeasurementUnit\Length\Inch;
use PrinsFrank\MeasurementUnit\Length\Kilometer;
use PrinsFrank\MeasurementUnit\Length\Meter;
use PrinsFrank\MeasurementUnit\Length\NauticalMile;
use PrinsFrank\MeasurementUnit\Length\StatuteMile;
use PrinsFrank\MeasurementUnit\Length\SurveyMile;
use PrinsFrank\MeasurementUnit\Length\Thou;
use PrinsFrank\MeasurementUnit\Length\Yard;

use PrinsFrank\MeasurementUnit\Speed\Speed;
use PrinsFrank\MeasurementUnit\Speed\KilometerPerHour;
use PrinsFrank\MeasurementUnit\Speed\Knot;
use PrinsFrank\MeasurementUnit\Speed\MeterPerSecond;
use PrinsFrank\MeasurementUnit\Speed\MilesPerHour;

use PrinsFrank\MeasurementUnit\Temperature\Temperature;
use PrinsFrank\MeasurementUnit\Temperature\Celsius;
use PrinsFrank\MeasurementUnit\Temperature\Fahrenheit;
use PrinsFrank\MeasurementUnit\Temperature\Kelvin;
use PrinsFrank\MeasurementUnit\Temperature\Rankine;

use PrinsFrank\MeasurementUnit\Time\Time;
use PrinsFrank\MeasurementUnit\Time\Day;
use PrinsFrank\MeasurementUnit\Time\Hour;
use PrinsFrank\MeasurementUnit\Time\Minute;
use PrinsFrank\MeasurementUnit\Time\Second;

use PrinsFrank\MeasurementUnit\Torque\Torque;
use PrinsFrank\MeasurementUnit\Torque\NewtonMeter;

use PrinsFrank\MeasurementUnit\Volume\Volume;
use PrinsFrank\MeasurementUnit\Volume\CubicInch;
use PrinsFrank\MeasurementUnit\Volume\CubicMeter;
use PrinsFrank\MeasurementUnit\Volume\CubicYard;
use PrinsFrank\MeasurementUnit\Volume\FluidDram;
use PrinsFrank\MeasurementUnit\Volume\FluidOunce;
use PrinsFrank\MeasurementUnit\Volume\Liter;
use PrinsFrank\MeasurementUnit\Volume\Pint;
use PrinsFrank\MeasurementUnit\Volume\Quart;
use PrinsFrank\MeasurementUnit\Volume\TableSpoon;

use PrinsFrank\MeasurementUnit\Weight\Weight;
use PrinsFrank\MeasurementUnit\Weight\Kilogram;
use PrinsFrank\MeasurementUnit\Weight\MetricTon;
use PrinsFrank\MeasurementUnit\Weight\Pound;


class PrettyUnit
{
  private Length|Speed|Temperature|Time|Torque|Volume|Weight $measurementUnit;

  public function Html(string $sprintf_Template = '<span class="value">%1$.1f</span> <span class="symbol">%2$s</span>'): string
  {
    $HTML = $this->Format(sprintf_Template: $sprintf_Template);
    return $HTML;
  }


  public function Format(string $sprintf_Template = '%.1f %s'): string
  {
    $value = $this->measurementUnit->value;
    $symbol = $this->measurementUnit->getSymbol();
    return vsprintf($sprintf_Template, [$value, $symbol]);
  }


  // ---------------------------------------------------------------------------
  // LENGTHs

  public static function fathom(float $value): self
  {
    return self::createInstance(Fathom::class, $value);
  }

  public static function foot(float $value): self
  {
    return self::createInstance(Foot::class, $value);
  }

  public static function furlong(float $value): self
  {
    return self::createInstance(Furlong::class, $value);
  }

  public static function horseLength(float $value): self
  {
    return self::createInstance(HorseLength::class, $value);
  }

  public static function inch(float $value): self
  {
    return self::createInstance(Inch::class, $value);
  }

  public static function kilometer(float $value): self
  {
    return self::createInstance(Kilometer::class, $value);
  }

  public static function meter(float $value): self
  {
    return self::createInstance(Meter::class, $value);
  }

  public static function nauticalMile(float $value): self
  {
    return self::createInstance(NauticalMile::class, $value);
  }

  public static function statuteMile(float $value): self
  {
    return self::createInstance(StatuteMile::class, $value);
  }

  public static function surveyMile(float $value): self
  {
    return self::createInstance(SurveyMile::class, $value);
  }

  public static function thou(float $value): self
  {
    return self::createInstance(Thou::class, $value);
  }

  public static function yard(float $value): self
  {
    return self::createInstance(Yard::class, $value);
  }

  // ---------------------------------------------------------------------------
  // SPEEDS

  public static function kilometerPerHour(float $value): self
  {
    return self::createInstance(KilometerPerHour::class, $value);
  }

  public static function knot(float $value): self
  {
    return self::createInstance(Knot::class, $value);
  }

  public static function meterPerSecond(float $value): self
  {
    return self::createInstance(MeterPerSecond::class, $value);
  }

  public static function milesPerHour(float $value): self
  {
    return self::createInstance(MilesPerHour::class, $value);
  }

  // ---------------------------------------------------------------------------
  // TEMPERATURES

  public static function celsius(float $value): self
  {
    return self::createInstance(Celsius::class, $value);
  }

  public static function fahrenheit(float $value): self
  {
    return self::createInstance(Fahrenheit::class, $value);
  }

  public static function kelvin(float $value): self
  {
    return self::createInstance(Kelvin::class, $value);
  }

  public static function rankine(float $value): self
  {
    return self::createInstance(Rankine::class, $value);
  }

  // ---------------------------------------------------------------------------
  // TIMES

  public static function day(float $value): self
  {
    return self::createInstance(Day::class, $value);
  }

  public static function hour(float $value): self
  {
    return self::createInstance(Hour::class, $value);
  }

  public static function minute(float $value): self
  {
    return self::createInstance(Minute::class, $value);
  }

  public static function second(float $value): self
  {
    return self::createInstance(Second::class, $value);
  }

  // ---------------------------------------------------------------------------
  // TORQUES

  public static function newtonMeter(float $value): self
  {
    return self::createInstance(NewtonMeter::class, $value);
  }

  // ---------------------------------------------------------------------------
  // VOLUMES

  public static function cubicInch(float $value): self
  {
    return self::createInstance(CubicInch::class, $value);
  }

  public static function cubicMeter(float $value): self
  {
    return self::createInstance(CubicMeter::class, $value);
  }

  public static function cubicYard(float $value): self
  {
    return self::createInstance(CubicYard::class, $value);
  }

  public static function fluidDram(float $value): self
  {
    return self::createInstance(FluidDram::class, $value);
  }

  public static function fluidOunce(float $value): self
  {
    return self::createInstance(FluidOunce::class, $value);
  }

  public static function liter(float $value): self
  {
    return self::createInstance(Liter::class, $value);
  }

  public static function pint(float $value): self
  {
    return self::createInstance(Pint::class, $value);
  }

  public static function quart(float $value): self
  {
    return self::createInstance(Quart::class, $value);
  }

  public static function tableSpoon(float $value): self
  {
    return self::createInstance(TableSpoon::class, $value);
  }

  // ---------------------------------------------------------------------------
  // WEIGHTS

  public static function kilogram(float $value): self
  {
    return self::createInstance(Kilogram::class, $value);
  }

  public static function metricTon(float $value): self
  {
    return self::createInstance(MetricTon::class, $value);
  }

  public static function pound(float $value): self
  {
    return self::createInstance(Pound::class, $value);
  }


  
  // ===========================================================================
  // HELPERS

  /**
   * Creates a new instance of the class with the specified measurement unit.
   *
   * @param string $className The name of the measurement unit class.
   * @param float $value The value to be assigned to the measurement unit.
   * @return self A new instance of the class with the specified measurement unit.
   */
  private static function createInstance(string $className, float $value): self
  {
    $instance = new self();
    $instance->measurementUnit = new $className((float)$value);
    return $instance;
  }

  /**
   * Magic method to handle dynamic method calls to the measurement unit.
   *
   * @param string $name The name of the method being called.
   * @param array $arguments The arguments passed to the method.
   * @return mixed The result of the method call. If the result is an instance of MeasurementUnit, the current instance is returned.
   */
  public function __call($name, $arguments)
  {
    $result = call_user_func_array([$this->measurementUnit, $name], $arguments);
    if ($result instanceof MeasurementUnit) {
      $this->measurementUnit = $result;
      return $this;
    }
    return $result;
  }
}
