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

