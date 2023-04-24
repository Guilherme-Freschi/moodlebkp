<?php

class __Mustache_eca45ad6a8e52798ecc29b6efbb64646 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('showcoursenav');
        $buffer .= $this->sectionD85e65641ab41bf0c903e95bfdf2f905($context, $indent, $value);

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

    private function sectionDd0c33991e854351b23497cd7a194b5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{url}}}" title="{{{title}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
                <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
                <span class="rui-sidebar-nav-text">{{{title}}}</span>
            </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-sidebar-nav-item-link ';
                $value = $context->find('isactiveitem');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="rui-sidebar-nav-icon">';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                <span class="rui-sidebar-nav-text">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7191bdef277a4c56a3a3db67ce6220eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#status}}
            <a href="{{{url}}}" title="{{{title}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
                <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
                <span class="rui-sidebar-nav-text">{{{title}}}</span>
            </a>
            {{/status}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('status');
                $buffer .= $this->sectionDd0c33991e854351b23497cd7a194b5d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD85e65641ab41bf0c903e95bfdf2f905(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="rui-sidebar-nav-item">
        {{#headerlinksdata}}
            {{#status}}
            <a href="{{{url}}}" title="{{{title}}}" id="{{itemid}}" class="rui-sidebar-nav-item-link {{#isactiveitem}}active{{/isactiveitem}}">
                <span class="rui-sidebar-nav-icon">{{{icon}}}</span>
                <span class="rui-sidebar-nav-text">{{{title}}}</span>
            </a>
            {{/status}}
        {{/headerlinksdata}}
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
                $value = $context->find('headerlinksdata');
                $buffer .= $this->section7191bdef277a4c56a3a3db67ce6220eb($context, $indent, $value);
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
