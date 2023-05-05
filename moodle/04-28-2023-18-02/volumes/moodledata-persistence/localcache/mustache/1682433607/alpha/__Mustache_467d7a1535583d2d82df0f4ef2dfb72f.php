<?php

class __Mustache_467d7a1535583d2d82df0f4ef2dfb72f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="quiz-timer-wrapper" class="mb-2">
';
        $buffer .= $indent . '    <div id="quiz-timer" class="quiz-timer-inner ml-auto" role="timer" aria-atomic="true" aria-relevant="text">
';
        $buffer .= $indent . '        <svg class="quiz-timer-icon mr-2" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="2"></circle>
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-width="2" d="M12 8V12L14 14"></path>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '        <span id="quiz-time-left"></span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
