<?php

class __Mustache_28faeaf177a1b55ea284a4808fc2acff extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="';
        $value = $context->find('activityinfo');
        $buffer .= $this->sectionF3b0af86ad4d38e77c47ea944f064ffd($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $context->find('moveicon');
        $buffer .= $this->section2e7d3cdfffee27291ffca5f384d8d23d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="activity-basis d-flex align-items-center">
';
        $buffer .= $indent . '        <div class="d-flex flex-column flex-md-row w-100 align-self-start">
';
        $value = $context->find('hasname');
        if (empty($value)) {
            
            $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/badges');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/badges')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
            }
        }
        $value = $context->find('cmname');
        $buffer .= $this->section6bc9a2e59f5fc48cce4d0c30e4ea8ea4($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('controlmenu');
        $buffer .= $this->section0c3f9e3bbd0277d15dc96302ffe2ba21($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('hasname');
        $buffer .= $this->sectionA6913c60b07e14e2e80261524d0b2320($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-contentafterlink description">
';
        $value = $context->find('altcontent');
        $buffer .= $this->section01802e74a9df09e6720f7c374dd8eba6($context, $indent, $value);
        $value = $context->find('modavailability');
        $buffer .= $this->section59227921106a62badb39181ab68051f4($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('afterlink');
        $buffer .= $this->section533038c410ebfcca794b270cb3169119($context, $indent, $value);
        $value = $context->find('activityinfo');
        $buffer .= $this->sectionEf9cf909ac7e9da8d0abe59d87d5a798($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionA6757e1db9273769542d5d993cc3db2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui--activity-is-automatic';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui--activity-is-automatic';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a965ae966aa160ad4061e21fed1f365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rui--activity-is-manual';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' rui--activity-is-manual';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3b0af86ad4d38e77c47ea944f064ffd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#isautomatic}}rui--activity-is-automatic{{/isautomatic}}{{^isautomatic}}{{#showmanualcompletion}} rui--activity-is-manual{{/showmanualcompletion}}{{/isautomatic}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isautomatic');
                $buffer .= $this->sectionA6757e1db9273769542d5d993cc3db2a($context, $indent, $value);
                $value = $context->find('isautomatic');
                if (empty($value)) {
                    
                    $value = $context->find('showmanualcompletion');
                    $buffer .= $this->section6a965ae966aa160ad4061e21fed1f365($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e7d3cdfffee27291ffca5f384d8d23d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{moveicon}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('moveicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bc9a2e59f5fc48cce4d0c30e4ea8ea4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core_courseformat/local/content/cm/cmname }}
                {{> core_courseformat/local/content/cm/cmname }}
            {{/ core_courseformat/local/content/cm/cmname }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/cmname');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/cmname')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c3f9e3bbd0277d15dc96302ffe2ba21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-actions align-self-start">
                {{$ core_courseformat/local/content/cm/controlmenu }}
                    {{> core_courseformat/local/content/cm/controlmenu }}
                {{/ core_courseformat/local/content/cm/controlmenu }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="activity-actions align-self-start">
';
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/controlmenu');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/controlmenu')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA6913c60b07e14e2e80261524d0b2320(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/cm/badges }}
            {{> core_courseformat/local/content/cm/badges }}
        {{/ core_courseformat/local/content/cm/badges }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/badges');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/badges')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section746de66bee105811578d855ec762f801(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'course-description-item ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'course-description-item ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01802e74a9df09e6720f7c374dd8eba6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-altcontent mt-2 {{#hasname}}course-description-item {{/hasname}}{{^hasname}}contentwithoutlink{{/hasname}} d-flex">
                <div class="flex-fill description-inner">
                    {{{altcontent}}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="activity-altcontent mt-2 ';
                $value = $context->find('hasname');
                $buffer .= $this->section746de66bee105811578d855ec762f801($context, $indent, $value);
                $value = $context->find('hasname');
                if (empty($value)) {
                    
                    $buffer .= 'contentwithoutlink';
                }
                $buffer .= ' d-flex">
';
                $buffer .= $indent . '                <div class="flex-fill description-inner">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('altcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59227921106a62badb39181ab68051f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{$ core_courseformat/local/content/cm/availability }}
                {{> core_courseformat/local/content/cm/availability }}
            {{/ core_courseformat/local/content/cm/availability }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/availability');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/availability')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section533038c410ebfcca794b270cb3169119(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-contentafterlink afterlink mt-2">
            {{{afterlink}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-contentafterlink afterlink mt-2">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('afterlink'), $context);
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

    private function sectionB4d533f216f9622c64afd5d00c909083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completionrequirements, core_course, {{activityname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completionrequirements, core_course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e4e110ac5f7eb55a63701d7d167eec6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{$ core_course/completion_automatic }}
                                        {{> core_course/completion_automatic }}
                                    {{/ core_course/completion_automatic }}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_course/completion_automatic');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/completion_automatic')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf05d90563ff12a2ce4cd8dd0b80ff82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="rui-completion-info mt-1 mb-1 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                                {{#completiondetails}}
                                    {{$ core_course/completion_automatic }}
                                        {{> core_course/completion_automatic }}
                                    {{/ core_course/completion_automatic }}
                                {{/completiondetails}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="rui-completion-info mt-1 mb-1 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionB4d533f216f9622c64afd5d00c909083($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('completiondetails');
                $buffer .= $this->section5e4e110ac5f7eb55a63701d7d167eec6($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA983237529b1f004cd1bf8b79e3fa293(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{$ core_course/completion_manual }}
                                    {{> core_course/completion_manual }}
                                {{/ core_course/completion_manual }}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_course/completion_manual');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/completion_manual')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09bba684bb9497b8e04678ff4e9653dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div data-region="completion-info">
                        {{#isautomatic}}
                            <div class="rui-completion-info mt-1 mb-1 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                                {{#completiondetails}}
                                    {{$ core_course/completion_automatic }}
                                        {{> core_course/completion_automatic }}
                                    {{/ core_course/completion_automatic }}
                                {{/completiondetails}}
                            </div>
                        {{/isautomatic}}
                        {{^isautomatic}}
                            {{#showmanualcompletion}}
                                {{$ core_course/completion_manual }}
                                    {{> core_course/completion_manual }}
                                {{/ core_course/completion_manual }}
                            {{/showmanualcompletion}}
                        {{/isautomatic}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div data-region="completion-info">
';
                $value = $context->find('isautomatic');
                $buffer .= $this->sectionCf05d90563ff12a2ce4cd8dd0b80ff82($context, $indent, $value);
                $value = $context->find('isautomatic');
                if (empty($value)) {
                    
                    $value = $context->find('showmanualcompletion');
                    $buffer .= $this->sectionA983237529b1f004cd1bf8b79e3fa293($context, $indent, $value);
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdb3bba816358ee46b318a5cec8cf5c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#uservisible}}
                    <div data-region="completion-info">
                        {{#isautomatic}}
                            <div class="rui-completion-info mt-1 mb-1 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                                {{#completiondetails}}
                                    {{$ core_course/completion_automatic }}
                                        {{> core_course/completion_automatic }}
                                    {{/ core_course/completion_automatic }}
                                {{/completiondetails}}
                            </div>
                        {{/isautomatic}}
                        {{^isautomatic}}
                            {{#showmanualcompletion}}
                                {{$ core_course/completion_manual }}
                                    {{> core_course/completion_manual }}
                                {{/ core_course/completion_manual }}
                            {{/showmanualcompletion}}
                        {{/isautomatic}}
                    </div>
                {{/uservisible}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('uservisible');
                $buffer .= $this->section09bba684bb9497b8e04678ff4e9653dd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfb6fd07ae9e251f9844989d26fe82a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{$core_course/activity_date}}
                        {{>core_course/activity_date}}
                    {{/core_course/activity_date}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_course/activity_date');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/activity_date')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58a1ccde5e9a2ac3a2f8e7700dc1cc56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-region="activity-dates" class="rui-activity-dates activity-dates course-description-item">
                {{#activitydates}}
                    {{$core_course/activity_date}}
                        {{>core_course/activity_date}}
                    {{/core_course/activity_date}}
                {{/activitydates}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div data-region="activity-dates" class="rui-activity-dates activity-dates course-description-item">
';
                $value = $context->find('activitydates');
                $buffer .= $this->sectionAfb6fd07ae9e251f9844989d26fe82a9($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf9cf909ac7e9da8d0abe59d87d5a798(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-region="activity-information" data-activityname="{{activityname}}" class="activity-information">
            {{#hascompletion}}
                {{#uservisible}}
                    <div data-region="completion-info">
                        {{#isautomatic}}
                            <div class="rui-completion-info mt-1 mb-1 automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                                {{#completiondetails}}
                                    {{$ core_course/completion_automatic }}
                                        {{> core_course/completion_automatic }}
                                    {{/ core_course/completion_automatic }}
                                {{/completiondetails}}
                            </div>
                        {{/isautomatic}}
                        {{^isautomatic}}
                            {{#showmanualcompletion}}
                                {{$ core_course/completion_manual }}
                                    {{> core_course/completion_manual }}
                                {{/ core_course/completion_manual }}
                            {{/showmanualcompletion}}
                        {{/isautomatic}}
                    </div>
                {{/uservisible}}
            {{/hascompletion}}
        </div>

        {{#hasdates}}
        <div data-region="activity-dates" class="rui-activity-dates activity-dates course-description-item">
                {{#activitydates}}
                    {{$core_course/activity_date}}
                        {{>core_course/activity_date}}
                    {{/core_course/activity_date}}
                {{/activitydates}}
        </div>
        {{/hasdates}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div data-region="activity-information" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="activity-information">
';
                $value = $context->find('hascompletion');
                $buffer .= $this->sectionFdb3bba816358ee46b318a5cec8cf5c1($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('hasdates');
                $buffer .= $this->section58a1ccde5e9a2ac3a2f8e7700dc1cc56($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
