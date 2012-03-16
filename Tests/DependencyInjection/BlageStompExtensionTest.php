<?php

namespace Blage\StompBundle\DependencyInjection;

/**
 * Test the configuration of the extension
 *
 * @author srohweder
 */
class BLageStompExtensionTest
{

    
    public function createConfiguration()
    {
        $yml = <<<EOF
blage_stomp:
        broker_uri: 'tcp://192.168.0.1:61613'
EOF;
        
    }
}
