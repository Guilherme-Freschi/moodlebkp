<?php

class __Mustache_b1bb68e2925738b7ab978a5db4caa091 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('headerdisplaymultipage');
        $buffer .= $this->sectionCc8f76a1aa52eaaa891c8afd32e52cf7($context, $indent, $value);
        $value = $context->find('headerdisplaymultipage');
        if (empty($value)) {
            
            $value = $context->find('sitehome');
            $buffer .= $this->section61ea6b258fdc623d31de52f7acbec40f($context, $indent, $value);
            $value = $context->find('sitehome');
            if (empty($value)) {
                
                $buffer .= $indent . '        <div class="rui-course-header-btn d-flex align-items-start position-relative col">
';
                $buffer .= $indent . '            <a role="button" data-toggle="collapse"
';
                $buffer .= $indent . '               href="#coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               id="collapssesection';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               aria-expanded="';
                $value = $context->find('contentcollapsed');
                if (empty($value)) {
                    
                    $buffer .= 'true';
                }
                $value = $context->find('contentcollapsed');
                $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               aria-controls="coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               class="rui-course-header-btn-icon icons-collapse-expand justify-content-center
';
                $buffer .= $indent . '                   ';
                $value = $context->find('editing');
                if (empty($value)) {
                    
                    $buffer .= ' stretched-link ';
                }
                $buffer .= '
';
                $buffer .= $indent . '                   ';
                $value = $context->find('contentcollapsed');
                $buffer .= $this->sectionE27d58bd82bf887495509fb3582d0729($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               aria-label="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="icon expanded-icon" title="';
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                        <path d="M12 15.25L16.25 9.75H7.75L12 15.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                        </svg>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="icon collapsed-icon" title="';
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <span class="dir-rtl-hide">
';
                $buffer .= $indent . '                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                <path d="M14.25 12L8.75 7.75V16.25L14.25 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                            </svg>
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                        <span class="dir-ltr-hide">
';
                $buffer .= $indent . '                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                <path d="M8.75 12L14.25 7.75V16.25L8.75 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                            </svg>
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <h3 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title sectionname course-content-item d-flex align-self-stretch align-items-center mb-0"
';
                $buffer .= $indent . '                id="coursecontentsection';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-for="section_title" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-number="';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </h3>
';
                $buffer .= $indent . '        </div>
';
            }
        }

        return $buffer;
    }

    private function sectionCc8f76a1aa52eaaa891c8afd32e52cf7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h3 class="rui-course-format-card sectionid-{{id}}-title sectionname">
        {{{title}}}
    </h3>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h3 class="rui-course-format-card sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title sectionname">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61ea6b258fdc623d31de52f7acbec40f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2 class="sectionid-{{id}}-title sectionname">
            {{{title}}}
        </h2>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title sectionname">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </h2>
';
                $context->pop();
            }
        }
    
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

    private function sectionE27d58bd82bf887495509fb3582d0729(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsed ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapsed ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
