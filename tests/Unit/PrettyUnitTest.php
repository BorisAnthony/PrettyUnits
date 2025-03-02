<?php

use BorisAnthony\PrettyUnit\PrettyUnit;

it("returns the speed in m/s as an HTML formatted string using the default template", function () {
    $HTML = PrettyUnit::meterPerSecond(10)->Html();
    // dump($HTML);
    expect($HTML)->toBeString();
    expect($HTML)->toBe('<span class="value">10.0</span> <span class="symbol">m/s</span>');
});
it("returns the speed in m/s as an HTML formatted string using a custom template", function () {
    $sprintf_Template = '<v>%.3f</v> <u>%s</u>';
    $HTML = PrettyUnit::meterPerSecond(13.2)->Html($sprintf_Template);
    // dump($HTML);
    expect($HTML)->toBeString();
    expect($HTML)->toBe('<v>13.200</v> <u>m/s</u>');
});

it("returns the speed converted from m/s to km/h as an HTML formatted string using a custom template", function () {
    $pattern = '<v>%.3f</v>　<u>%s</u>';
    $HTML = PrettyUnit::meterPerSecond(13.2)->toKilometerPerHour()->Html($pattern);
    // dump($HTML);
    expect($HTML)->toBeString();
    expect($HTML)->toBe('<v>47.520</v>　<u>km/h</u>');
});

it("returns the speed converted from m/s to km/h as a formatted string using a custom template", function () {
    $pattern = '| %.3f %s |';
    $formatted = PrettyUnit::meterPerSecond(13.2)->toKilometerPerHour()->Format($pattern);
    // dump($formatted);
    expect($formatted)->toBeString();
    expect($formatted)->toBe('| 47.520 km/h |');
});

it("returns the measurement value converted from m/s to km/h as the source Object", function () {
    $result = PrettyUnit::meterPerSecond(13.2)->toKilometerPerHour()->getObject();
    // dump($result);
    expect($result)->toBeObject();
    $className = get_class($result);
    // dump($className);
    expect($className)->toContain('PrinsFrank\MeasurementUnit');
});

it("returns the measurement source Object", function () {
    $result = PrettyUnit::meterPerSecond(13.2)->getObject();
    // dump($result);
    expect($result)->toBeObject();
    $className = get_class($result);
    // dump($className);
    expect($className)->toContain('PrinsFrank\MeasurementUnit');
});

it("returns the measurement value as a float from the source Object", function () {
    $result = PrettyUnit::meterPerSecond(13.2)->getValue();
    // dump($result);
    expect($result)->toBeFloat();
    expect($result)->toBe(13.2);
});

it("returns the measurement symbol as a string from the source Object", function () {
    $result = PrettyUnit::meterPerSecond(13.2)->getSymbol();
    // dump($result);
    expect($result)->toBeString();
    expect($result)->toBe('m/s');
});

it("returns the converted measurement symbol as a string from the source Object", function () {
    $result = PrettyUnit::meterPerSecond(13.2)->toKilometerPerHour()->getSymbol();
    // dump($result);
    expect($result)->toBeString();
    expect($result)->toBe('km/h');
});
