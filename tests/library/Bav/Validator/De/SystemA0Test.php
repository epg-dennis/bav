<?php

namespace Bav\Validator\De;

/**
 * Test class for SystemA0.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class SystemA0Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = explode(', ', '521003287, 54500, 3287, 18761, 28290');

        foreach ($validAccounts as $account) {
            $validator = new SystemA0($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('864089000', '87096000');

        foreach ($validAccounts as $account) {
            $validator = new SystemA0($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}