<?php
namespace MR\Entity;
/**
 * @author dewayne
 *
 */
class UserTest 
	extends \ModelTestCase
{
	public function testCanCreateUser()
	{
		$this->assertInstanceOf('MR\Entity\User',new User());
	}
}

?>
