<?php
/**
 * Created by PhpStorm.
 * User: gamalan
 * Date: 07/10/16
 * Time: 10:24
 */

namespace Application\Router;

use Phalcon\Mvc\Router\Group;

class MainRouter extends Group
{
    public function initialize()
    {
        $this->setPaths([
            'namespaces' => 'Application\\Controllers',
            'controller'=>'index'
        ]);

        $this->add('/', ['action' => 'index']);
        $this->add('/employee/save', ['action' => 'save']);
        $this->add('/employee/edit', ['action' => 'edit']);
        $this->add('/employee/delete', ['action' => 'delete']);
    
    }
}