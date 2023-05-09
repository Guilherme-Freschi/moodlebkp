<?php

class __Mustache_d07b800f91e482887ab8e752855675dd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer>
';
        $buffer .= $indent . '    <div class="my-4 text-center">
';
        $buffer .= $indent . '                <div id="course-footer">';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="rui-footer-btns">
';
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->sectionA5045e176c80a1e38cc2b65fe257dee2($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('output.services_support_link');
        $buffer .= $this->sectionB296d7c23f2b2043f3fa9868d01f2f5a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('output.supportemail');
        $buffer .= $this->sectionD8b1a3896028d2a4b21f0adcaa75a961($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="tool_usertours-resettourcontainer"></div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="rui-debug rui-footer-btns w-100 d-block my-2 small">';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $value = $context->findDot('output.moodle_release');
        $buffer .= $this->sectionF1bd85934ab2d0a8f3390097c3d2ff52($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div class="rui-footer-btns">';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '</footer>
';

        return $buffer;
    }

    private function sectionA5045e176c80a1e38cc2b65fe257dee2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="helplink">{{{ output.page_doc_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB296d7c23f2b2043f3fa9868d01f2f5a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="supportlink">{{{ output.services_support_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="supportlink">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8b1a3896028d2a4b21f0adcaa75a961(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="suportemail">{{{ output.supportemail }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="suportemail">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1bd85934ab2d0a8f3390097c3d2ff52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="mt-2 small">{{#str}}version, core{{/str}} {{{ output.moodle_release }}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="mt-2 small">';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
