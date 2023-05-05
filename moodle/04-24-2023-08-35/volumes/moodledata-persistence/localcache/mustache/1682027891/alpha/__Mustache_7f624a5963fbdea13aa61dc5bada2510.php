<?php

class __Mustache_7f624a5963fbdea13aa61dc5bada2510 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('headerlinksdata');
        $buffer .= $this->section07c07f4209bda4c4beab2ea803ba19e3($context, $indent, $value);

        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe42c260c0f8d7c254627de38482e1c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="rui-sidebar-nav-item">
        <a href="{{{url}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
            <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
            <span class="rui-sidebar-nav-text">{{{title}}}</span>
        </a>
    </li>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <li class="rui-sidebar-nav-item">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-sidebar-nav-item-link ';
                $value = $context->find('isactiveitem');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="rui-sidebar-nav-icon">';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            <span class="rui-sidebar-nav-text">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07c07f4209bda4c4beab2ea803ba19e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#status}}
    <li class="rui-sidebar-nav-item">
        <a href="{{{url}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
            <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
            <span class="rui-sidebar-nav-text">{{{title}}}</span>
        </a>
    </li>
    {{/status}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('status');
                $buffer .= $this->sectionEe42c260c0f8d7c254627de38482e1c5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
