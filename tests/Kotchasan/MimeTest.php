<?php
namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-02-19 at 08:24:20.
 */
class MimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Mime
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Mime;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * Generated from @assert (array('jpg','gif','png')) [==]  array('jpg' => 'image/jpeg', 'gif' => 'image/gif', 'png' => 'image/png').
     *
     * @covers Kotchasan\Mime::get
     */
    public function testGet()
    {

        $this->assertEquals(
            array('jpg' => 'image/jpeg', 'gif' => 'image/gif', 'png' => 'image/png'), \Kotchasan\Mime::get(array('jpg', 'gif', 'png'))
        );
    }

    /**
     * Generated from @assert (array('jpg','gif','png'), 'image/png') [==] true.
     *
     * @covers Kotchasan\Mime::check
     */
    public function testCheck()
    {

        $this->assertTrue(
            \Kotchasan\Mime::check(array('jpg', 'gif', 'png'), 'image/png')
        );
    }

    /**
     * Generated from @assert (array('jpg','gif','png')) [==] "image/jpeg,image/gif,image/png".
     *
     * @covers Kotchasan\Mime::getAccept
     */
    public function testGetEccept()
    {

        $this->assertEquals(
            "image/jpeg,image/gif,image/png", \Kotchasan\Mime::getAccept(array('jpg', 'gif', 'png'))
        );
    }

    /**
     * @covers Kotchasan\Mime::typies
     * @todo   Implement testTypies().
     */
    public function testTypies()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
