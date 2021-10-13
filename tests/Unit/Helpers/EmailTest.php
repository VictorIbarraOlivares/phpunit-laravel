<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function test_email()
    {
        $result = Email::validate('v@admin.com');
        $this->assertTrue($result);

        $result = Email::validate('v@@admin.com');
        $this->assertFalse($result);
    }
}
