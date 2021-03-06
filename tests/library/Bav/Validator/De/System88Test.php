<?php

namespace Bav\Validator\De;

/**
 * Test class for System88.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System88Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('2525259', '1000500', '90013000');

        foreach ($validAccounts as $account) {
            $validator = new System88($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('223456600', '45555555');

        foreach ($validAccounts as $account) {
            $validator = new System88($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}