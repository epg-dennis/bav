<?php

namespace Bav\Validator\De;

/**
 * Test class for System30.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System30Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('52138217', '123234348');

        foreach ($validAccounts as $account) {
            $validator = new System30($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('1000805', '539290855');

        foreach ($validAccounts as $account) {
            $validator = new System30($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}