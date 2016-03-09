<?php

class sfWebDebugJson extends sfWebDebug
{
    public function injectToolbar($content)
    {
        $cont = json_decode($content);
        if ($cont instanceof stdClass) {
            $cont->_debug = $this->getDebugContent();
        } elseif (is_array($cont)) {
            $cont['length'] = count($cont);
            $cont['_debug'] = $this->getDebugContent();
        } else {
            return $content;
        }
        return json_encode($cont);
    }

    public function getDebugContent()
    {
        $debug = array();
        foreach ($this->panels as $name => $panel) {
            $debug[$name] = $panel->getPanelArray();
        }
        return $debug;
    }
}
