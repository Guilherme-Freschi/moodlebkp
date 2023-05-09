<?php

class __Mustache_3bead1acaa1e4973ba52f77a570dbfa8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="month-navigation-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('calendarinstanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="controls">
';
        $buffer .= $indent . '    <div class="calendar-controls">
';
        $buffer .= $indent . '        <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('previousperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= ' class="arrow_link previous btn btn-icon btn-secondary" ';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section79d01ec0a9380fe9e2b8dce0d84217d2($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('previousperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('previousperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= ' data-drop-zone="nav-link" ';
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <span class="d-none arrow_text">';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            <svg width="20" height="20" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
';
        $buffer .= $indent . '                <path d="M18.5 12H6m0 0l6-6m-6 6l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <h4 class="current">';
        $value = $this->resolveValue($context->find('periodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('nextperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= ' class="arrow_link next btn btn-icon btn-secondary" ';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section2bdd9bdfb552b2c9a443cb6030f28476($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('nextperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('nextperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= ' data-drop-zone="nav-link" ';
        $buffer .= '>
';
        $buffer .= $indent . '                <span class="d-none arrow_text">';
        $value = $this->resolveValue($context->find('nextperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '                <svg width="20" height="20" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
';
        $buffer .= $indent . '                    <path d="M6 12h12.5m0 0l-6-6m6 6l-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '                </svg>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section738bfeac9d88b8fdd88886023c9e8fb5($context, $indent, $value);

        return $buffer;
    }

    private function section79d01ec0a9380fe9e2b8dce0d84217d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthprev, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'monthprev, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdd9bdfb552b2c9a443cb6030f28476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthnext, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'monthnext, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section738bfeac9d88b8fdd88886023c9e8fb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'core_calendar/month_navigation_drag_drop\'], function($, DragDrop) {
    var root = $(\'#month-navigation-{{uniqid}}-{{calendarinstanceid}}\');
    DragDrop.init(root);
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'core_calendar/month_navigation_drag_drop\'], function($, DragDrop) {
';
                $buffer .= $indent . '    var root = $(\'#month-navigation-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('calendarinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    DragDrop.init(root);
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
