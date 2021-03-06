<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemA5.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemA5Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('9941510001', '251437');

        foreach ($validAccounts as $account) {
            $validator = new SystemA5($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new SystemA5($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}