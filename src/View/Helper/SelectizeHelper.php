<?php

namespace Selectize\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class SelectizeHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'css' => [
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css',
            'integrity' => 'sha256-EhmqrzYSImS7269rfDxk4H+AHDyu/KwV1d8FDgIXScI=',
        ],
        'script' => [
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js',
            'integrity' => 'sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=',
        ],
    ];

    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * @param array $options
     * @return string|null
     */
    public function css(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        $bootstrap = $this->Html->css('Selectize.selectize.bootstrap4.min', $options);
        if (Configure::read('debug')) {
            return $this->Html->css('Selectize.selectize.min', $options) . $bootstrap;
        } else {
            $options['integrity'] = $this->getConfig('css.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->css($this->getConfig('css.url'), $options) . $bootstrap;
        }
    }

    /**
     * @param array $options
     * @return string|null
     */
    public function script(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->script('Selectize.standalone/selectize.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('script.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->script($this->getConfig('script.url'), $options);
        }
    }

}
