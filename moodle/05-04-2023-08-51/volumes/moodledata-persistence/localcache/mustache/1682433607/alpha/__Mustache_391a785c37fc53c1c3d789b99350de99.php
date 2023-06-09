<?php

class __Mustache_391a785c37fc53c1c3d789b99350de99 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core/search_input')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div class="d-flex align-items-center align-self-center mx-2">
';
        $value = $context->find('helpicon');
        $buffer .= $this->section24e84f6009cc54b84b541a6503464693($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section24e84f6009cc54b84b541a6503464693(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>core/help_icon}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
