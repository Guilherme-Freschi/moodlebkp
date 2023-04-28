<?php

class __Mustache_f612378942fc9cfdfb56b35df009c2d8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="d-block moodle-has-zindex ';
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'closed';
        }
        $buffer .= '" aria-hidden="';
        $value = $context->find('navdraweropen');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '    <div class="nav-drawer-container">
';
        $buffer .= $indent . '
';
        $value = $context->find('isnotloggedin');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('output.search_box'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sidebartopblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('customsidebarlogo');
        $buffer .= $this->sectionEd6a13b99e94e9eed86eb2aa485fac3a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-sidebar-mycourses">
';
        $buffer .= $indent . '            <button class="rui-sidebar-abtn rui-sidebar-nav-item-link" type="button" data-toggle="collapse" data-target="#myCoursesBox" aria-expanded="false" aria-controls="myCoursesBox">
';
        $buffer .= $indent . '                <span class="rui-sidebar-nav-icon">
';
        $buffer .= $indent . '                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '                        <path d="M10.75 7.75C10.75 6.64543 11.6454 5.75 12.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H12.75C11.6454 18.25 10.75 17.3546 10.75 16.25V7.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '                        <path d="M10.25 8.5C10.6642 8.5 11 8.16421 11 7.75C11 7.33579 10.6642 7 10.25 7V8.5ZM10.25 18C10.6642 18 11 17.6642 11 17.25C11 16.8358 10.6642 16.5 10.25 16.5V18ZM9.75 8.5H10.25V7H9.75V8.5ZM10.25 16.5H9.75V18H10.25V16.5ZM8.5 15.25V9.75H7V15.25H8.5ZM9.75 16.5C9.05964 16.5 8.5 15.9404 8.5 15.25H7C7 16.7688 8.23122 18 9.75 18V16.5ZM9.75 7C8.23122 7 7 8.23122 7 9.75H8.5C8.5 9.05964 9.05964 8.5 9.75 8.5V7Z" fill="currentColor"></path>
';
        $buffer .= $indent . '                        <path d="M7.25 9.5C7.66421 9.5 8 9.16421 8 8.75C8 8.33579 7.66421 8 7.25 8V9.5ZM7.25 17C7.66421 17 8 16.6642 8 16.25C8 15.8358 7.66421 15.5 7.25 15.5V17ZM6.75 9.5H7.25V8H6.75V9.5ZM7.25 15.5H6.75V17H7.25V15.5ZM5.5 14.25V10.75H4V14.25H5.5ZM6.75 15.5C6.05964 15.5 5.5 14.9404 5.5 14.25H4C4 15.7688 5.23122 17 6.75 17V15.5ZM6.75 8C5.23122 8 4 9.23122 4 10.75H5.5C5.5 10.0596 6.05964 9.5 6.75 9.5V8Z" fill="currentColor"></path>
';
        $buffer .= $indent . '                    </svg>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                <span class="rui-sidebar-nav-text">';
        $value = $this->resolveValue($context->findDot('output.alpha_mycourses_heading_text'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <div class="collapse" id="myCoursesBox">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.alpha_mycourses_heading'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="rui-course-wrapper">';
        $value = $this->resolveValue($context->findDot('output.alpha_mycourses'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.alpha_allcourseslink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>    
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('customstcontent');
        $buffer .= $this->sectionE5516a232765ef892c7245492f4bc795($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('output.mainsidebarmenu');
        $buffer .= $this->section9503be11e303b4181a263ba5b0ba030f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('iscoursepage');
        $buffer .= $this->section63ae35a5e905555902cb5e6d40c91c51($context, $indent, $value);
        $buffer .= $indent . '        
';
        $value = $context->find('customsmcontent');
        $buffer .= $this->section0b675c9272780bfd334641c565bdee6b($context, $indent, $value);
        $buffer .= $indent . '        
';
        $value = $context->find('customsfcontent');
        $buffer .= $this->sectionBfe52556ff93a1a22bb90230d6089429($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sidebarbottomblocks'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-drawer-footer">
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.adminheaderlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-inline-flex justify-content-between w-100">
';
        $value = $context->findDot('output.render_lang_menu');
        $buffer .= $this->section58ea2110e26bc5284119fc59e06434e4($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f02bdab39bdb326c592eb1133254d23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dark-mode-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dark-mode-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section788395411b59d2ee863e110160dbc71a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{customsidebardmlogo}}" alt="{{sitename}}" class="rui-custom-dmlogo ml-2 img-fluid" />';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('customsidebardmlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-custom-dmlogo ml-2 img-fluid" />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd6a13b99e94e9eed86eb2aa485fac3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-drawer-logo {{#customsidebardmlogo}}dark-mode-logo{{/customsidebardmlogo}}">
            <img src="{{customsidebarlogo}}" alt="{{sitename}}" class="rui-custom-logo ml-2 img-fluid" />
            {{#customsidebardmlogo}}<img src="{{customsidebardmlogo}}" alt="{{sitename}}" class="rui-custom-dmlogo ml-2 img-fluid" />{{/customsidebardmlogo}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-drawer-logo ';
                $value = $context->find('customsidebardmlogo');
                $buffer .= $this->section9f02bdab39bdb326c592eb1133254d23($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('customsidebarlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-custom-logo ml-2 img-fluid" />
';
                $buffer .= $indent . '            ';
                $value = $context->find('customsidebardmlogo');
                $buffer .= $this->section788395411b59d2ee863e110160dbc71a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5516a232765ef892c7245492f4bc795(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-custom-sidebar-content my-4">
        {{{customstcontent}}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-custom-sidebar-content my-4">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customstcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9503be11e303b4181a263ba5b0ba030f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="rui-flatnavigation rui-flatnavigation-box {{^customsidebarlogo}}mt-2{{/customsidebarlogo}}">
        {{{output.mainsidebarmenu}}}
        {{{customnavitems}}}
        </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul class="rui-flatnavigation rui-flatnavigation-box ';
                $value = $context->find('customsidebarlogo');
                if (empty($value)) {
                    
                    $buffer .= 'mt-2';
                }
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->findDot('output.mainsidebarmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customnavitems'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB586ea53f596daa9412d78c39a678ab9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-drawer-course-nav">
            <ul class="rui-flatnavigation rui-flatnavigation-sm">
                {{{ output.courseheadermenu }}}
            </ul>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-drawer-course-nav">
';
                $buffer .= $indent . '            <ul class="rui-flatnavigation rui-flatnavigation-sm">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.courseheadermenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63ae35a5e905555902cb5e6d40c91c51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{# output.courseheadermenu }}
        <div class="rui-drawer-course-nav">
            <ul class="rui-flatnavigation rui-flatnavigation-sm">
                {{{ output.courseheadermenu }}}
            </ul>
        </div>
        {{/ output.courseheadermenu }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('output.courseheadermenu');
                $buffer .= $this->sectionB586ea53f596daa9412d78c39a678ab9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b675c9272780bfd334641c565bdee6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-custom-sidebar-content">
        {{{customsmcontent}}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-custom-sidebar-content">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customsmcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfe52556ff93a1a22bb90230d6089429(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-custom-sidebar-content my-4">
        {{{customsfcontent}}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-custom-sidebar-content my-4">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('customsfcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58ea2110e26bc5284119fc59e06434e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-inline-flex m-0">
                {{{ output.render_lang_menu }}}
            </div> 
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-inline-flex m-0">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.render_lang_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
