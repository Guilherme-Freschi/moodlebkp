<?php

class __Mustache_d4bae85522988b85e8cdb92c4bdb99ba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-md-inline-flex w-100">
';
        $buffer .= $indent . '    <ul class="rui-nav--admin nav nav-column flex-md-column" role="tablist">
';
        $buffer .= $indent . '    <!-- First the top most node and immediate children -->
';
        $buffer .= $indent . '        <li class="nav-item">
';
        $buffer .= $indent . '            <a class="nav-link active" href="#link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-toggle="tab" role="tab" aria-selected="true">';
        $value = $this->resolveValue($context->findDot('node.text'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    <!-- Now the first level children with sub nodes -->
';
        $value = $context->findDot('node.children');
        $buffer .= $this->section27b28ca60230fce53fc210a787c972e5($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="col tab-content px-0">
';
        $buffer .= $indent . '        <div class="tab-pane active" id="link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="tabpanel">
';
        $buffer .= $indent . '            <div class="container rui-settings-container ml-md-4 px-sm-2 px-md-0">
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                    <div class="col-sm-12 col-md-3 pt-5">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="col">
';
        $buffer .= $indent . '                        <ul class="list-unstyled rui-list-admin-links">
';
        $value = $context->findDot('node.children');
        $buffer .= $this->section36d38874b141b882b8109709daaa9926($context, $indent, $value);
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $value = $context->findDot('node.children');
        $buffer .= $this->section0296191fe124a752fdde579bca5433b8($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->findDot('node.children');
        $buffer .= $this->section966909cd334f059ed74c819bb353cb6d($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section70183d391b3003b9f1e5cdaa2f5679cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^is_short_branch}}
                    <li class="nav-item">
                        <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                    </li>
                {{/is_short_branch}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('is_short_branch');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <li class="nav-item">
';
                    $buffer .= $indent . '                        <a class="nav-link" href="#link';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                    </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7c3a5910575e61287c28c2b637faa2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#display}}
                {{^is_short_branch}}
                    <li class="nav-item">
                        <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                    </li>
                {{/is_short_branch}}
            {{/display}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->section70183d391b3003b9f1e5cdaa2f5679cc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27b28ca60230fce53fc210a787c972e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#children.count}}
            {{#display}}
                {{^is_short_branch}}
                    <li class="nav-item">
                        <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                    </li>
                {{/is_short_branch}}
            {{/display}}
        {{/children.count}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionB7c3a5910575e61287c28c2b637faa2d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section906410a0ec191fc2f21c801d97817b2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <li><a href="{{{action}}}">{{text}}</a></li>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36d38874b141b882b8109709daaa9926(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{^children.count}}
                                    {{#display}}
                                        <li><a href="{{{action}}}">{{text}}</a></li>
                                    {{/display}}
                                {{/children.count}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $value = $context->find('display');
                    $buffer .= $this->section906410a0ec191fc2f21c801d97817b2e($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27f6791ab2757dfafc4b57b7bfc7d7b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h4><a class="badge badge-light" href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2636ed0abcb943510fd2f38963a0af5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{> core/settings_link_page_single }}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57d412c02e9a819bb57e1bd95f5faa65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col">
                                        <ul class="list-unstyled rui-list-admin-links">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <hr>
';
                $buffer .= $indent . '                                <div class="row">
';
                $buffer .= $indent . '                                    <div class="col-sm-12 col-md-3">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('action');
                $buffer .= $this->section27f6791ab2757dfafc4b57b7bfc7d7b6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4 class="badge badge-light">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="col">
';
                $buffer .= $indent . '                                        <ul class="list-unstyled rui-list-admin-links">
';
                $value = $context->find('children');
                $buffer .= $this->sectionE2636ed0abcb943510fd2f38963a0af5($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85f69b884b6c1f914b77c7b49add73d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#is_short_branch}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col">
                                        <ul class="list-unstyled rui-list-admin-links">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/is_short_branch}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('is_short_branch');
                $buffer .= $this->section57d412c02e9a819bb57e1bd95f5faa65($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe0798ca9dfaefd55bfca1c6cd8e823e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#children.count}}
                            {{#is_short_branch}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col">
                                        <ul class="list-unstyled rui-list-admin-links">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/is_short_branch}}
                        {{/children.count}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->section85f69b884b6c1f914b77c7b49add73d3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0296191fe124a752fdde579bca5433b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#display}}
                        {{#children.count}}
                            {{#is_short_branch}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col">
                                        <ul class="list-unstyled rui-list-admin-links">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/is_short_branch}}
                        {{/children.count}}
                    {{/display}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->sectionBe0798ca9dfaefd55bfca1c6cd8e823e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9bea4e2a2c8e34e8326486ead858734c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{^children.count}}
                                                <li><a href="{{{action}}}">{{text}}</a></li>
                                            {{/children.count}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                <li><a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdb1978ed2df2d5daa0368e707ed63c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#display}}
                                            {{^children.count}}
                                                <li><a href="{{{action}}}">{{text}}</a></li>
                                            {{/children.count}}
                                        {{/display}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->section9bea4e2a2c8e34e8326486ead858734c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD515a2da18fbbccd4f69b486e89c6f10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{> core/settings_link_page_single }}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e0e2f374b282465cfbb883d13351d38(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 mt-1">
                                            {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                            {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                        </div>
                                        <div class="col-sm-12 col-md-9">
                                            <ul class="list-unstyled rui-list-admin-links">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <hr>
';
                $buffer .= $indent . '                                    <div class="row">
';
                $buffer .= $indent . '                                        <div class="col-sm-12 col-md-3 mt-1">
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('action');
                $buffer .= $this->section27f6791ab2757dfafc4b57b7bfc7d7b6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4 class="badge badge-light">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-sm-12 col-md-9">
';
                $buffer .= $indent . '                                            <ul class="list-unstyled rui-list-admin-links">
';
                $value = $context->find('children');
                $buffer .= $this->sectionD515a2da18fbbccd4f69b486e89c6f10($context, $indent, $value);
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98b677c4879f25d235ed30257bc86e16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#children.count}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 mt-1">
                                            {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                            {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                        </div>
                                        <div class="col-sm-12 col-md-9">
                                            <ul class="list-unstyled rui-list-admin-links">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/children.count}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->section3e0e2f374b282465cfbb883d13351d38($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22ff51409d64afa98b54eff9a58e3f4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#display}}
                                {{#children.count}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 mt-1">
                                            {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                            {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                        </div>
                                        <div class="col-sm-12 col-md-9">
                                            <ul class="list-unstyled rui-list-admin-links">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/children.count}}
                            {{/display}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->section98b677c4879f25d235ed30257bc86e16($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bb9c4311f9be4e35cf106174b02f76c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="tab-pane" id="link{{key}}" role="tabpanel">
                    <div class="container rui-settings-container ml-md-4 px-sm-2 px-md-0">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 mt-1">
                                {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <ul class="list-unstyled rui-list-admin-links">
                                    {{#children}}
                                        {{#display}}
                                            {{^children.count}}
                                                <li><a href="{{{action}}}">{{text}}</a></li>
                                            {{/children.count}}
                                        {{/display}}
                                    {{/children}}
                                </ul>
                            </div>
                        </div>
                        {{#children}}
                            {{#display}}
                                {{#children.count}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 mt-1">
                                            {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                            {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                        </div>
                                        <div class="col-sm-12 col-md-9">
                                            <ul class="list-unstyled rui-list-admin-links">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/children.count}}
                            {{/display}}
                        {{/children}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="tab-pane" id="link';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="tabpanel">
';
                $buffer .= $indent . '                    <div class="container rui-settings-container ml-md-4 px-sm-2 px-md-0">
';
                $buffer .= $indent . '                        <div class="row">
';
                $buffer .= $indent . '                            <div class="col-sm-12 col-md-3 mt-1">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('action');
                $buffer .= $this->section27f6791ab2757dfafc4b57b7bfc7d7b6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4 class="badge badge-light">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="col-sm-12 col-md-9">
';
                $buffer .= $indent . '                                <ul class="list-unstyled rui-list-admin-links">
';
                $value = $context->find('children');
                $buffer .= $this->sectionFdb1978ed2df2d5daa0368e707ed63c6($context, $indent, $value);
                $buffer .= $indent . '                                </ul>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $value = $context->find('children');
                $buffer .= $this->section22ff51409d64afa98b54eff9a58e3f4a($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section966909cd334f059ed74c819bb353cb6d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#children.count}}
                <div class="tab-pane" id="link{{key}}" role="tabpanel">
                    <div class="container rui-settings-container ml-md-4 px-sm-2 px-md-0">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 mt-1">
                                {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <ul class="list-unstyled rui-list-admin-links">
                                    {{#children}}
                                        {{#display}}
                                            {{^children.count}}
                                                <li><a href="{{{action}}}">{{text}}</a></li>
                                            {{/children.count}}
                                        {{/display}}
                                    {{/children}}
                                </ul>
                            </div>
                        </div>
                        {{#children}}
                            {{#display}}
                                {{#children.count}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 mt-1">
                                            {{#action}}<h4><a class="badge badge-light" href="{{action}}">{{text}}</a></h4>{{/action}}
                                            {{^action}}<h4 class="badge badge-light">{{text}}</h4>{{/action}}
                                        </div>
                                        <div class="col-sm-12 col-md-9">
                                            <ul class="list-unstyled rui-list-admin-links">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/children.count}}
                            {{/display}}
                        {{/children}}
                    </div>
                </div>
            {{/children.count}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->section1bb9c4311f9be4e35cf106174b02f76c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
