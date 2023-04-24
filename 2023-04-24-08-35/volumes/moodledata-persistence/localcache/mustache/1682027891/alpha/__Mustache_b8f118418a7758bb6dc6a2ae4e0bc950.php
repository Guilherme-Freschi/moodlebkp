<?php

class __Mustache_b8f118418a7758bb6dc6a2ae4e0bc950 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="page-header-content flex-wrap">
';
        $value = $context->find('contextheader');
        $buffer .= $this->section6b37c3b059a1e4badca1891a0a1eca1b($context, $indent, $value);
        $buffer .= $indent . '  ';
        $value = $context->find('pageheading');
        $buffer .= $this->section02176c8ee7d3096fec933193d77df943($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('courseheader');
        $buffer .= $this->section76d3ec08a48f6a1261a310c53ccfd69f($context, $indent, $value);
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function section6b37c3b059a1e4badca1891a0a1eca1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{.}}}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02176c8ee7d3096fec933193d77df943(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 class="page-sub-title">{{{pageheading}}}</h3>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h3 class="page-sub-title">';
                $value = $this->resolveValue($context->find('pageheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76d3ec08a48f6a1261a310c53ccfd69f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div id="course-header">{{{courseheader}}}</div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <div id="course-header">';
                $value = $this->resolveValue($context->find('courseheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
