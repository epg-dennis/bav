<?php

namespace Bav\Validator\De;

/**
 * Test class for System18.
 * Generated by PHPUnit on 2012-07-05 at 19:22:55.
 */
class System18Test extends \Bav\Test\SystemTestCase
{

    public function testWithValidAccountReturnsTrue()
    {
        $validAccounts = array('1000809', '539290851');

        foreach ($validAccounts as $account) {
            $validator = new System18($this->bank);
            $this->assertTrue($validator->isValid($account));
        }
    }

    public function testWithInvalidAccountReturnsFalse()
    {
        $validAccounts = array('1000805', '539290859');

        foreach ($validAccounts as $account) {
            $validator = new System18($this->bank);
            $this->assertFalse($validator->isValid($account));
        }
    }

}