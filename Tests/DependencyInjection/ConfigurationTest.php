<?php

namespace Blage\StompBundle\DependencyInjection;

/**
 * Description of ConfigurationTest
 *
 * @author srohweder
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testConfiguration()
    {
        $configuration = new Configuration();
        $treeBuilder = $configuration->getConfigTreeBuilder();
        $this->assertInstanceOf('Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder', $treeBuilder);
    }
}
