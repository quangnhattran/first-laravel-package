<?php

namespace Qt\FirstLaravelPackage\Tests\Feature\Commands;

use Qt\FirstLaravelPackage\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    /** @test */
    public function command_skeleton_works()
    {
        $this->artisan('skeleton')->assertExitCode(0);
    }
}
