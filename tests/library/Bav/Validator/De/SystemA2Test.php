<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemA2.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemA2Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('3456789019', '5678901231', '6789012348', '3456789012');

        foreach ($validAccounts as $account) {
            $validator = new SystemA2($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new SystemA2($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}