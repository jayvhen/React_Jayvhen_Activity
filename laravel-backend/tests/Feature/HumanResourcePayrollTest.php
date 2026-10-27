<?php

it('keeps gross pay separate from absence deductions', function () {
    $response = $this->postJson('/payroll/calculate', [
        'employmentType' => 'Regular',
        'positionTier' => 'Senior',
        'daysAbsent' => 1,
        'minutesLate' => 0,
        'overtimeHours' => 3.2,
    ]);

    $response
        ->assertOk()
        ->assertJsonPath('grossPay', 40909.09)
        ->assertJsonPath('absentDeduction', 1818.18);
});
