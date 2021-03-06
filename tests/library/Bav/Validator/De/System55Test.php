<?php

namespace Bav\Validator\De;

/**
 * Test class for System55.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System55Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('1362485273', '879843');

        foreach ($validAccounts as $account) {
            $validator = new System55($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('0099345678', '4912345678');

        foreach ($validAccounts as $account) {
            $validator = new System55($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}