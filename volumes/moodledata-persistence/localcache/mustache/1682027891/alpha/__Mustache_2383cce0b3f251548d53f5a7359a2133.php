<?php

class __Mustache_2383cce0b3f251548d53f5a7359a2133 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="sticky-header-settings-menu d-inline-flex">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.customeditblockbtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }
}
