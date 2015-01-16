<?php

namespace Oneup\HorizontalRule\ContentElement;

class HorizontalRule extends \ContentElement
{
    protected $strTemplate = 'ce_horizontal_rule';

    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### '
                . utf8_strtoupper($GLOBALS['TL_LANG']['CTE']['horizontal_rule'][0])
                . ' ###';

            return $objTemplate->parse();
        }

        return parent::generate();
    }

    protected function compile()
    {
        // nothing to do here...
    }
}
