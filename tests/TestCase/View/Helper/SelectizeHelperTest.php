<?php

namespace Selectize\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Selectize\View\Helper\SelectizeHelper;

class SelectizeHelperTest extends TestCase {

    /**
     * @var \Selectize\View\Helper\SelectizeHelper
     */
    public $Selectize;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $view = new View();
        $this->Selectize = new SelectizeHelper($view);
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->Selectize);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
