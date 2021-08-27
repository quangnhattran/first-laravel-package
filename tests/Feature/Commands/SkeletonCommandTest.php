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

    /** @test */
    public function config_output_text_used_by_command()
    {
        config()->set('package.output_text', 'Okay baby');

        $this->artisan('skeleton')->expectsOutput('Okay baby');
    }
}
