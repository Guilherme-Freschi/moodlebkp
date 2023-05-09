<?php

class __Mustache_6d01cf80a60c21a57d3c4e0a2d407d29 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="starred-courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '     data-region="starred-courses-view"
';
        $buffer .= $indent . '     data-nocoursesimg="';
        $value = $this->resolveValue($context->find('nocoursesimg'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div data-region="starred-courses-view-content">
';
        $buffer .= $indent . '        <div data-region="starred-courses-loading-placeholder">
';
        $buffer .= $indent . '            <div class="rui-loading-placeholder">
';
        $buffer .= $indent . '                <svg class="spinner" viewBox="0 0 50 50">
';
        $buffer .= $indent . '                    <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
';
        $buffer .= $indent . '                </svg>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
