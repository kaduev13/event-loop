<?php
/**
 * @author Ivan Kalita kaduev13@gmail.com
 */

namespace React\Tests\EventLoop;


use React\EventLoop\PeclEvLoop;

class PeclEvLoopTest extends AbstractLoopTest
{
    public function createLoop()
    {
        if (!class_exists('EvLoop')) {
            $this->markTestSkipped('pecl-ev tests skipped because ext-ev is not installed.');
        }

        return new PeclEvLoop();
    }
}