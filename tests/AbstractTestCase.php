<?php

/*
 * This file is part of Laravel Core.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\Core;

use GrahamCampbell\Core\CoreServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test case class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * @before
     */
    public function createEnvFile()
    {
        $path = method_exists($this->app, 'environmentFilePath') ? $this->app->environmentFilePath() : $this->app->basePath().'/.env';

        file_put_contents($path, "APP_KEY=SomeRandomString\n");
    }

    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return CoreServiceProvider::class;
    }
}
