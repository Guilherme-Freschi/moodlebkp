<?php

class __Mustache_1c4fbd7e60acca5364a7e84b93ce4011 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '<div class="rui-course-card rui-progress-';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $context->find('cccsummary');
        $buffer .= $this->section37ba44babfd4ecd137dba062427f3cdb($context, $indent, $value);
        $buffer .= '" role="listitem" data-region="course-content" data-course-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('hasenrolmenticons');
        $buffer .= $this->sectionFa23c7c28d0ce2e8a24401b2e05fde5d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-course-card-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '            <figure class="rui-course-card-img-top" style="background-image: url(';
        $value = $this->resolveValue($context->find('image'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ');"><span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section770d421ad5e692e1604f4cccb1a279f2($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span></figure>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-course-card-body">
';
        $buffer .= $indent . '            <div class="d-flex flex-wrap">
';
        $buffer .= $indent . '                <span class="sr-only">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionC1f0f38377711c41e832dec5d81a2e6f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '
';
        $value = $context->find('visible');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <div class="d-inline-flex flex-wrap mb-2">
';
            $buffer .= $indent . '                        <span class="rui-course-hidden-badge">
';
            $buffer .= $indent . '                            <svg class="mr-1" width="16" height="16" fill="none" viewBox="0 0 24 24">
';
            $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.6247 10C19.0646 10.8986 19.25 11.6745 19.25 12C19.25 13 17.5 18.25 12 18.25C11.2686 18.25 10.6035 18.1572 10 17.9938M7 16.2686C5.36209 14.6693 4.75 12.5914 4.75 12C4.75 11 6.5 5.75 12 5.75C13.7947 5.75 15.1901 6.30902 16.2558 7.09698"></path>
';
            $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.25 4.75L4.75 19.25"></path>
';
            $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.409 13.591C9.53033 12.7123 9.53033 11.2877 10.409 10.409C11.2877 9.5303 12.7123 9.5303 13.591 10.409"></path>
';
            $buffer .= $indent . '                            </svg>
';
            $buffer .= $indent . '                            ';
            $value = $context->find('str');
            $buffer .= $this->section6e27c6955cb05d4f01c4ab8799872e12($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                        </span>
';
            $buffer .= $indent . '                    </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('displayteachers');
        $buffer .= $this->sectionC28fb7e2fd39a2d3d0878b768ac34e4e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="d-flex mb-1">
';
        $buffer .= $indent . '                <h4 class="rui-course-card-title mb-1">
';
        $buffer .= $indent . '                    <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="aalink coursename">
';
        $buffer .= $indent . '                        <span class="sr-only">
';
        $buffer .= $indent . '                            ';
        $value = $context->find('str');
        $buffer .= $this->section812e363a880e32990e0f434e718baef5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </span>
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </h4>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('category');
        $buffer .= $this->section28145554e2498273ec5f3a650412bb46($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('hasprogress');
        $buffer .= $this->sectionD7941d7b23d1789e4336c92776224f2a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('cccfooter');
        $buffer .= $this->section8fe1e568c9ff333b726622fc609b4da9($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('cccsummary');
        $buffer .= $this->sectionAa2e341dcf3e5636f2e5b5e7580dffed($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section37ba44babfd4ecd137dba062427f3cdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-course-card--sum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-course-card--sum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9668da3dad1cd344967b2e20ec15aff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="rui-icon-container">
                    {{{.}}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="rui-icon-container">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa23c7c28d0ce2e8a24401b2e05fde5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-course-card-icons">
            {{#enrolmenticons}}
                <div class="rui-icon-container">
                    {{{.}}}
                </div>
            {{/enrolmenticons}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-course-card-icons">
';
                $value = $context->find('enrolmenticons');
                $buffer .= $this->section9668da3dad1cd344967b2e20ec15aff2($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section770d421ad5e692e1604f4cccb1a279f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseimage, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria:courseimage, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1f0f38377711c41e832dec5d81a2e6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:coursecategory, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria:coursecategory, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e27c6955cb05d4f01c4ab8799872e12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hiddenfromstudents ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hiddenfromstudents ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90fc990e570e295a25279b94d22d5b28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{config.wwwroot}}/user/profile.php?id={{{id}}}" class="rui-tooltip rui-card-contact rui-user-{{{role}}}" data-title="{{{fullname}}} - {{{role}}}">
                                <img src="{{{userpicture}}}" class="rui-card-avatar" alt="{{{fullname}}}" />
                            </a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/user/profile.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="rui-tooltip rui-card-contact rui-user-';
                $value = $this->resolveValue($context->find('role'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-title="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' - ';
                $value = $this->resolveValue($context->find('role'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('userpicture'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="rui-card-avatar" alt="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" />
';
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1af416200f59e761b2e7a45f061338b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="rui-card-course-contacts">
                        {{#contacts}}
                            <a href="{{config.wwwroot}}/user/profile.php?id={{{id}}}" class="rui-tooltip rui-card-contact rui-user-{{{role}}}" data-title="{{{fullname}}} - {{{role}}}">
                                <img src="{{{userpicture}}}" class="rui-card-avatar" alt="{{{fullname}}}" />
                            </a>
                        {{/contacts}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="rui-card-course-contacts">
';
                $value = $context->find('contacts');
                $buffer .= $this->section90fc990e570e295a25279b94d22d5b28($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC28fb7e2fd39a2d3d0878b768ac34e4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#hascontacts}}
                    <div class="rui-card-course-contacts">
                        {{#contacts}}
                            <a href="{{config.wwwroot}}/user/profile.php?id={{{id}}}" class="rui-tooltip rui-card-contact rui-user-{{{role}}}" data-title="{{{fullname}}} - {{{role}}}">
                                <img src="{{{userpicture}}}" class="rui-card-avatar" alt="{{{fullname}}}" />
                            </a>
                        {{/contacts}}
                    </div>
                {{/hascontacts}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hascontacts');
                $buffer .= $this->sectionE1af416200f59e761b2e7a45f061338b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section812e363a880e32990e0f434e718baef5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:coursename, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria:coursename, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28145554e2498273ec5f3a650412bb46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-inline-flex mt-2">
                    <div class="rui-course-cat-badge">
                        {{{category}}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-inline-flex mt-2">
';
                $buffer .= $indent . '                    <div class="rui-course-cat-badge">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('category'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7941d7b23d1789e4336c92776224f2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-course-card-progress-bar">
            {{> block_myoverview/progress-bar}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-course-card-progress-bar">
';
                if ($partial = $this->mustache->loadPartial('block_myoverview/progress-bar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fe1e568c9ff333b726622fc609b4da9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-course-card-footer">
            <a href="{{config.wwwroot}}/course/view.php?id={{{id}}}" class="rui-course-card-link btn btn-primary">
                <span class="rui-course-card-link-text">{{{stringaccess}}}</span>
                <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H4.75"></path>
                </svg>
            </a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-course-card-footer">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="rui-course-card-link btn btn-primary">
';
                $buffer .= $indent . '                <span class="rui-course-card-link-text">';
                $value = $this->resolveValue($context->find('stringaccess'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
';
                $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H4.75"></path>
';
                $buffer .= $indent . '                </svg>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbec850df83f6b2f99f25d78d2fa33e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:coursesummary, block_myoverview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria:coursesummary, block_myoverview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB09c893d2668f5edf5e843f28ad256f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{coursecarddesclimit}}, {{{summary}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('coursecarddesclimit'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa2e341dcf3e5636f2e5b5e7580dffed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="rui-course-card-text">
        <span class="sr-only">{{#str}}aria:coursesummary, block_myoverview{{/str}}</span>
        {{#shortentext}}{{coursecarddesclimit}}, {{{summary}}}{{/shortentext}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="rui-course-card-text">
';
                $buffer .= $indent . '        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionBbec850df83f6b2f99f25d78d2fa33e9($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        ';
                $value = $context->find('shortentext');
                $buffer .= $this->sectionB09c893d2668f5edf5e843f28ad256f0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
