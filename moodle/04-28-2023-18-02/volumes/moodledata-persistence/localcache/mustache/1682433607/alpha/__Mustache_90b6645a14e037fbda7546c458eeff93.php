<?php

class __Mustache_90b6645a14e037fbda7546c458eeff93 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="discussion-list-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'data-cmid="';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'data-name="';
        $value = $this->resolveValue($context->findDot('forum.name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'data-group="';
        $value = $this->resolveValue($context->findDot('forum.groupid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'data-grading-component="';
        $value = $this->resolveValue($context->find('gradingcomponent'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'data-grading-component-subtype="';
        $value = $this->resolveValue($context->find('gradingcomponentsubtype'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'data-gradable-itemtype="forum" ';
        $value = $context->find('firstgradeduserid');
        $buffer .= $this->sectionAbf0c04727cbbb14934f18815b95c1ea($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-forum-buttons my-2">
';
        $buffer .= $indent . '
';
        $value = $context->find('notifications');
        $buffer .= $this->section763d2421f245e8d1edf06236757fc38e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('groupchangemenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->findDot('forum.capabilities.grade');
        $buffer .= $this->sectionCca6be9c1197f670afb4f4fcd7cb9107($context, $indent, $value);
        $value = $context->findDot('forum.capabilities.grade');
        if (empty($value)) {
            
            $value = $context->findDot('forum.state.gradingenabled');
            $buffer .= $this->sectionE45127c4e35d97607c7bb6fa4c4d219b($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $value = $context->findDot('forum.capabilities.create');
        $buffer .= $this->section2f7caaa53c45a9c90aca343942a337e0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('state.hasdiscussions');
        $buffer .= $this->section399793421b8abde7ba185a702a87eef1($context, $indent, $value);
        $value = $context->findDot('state.hasdiscussions');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="forumnodiscuss mt-5">
';
            $blockFunction = $context->findInBlock('no_discussions_text');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $buffer .= $indent . '            <span class="badge-sq badge-info">';
                $value = $context->find('str');
                $buffer .= $this->section59c4aea0943e493fb1621a8d24c8bd0f($context, $indent, $value);
                $buffer .= '</span>
';
            }
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section132f812b02ab59348cb5162d371a429e($context, $indent, $value);

        return $buffer;
    }

    private function sectionAbf0c04727cbbb14934f18815b95c1ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-initialuserid="{{firstgradeduserid}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-initialuserid="';
                $value = $this->resolveValue($context->find('firstgradeduserid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section763d2421f245e8d1edf06236757fc38e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core/notification}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section339a7509a4d8b0653fcf6f97056e53c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/grades/grade_button }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/grades/grade_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCca6be9c1197f670afb4f4fcd7cb9107(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#forum.state.gradingenabled}}
                {{> mod_forum/grades/grade_button }}
            {{/forum.state.gradingenabled}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('forum.state.gradingenabled');
                $buffer .= $this->section339a7509a4d8b0653fcf6f97056e53c1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE45127c4e35d97607c7bb6fa4c4d219b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> mod_forum/grades/view_grade_button }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/grades/view_grade_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f7caaa53c45a9c90aca343942a337e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-collapseaddform collapse m-t-1 p-b-1" id="collapseAddForm">
            {{{newdiscussionhtml}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-collapseaddform collapse m-t-1 p-b-1" id="collapseAddForm">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('newdiscussionhtml'), $context);
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

    private function sectionEb7616eb082d38ffbff265dd116717ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showingcountoftotaldiscussions, mod_forum, {"count": "{{visiblediscussioncount}}", "total":"{{totaldiscussioncount}}"} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showingcountoftotaldiscussions, mod_forum, {"count": "';
                $value = $this->resolveValue($context->find('visiblediscussioncount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "total":"';
                $value = $this->resolveValue($context->find('totaldiscussioncount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"} ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1a6182796dd1b976d215abc089edf1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'status';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'status';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd456da3679adb0f932ff4b4abdd2e44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbydiscussionasc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbydiscussionasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1992336f71ab27e96dd60b73814a51c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussion, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussion, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61fd71a6b4af5bef754e61152bc3e899(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'desc, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'desc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b40835e6575f136656670fa9ea6fa33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/downlong, core, {{#str}}desc, core{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/downlong, core, ';
                $value = $context->find('str');
                $buffer .= $this->section61fd71a6b4af5bef754e61152bc3e899($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFebb5c3e5e00989754f6371cdff20963(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortdiscussionasc}}}" aria-label="{{#str}}discussionlistsortbydiscussionasc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortdiscussionasc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionDd456da3679adb0f932ff4b4abdd2e44($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionC1992336f71ab27e96dd60b73814a51c($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf9629036b0703b6b8c3ca28b91e7251(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbydiscussiondesc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbydiscussiondesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA27af5852a97444d420eb51cb1ac1990(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'asc, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'asc, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c3327255392726ae79b991bf76b33a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/uplong, core, {{#str}}asc, core{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/uplong, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionA27af5852a97444d420eb51cb1ac1990($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c84cca434c83fe330a747dad2ab4977(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortdiscussiondesc}}}" aria-label="{{#str}}discussionlistsortbydiscussiondesc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortdiscussiondesc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionEf9629036b0703b6b8c3ca28b91e7251($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionC1992336f71ab27e96dd60b73814a51c($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63943239003118518d871c927fd1a85f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbygroupasc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbygroupasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88e57f90624c87c0f599df6e2b07da9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c67be881b7e77c52bd198c33a9172c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{forum.urls.sortgroupasc}}}" aria-label="{{#str}}discussionlistsortbygroupasc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortgroupasc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section63943239003118518d871c927fd1a85f($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section88e57f90624c87c0f599df6e2b07da9c($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ab27000e2206fdbc2ff398d0988de70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbygroupdesc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbygroupdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07b30ba962ca042037e52c0d4b776f5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortgroupdesc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section1ab27000e2206fdbc2ff398d0988de70($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section88e57f90624c87c0f599df6e2b07da9c($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB72db95a34ce38ea329886d1dc098d6d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="group px-3">
                                {{#state.sortorder.isgroupdesc}}
                                    <a href="{{{forum.urls.sortgroupasc}}}" aria-label="{{#str}}discussionlistsortbygroupasc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isgroupdesc}}
                                {{#state.sortorder.isgroupasc}}
                                    <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isgroupasc}}
                                {{^state.sortorder.isgroupdesc}}
                                    {{^state.sortorder.isgroupasc}}
                                        <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a>
                                    {{/state.sortorder.isgroupasc}}
                                {{/state.sortorder.isgroupdesc}}
                            </th>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <th scope="col" class="group px-3">
';
                $value = $context->findDot('state.sortorder.isgroupdesc');
                $buffer .= $this->section3c67be881b7e77c52bd198c33a9172c9($context, $indent, $value);
                $value = $context->findDot('state.sortorder.isgroupasc');
                $buffer .= $this->section07b30ba962ca042037e52c0d4b776f5c($context, $indent, $value);
                $value = $context->findDot('state.sortorder.isgroupdesc');
                if (empty($value)) {
                    
                    $value = $context->findDot('state.sortorder.isgroupasc');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                        <a href="';
                        $value = $this->resolveValue($context->findDot('forum.urls.sortgroupdesc'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '" aria-label="';
                        $value = $context->find('str');
                        $buffer .= $this->section1ab27000e2206fdbc2ff398d0988de70($context, $indent, $value);
                        $buffer .= '">';
                        $value = $context->find('str');
                        $buffer .= $this->section88e57f90624c87c0f599df6e2b07da9c($context, $indent, $value);
                        $buffer .= '</a>
';
                    }
                }
                $buffer .= $indent . '                            </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc4f12284a7dca05cf579bd1bad9a8ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbystarterasc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbystarterasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b223ddf50719647c9723401fba2694d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startedby, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startedby, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section227321f5c12876cc15fb7a32576286a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortstarterasc}}}" aria-label="{{#str}}discussionlistsortbystarterasc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortstarterasc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionDc4f12284a7dca05cf579bd1bad9a8ce($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section0b223ddf50719647c9723401fba2694d($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC00eea43088295dd7c1188b2e55e141a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbystarterdesc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbystarterdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23be51617b4c136f5d5b1a5f8e821ac6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortstarterdesc}}}" aria-label="{{#str}}discussionlistsortbystarterdesc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortstarterdesc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC00eea43088295dd7c1188b2e55e141a($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section0b223ddf50719647c9723401fba2694d($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7533e01c6ea8dc878fabfc9fc56be8f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbylastpostasc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbylastpostasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc4bf659abc5d7e4d1fa879fd68d56c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lastpost, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lastpost, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75e5502fdfe08530b472d995ed208f0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortlastpostasc}}}" aria-label="{{#str}}discussionlistsortbylastpostasc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostasc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section7533e01c6ea8dc878fabfc9fc56be8f7($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa917cd08c45399601e65090de917ad3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbylastpostdesc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbylastpostdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC33ee1551107eeef57b5193e649d4b03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostdesc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionEa917cd08c45399601e65090de917ad3($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                $buffer .= '</a> <span>';
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4f5cd2412b81cf4971a3c90bc81fb6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbyrepliesasc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbyrepliesasc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD98678024f3969cfad681333304399ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'replies, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'replies, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49e3e0a7411730698c88b90ab94cbee8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a class="forum-icon" href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a><span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a class="forum-icon" href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesasc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionA4f5cd2412b81cf4971a3c90bc81fb6e($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                $buffer .= '</a><span>';
                $value = $context->find('pix');
                $buffer .= $this->section0b40835e6575f136656670fa9ea6fa33($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89bd64d1cf116028e547fc6701c7eaaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionlistsortbyrepliesdesc, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionlistsortbyrepliesdesc, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section026e6df20aaae61a8ef539d27f0aa8b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a class="forum-icon" href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a><span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a class="forum-icon" href="';
                $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesdesc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section89bd64d1cf116028e547fc6701c7eaaa($context, $indent, $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                $buffer .= '</a><span>';
                $value = $context->find('pix');
                $buffer .= $this->section6c3327255392726ae79b991bf76b33a7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbb870dc026f5469d13ab846cde860af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'markallread, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'markallread, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9d125a5afcc3c71288fe20008de1faa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/markasread, core, {{#str}}markallread, mod_forum{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/markasread, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionDbb870dc026f5469d13ab846cde860af($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf9c64de5113c445c2a2d508481a3696(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a class="forum-markasread-icon" href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a class="forum-markasread-icon" href="';
                $value = $this->resolveValue($context->findDot('forum.urls.markasread'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->sectionC9d125a5afcc3c71288fe20008de1faa($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc3c5cc4fd33a3c30478b9aeac8408c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="text-center px-2" style="min-width: 120px">
                                {{#state.sortorder.isrepliesdesc}}
                                    <a class="forum-icon" href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a><span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesdesc}}
                                {{#state.sortorder.isrepliesasc}}
                                    <a class="forum-icon" href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a><span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesasc}}
                                {{^state.sortorder.isrepliesdesc}}
                                    {{^state.sortorder.isrepliesasc}}
                                        <a href="{{{forum.urls.sortrepliesdesc}}}" class="forum-replies-icon" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a>
                                    {{/state.sortorder.isrepliesasc}}
                                {{/state.sortorder.isrepliesdesc}}
                                {{#forum.userstate.tracked}}
                                    <a class="forum-markasread-icon" href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                                {{/forum.userstate.tracked}}
                            </th>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <th scope="col" class="text-center px-2" style="min-width: 120px">
';
                $value = $context->findDot('state.sortorder.isrepliesdesc');
                $buffer .= $this->section49e3e0a7411730698c88b90ab94cbee8($context, $indent, $value);
                $value = $context->findDot('state.sortorder.isrepliesasc');
                $buffer .= $this->section026e6df20aaae61a8ef539d27f0aa8b2($context, $indent, $value);
                $value = $context->findDot('state.sortorder.isrepliesdesc');
                if (empty($value)) {
                    
                    $value = $context->findDot('state.sortorder.isrepliesasc');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                        <a href="';
                        $value = $this->resolveValue($context->findDot('forum.urls.sortrepliesdesc'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '" class="forum-replies-icon" aria-label="';
                        $value = $context->find('str');
                        $buffer .= $this->section89bd64d1cf116028e547fc6701c7eaaa($context, $indent, $value);
                        $buffer .= '">';
                        $value = $context->find('str');
                        $buffer .= $this->sectionD98678024f3969cfad681333304399ae($context, $indent, $value);
                        $buffer .= '</a>
';
                    }
                }
                $value = $context->findDot('forum.userstate.tracked');
                $buffer .= $this->sectionEf9c64de5113c445c2a2d508481a3696($context, $indent, $value);
                $buffer .= $indent . '                            </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4182c318dda7dd3af2a7fadca6612c7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notsubscribed, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notsubscribed, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66a310cc5db67af73999a28823a03ecb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <th scope="col" class="text-center px-2">{{#str}} notsubscribed, mod_forum {{/str}}</th>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <th scope="col" class="text-center px-2">';
                $value = $context->find('str');
                $buffer .= $this->section4182c318dda7dd3af2a7fadca6612c7e($context, $indent, $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ad2fdcc9b858451e82e60edfcdcf48d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'actions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06a429e123576badc8e52295604a303d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pinned';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pinned';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1a9d8cd1e354f9bf974f188e724426f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' favourited';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' favourited';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD311956d9afbf7e7dbf59246fb7bcedc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subscribed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' subscribed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section924a19be55d41b812cbdef471b525004(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hasunread';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hasunread';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cdfa36eda92d4a8cafa090a19cdb853(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^visible}} dimmed_text{{/visible}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    $buffer .= ' dimmed_text';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9852e56b2e2e71abe5d2768426c44af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#istimed}}{{^visible}} dimmed_text{{/visible}}{{/istimed}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istimed');
                $buffer .= $this->section3cdfa36eda92d4a8cafa090a19cdb853($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA80f28843b433fe65ddf4e33b6495a3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'discussionpinned, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'discussionpinned, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cef32bba2ac62afd08d616328ae214c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <span title="{{#str}}discussionpinned, mod_forum{{/str}}">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 7.75L7.75 4.75H16.25L15.25 7.75V10C18.25 11 18.25 14.25 18.25 14.25H5.75C5.75 14.25 5.75 11 8.75 10V7.75Z"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14.5V19.25"></path>
                                        </svg>
                                    </span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <span title="';
                $value = $context->find('str');
                $buffer .= $this->sectionA80f28843b433fe65ddf4e33b6495a3d($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 7.75L7.75 4.75H16.25L15.25 7.75V10C18.25 11 18.25 14.25 18.25 14.25H5.75C5.75 14.25 5.75 11 8.75 10V7.75Z"></path>
';
                $buffer .= $indent . '                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14.5V19.25"></path>
';
                $buffer .= $indent . '                                        </svg>
';
                $buffer .= $indent . '                                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section299f04c84910f862a3d597e5a60a6256(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_favourite_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9c739fd0fabc4eb11ea586804b0ba1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '100, {{{discussion.name}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '100, ';
                $value = $this->resolveValue($context->findDot('discussion.name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10835323137865bd603dd05100549fd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'd-inline-flex';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'd-inline-flex';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section803e155e7b88f0a1bd6fbad5707cfc46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'locked, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'locked, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3173849eac8c3531410d00d6401c4b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'timed, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'timed, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a3208047bf19127da6925ca57b0d13d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> mod_forum/discussion_times}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_times')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25105f750e7ba16d300735e691a45df0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('discussion.times');
                $buffer .= $this->section0a3208047bf19127da6925ca57b0d13d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68598a45d96826ba976c3d71aba3765b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('discussion.timed');
                $buffer .= $this->section25105f750e7ba16d300735e691a45df0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe015981e4b070a516ba7e705a1a3eef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'timeddiscussion, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'timeddiscussion, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section530c0d4cfdcc88567aa2dd88a7eb2357(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <span>
                                            <button class="btn-icon--sm btn-danger ml-3" data-region="timed-label" title="{{#str}}timed, forum{{/str}}" data-toggle="popover" data-container="body" data-placement="right" data-html="true" data-content={{#quote}}{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}{{/quote}} data-trigger="click" aria-label="{{#str}}timeddiscussion, forum{{/str}}" title="{{#str}}timeddiscussion, forum{{/str}}">
                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                                    <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                                </svg>
                                            </button>
                                        </span>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <span>
';
                $buffer .= $indent . '                                            <button class="btn-icon--sm btn-danger ml-3" data-region="timed-label" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionB3173849eac8c3531410d00d6401c4b0($context, $indent, $value);
                $buffer .= '" data-toggle="popover" data-container="body" data-placement="right" data-html="true" data-content=';
                $value = $context->find('quote');
                $buffer .= $this->section68598a45d96826ba976c3d71aba3765b($context, $indent, $value);
                $buffer .= ' data-trigger="click" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionFe015981e4b070a516ba7e705a1a3eef($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionFe015981e4b070a516ba7e705a1a3eef($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                                    <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
';
                $buffer .= $indent . '                                                    <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
';
                $buffer .= $indent . '                                                </svg>
';
                $buffer .= $indent . '                                            </button>
';
                $buffer .= $indent . '                                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE103d4001a9c5c8aed5c9292425b5842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{name}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9676b028b46e3df83a3055c6a32599ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memberofgroup, group, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' memberofgroup, group, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section633360e8785a78973fd7c4412b35ca1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '30, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '30, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88200923730b7748c60c7fce84f9c1c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\' title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->findDot('urls.userlist'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-label=\'';
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\' title=\'';
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\'>
';
                $buffer .= $indent . '                                                ';
                $value = $context->find('shortentext');
                $buffer .= $this->section633360e8785a78973fd7c4412b35ca1f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe7062c7561616ce6292fe3e449c2633(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}" class="border rounded h-auto rounded-circle grouppicture" src="{{{urls.picture}}}" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\' title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <img alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '" class="border rounded h-auto rounded-circle grouppicture" src="';
                $value = $this->resolveValue($context->findDot('urls.picture'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->findDot('urls.userlist');
                $buffer .= $this->section88200923730b7748c60c7fce84f9c1c3($context, $indent, $value);
                $value = $context->findDot('urls.userlist');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <span>';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c1cfdc75be2c054d7d120902fb86509(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td class="group align-middle fit-content limit-width px-3">
                                    {{#discussion.group}}
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}" class="border rounded h-auto rounded-circle grouppicture" src="{{{urls.picture}}}" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\' title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
                                    {{/discussion.group}}
                                </td>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <td class="group align-middle fit-content limit-width px-3">
';
                $value = $context->findDot('discussion.group');
                $buffer .= $this->sectionEe7062c7561616ce6292fe3e449c2633($context, $indent, $value);
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section702351094cafd0f597cee4369a69f5c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pictureof, moodle, {{fullname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pictureof, moodle, ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a6e53f90c6dd41d1acb0c171f9b04ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strftimedatemonthabbr, langconfig';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'strftimedatemonthabbr, langconfig';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c3dc8c52a430485c9197a1531987661(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded userpicture mr-2" src="{{urls.profileimage}}" alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}">
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="text-truncate">{{fullname}}</div>
                                            <div class="author-info-details">
                                                {{< core/time_element }}
                                                {{$elementid}}created-{{discussion.id}}{{/elementid}}
                                                {{$timestampval}}{{discussion.times.created}}{{/timestampval}}
                                                {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                {{/core/time_element}}
                                            </div>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="d-flex">
';
                $buffer .= $indent . '                                        <div class="align-middle p-0">
';
                $buffer .= $indent . '                                            <img class="rounded userpicture mr-2" src="';
                $value = $this->resolveValue($context->findDot('urls.profileimage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="author-info align-middle">
';
                $buffer .= $indent . '                                            <div class="text-truncate">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            <div class="author-info-details">
';
                $buffer .= $indent . '                                                ';
                if ($parent = $this->mustache->loadPartial('core/time_element')) {
                    $context->pushBlockContext(array(
                        'elementid' => array($this, 'block15df760132d95f76dffbdbae0ee33e4d'),
                        'timestampval' => array($this, 'blockB7bde8bf2db4dc361c0b908f53f3fc79'),
                        'userdateformatval' => array($this, 'block53f83b00ab9ad434690df04be3c450b0'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= '                                            </div>
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

    private function section39978570f671e2d5d699604316408597(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strftimerecentfull';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'strftimerecentfull';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA897183e8e2e03813e14c91eac7cca04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('discussion.times.modified'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',';
                $value = $context->find('str');
                $buffer .= $this->section39978570f671e2d5d699604316408597($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75115e07737c10735b87a9905103396a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                        {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                        {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                        {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
                                                    </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.viewlatest'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('userdate');
                $buffer .= $this->sectionA897183e8e2e03813e14c91eac7cca04($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                        ';
                if ($parent = $this->mustache->loadPartial('core/time_element')) {
                    $context->pushBlockContext(array(
                        'elementid' => array($this, 'block7c410968757b6c8d01f11505254aceed'),
                        'timestampval' => array($this, 'block09d402946013895bbd33900cb9f5cbf4'),
                        'userdateformatval' => array($this, 'block53f83b00ab9ad434690df04be3c450b0'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3539a14230bd04f5683b4f3d487855d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded userpicture mr-2" src="{{urls.profileimage}}" alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}">
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="text-truncate">{{fullname}}</div>
                                            <div class="author-info-details">
                                                {{#latestpostid}}
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                        {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                        {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                        {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
                                                    </a>
                                                {{/latestpostid}}
                                            </div>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="d-flex">
';
                $buffer .= $indent . '                                        <div class="align-middle p-0">
';
                $buffer .= $indent . '                                            <img class="rounded userpicture mr-2" src="';
                $value = $this->resolveValue($context->findDot('urls.profileimage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section702351094cafd0f597cee4369a69f5c3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="author-info align-middle">
';
                $buffer .= $indent . '                                            <div class="text-truncate">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                                            <div class="author-info-details">
';
                $value = $context->find('latestpostid');
                $buffer .= $this->section75115e07737c10735b87a9905103396a($context, $indent, $value);
                $buffer .= $indent . '                                            </div>
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

    private function section58ece152187df55c4d1c0bd2582888e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unreadpostsnumber, mod_forum, {{unread}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unreadpostsnumber, mod_forum, ';
                $value = $this->resolveValue($context->find('unread'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9988878b52d7ef2b7a9c0230263d5d5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge-unread badge badge-link badge-success rounded-pill badge badge-link badge-primary rounded-pill" title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <span class="lead">
';
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.viewfirstunread'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="badge-unread badge badge-link badge-success rounded-pill badge badge-link badge-primary rounded-pill" title="';
                $value = $context->find('str');
                $buffer .= $this->section58ece152187df55c4d1c0bd2582888e1($context, $indent, $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section58ece152187df55c4d1c0bd2582888e1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                    ';
                $value = $this->resolveValue($context->find('unread'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $buffer .= $indent . '                                            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD262ac3ec52b7aafc0c271147a0a6c54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge-unread badge badge-link badge-success rounded-pill badge badge-link badge-primary rounded-pill" title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('unread');
                $buffer .= $this->section9988878b52d7ef2b7a9c0230263d5d5d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd264eefc3ada76834fa233ebbeb693e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td class="p-0 text-center align-middle fit-content px-2">
                                    <span class="badge badge-light">{{replies}}</span>
                                    {{#forum.userstate.tracked}}
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge-unread badge badge-link badge-success rounded-pill badge badge-link badge-primary rounded-pill" title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
                                    {{/forum.userstate.tracked}}
                                </td>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <td class="p-0 text-center align-middle fit-content px-2">
';
                $buffer .= $indent . '                                    <span class="badge badge-light">';
                $value = $this->resolveValue($context->find('replies'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $value = $context->findDot('forum.userstate.tracked');
                $buffer .= $this->sectionD262ac3ec52b7aafc0c271147a0a6c54($context, $indent, $value);
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2244061dd4a6b524e19d9b34d4d5dbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-targetstate="0" checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-targetstate="0" checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5119cb26f7f172d9f89db24f175e8824(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <label class="custom-control ios-switch form-check-inline m-0">
                                            <input type="checkbox" class="ios-switch-control-input form-check-input" id="subscription-toggle-{{id}}" data-type="subscription-toggle" data-action="toggle" data-discussionid="{{id}}" data-forumid="{{forumid}}" {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}} {{^userstate.subscribed}}data-targetstate="1" {{/userstate.subscribed}}>
                                            <span class="ios-switch-control-indicator"></span>
                                        </label>
                                        </span>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <label class="custom-control ios-switch form-check-inline m-0">
';
                $buffer .= $indent . '                                            <input type="checkbox" class="ios-switch-control-input form-check-input" id="subscription-toggle-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-type="subscription-toggle" data-action="toggle" data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->findDot('userstate.subscribed');
                $buffer .= $this->sectionC2244061dd4a6b524e19d9b34d4d5dbe($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->findDot('userstate.subscribed');
                if (empty($value)) {
                    
                    $buffer .= 'data-targetstate="1" ';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                                            <span class="ios-switch-control-indicator"></span>
';
                $buffer .= $indent . '                                        </label>
';
                $buffer .= $indent . '                                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71ce13e6c575d2974aadf4b046894a2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <td class="text-center align-middle fit-content px-2">
                                    {{#discussion}}
                                        <label class="custom-control ios-switch form-check-inline m-0">
                                            <input type="checkbox" class="ios-switch-control-input form-check-input" id="subscription-toggle-{{id}}" data-type="subscription-toggle" data-action="toggle" data-discussionid="{{id}}" data-forumid="{{forumid}}" {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}} {{^userstate.subscribed}}data-targetstate="1" {{/userstate.subscribed}}>
                                            <span class="ios-switch-control-indicator"></span>
                                        </label>
                                        </span>
                                    {{/discussion}}
                                </td>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <td class="text-center align-middle fit-content px-2">
';
                $value = $context->find('discussion');
                $buffer .= $this->section5119cb26f7f172d9f89db24f175e8824($context, $indent, $value);
                $buffer .= $indent . '                                </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8566169e90353a59ef521a462794ebba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
                                            </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div data-container=\'discussion-tools\'>
';
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a476e802742931bf589bd1a19716fa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin pr-2">
                                        {{#hasanyactions}}
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
                                            </div>
                                        {{/hasanyactions}}
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin pr-2">
';
                $value = $context->find('hasanyactions');
                $buffer .= $this->section8566169e90353a59ef521a462794ebba($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section264769895cdf842ed6a3d4b510f6eabe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{! The discussion class is only required for behat tests to identify the row. }}
                        <tr class="discussion{{!
                                }}{{#discussion.pinned}} pinned{{/discussion.pinned}}{{!
                                }}{{#discussion.userstate.favourited}} favourited{{/discussion.userstate.favourited}}{{!
                                }}{{#discussion.userstate.subscribed}} subscribed{{/discussion.userstate.subscribed}}{{!
                                }}{{#unread}} hasunread{{/unread}}{{!
                                }}{{#discussion.timed}}{{#istimed}}{{^visible}} dimmed_text{{/visible}}{{/istimed}}{{/discussion.timed}}" data-region="discussion-list-item" data-discussionid="{{id}}" data-forumid="{{forumid}}">
                            <td class="forum-icon-col text-center align-middle" style="width: 1px;">
                                {{#discussion.pinned}}
                                    <span title="{{#str}}discussionpinned, mod_forum{{/str}}">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 7.75L7.75 4.75H16.25L15.25 7.75V10C18.25 11 18.25 14.25 18.25 14.25H5.75C5.75 14.25 5.75 11 8.75 10V7.75Z"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14.5V19.25"></path>
                                        </svg>
                                    </span>
                                {{/discussion.pinned}}
                                {{^discussion.pinned}}
                                    {{#discussion}}
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
                                    {{/discussion}}
                                {{/discussion.pinned}}
                            </td>
                            <th scope="row" class="topic p-0 align-middle">
                                <div class="p-l-0 d-inline-flex align-items-center">
                                    <a class="rui-discussion-link" href="{{discussion.urls.view}}" title="{{discussion.name}}" aria-label="{{discussion.name}}">
                                        {{#shortentext}}100, {{{discussion.name}}}{{/shortentext}}
                                    </a>

                                    <span class="badge-sq badge-xs badge-danger mx-2 {{^discussion.locked}}hidden{{/discussion.locked}} {{#discussion.locked}}d-inline-flex{{/discussion.locked}}" data-region="locked-label">
                                        <span class="badge-icon">
                                            <svg width="13" height="13" stroke-width="2.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
                                                <path d="M16 12h1.4a.6.6 0 01.6.6v6.8a.6.6 0 01-.6.6H6.6a.6.6 0 01-.6-.6v-6.8a.6.6 0 01.6-.6H8m8 0V8c0-1.333-.8-4-4-4S8 6.667 8 8v4m8 0H8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span class="badge-name">{{#str}}locked, forum{{/str}}</span>
                                    </span>
                                    {{#discussion.timed.istimed}}
                                        <span>
                                            <button class="btn-icon--sm btn-danger ml-3" data-region="timed-label" title="{{#str}}timed, forum{{/str}}" data-toggle="popover" data-container="body" data-placement="right" data-html="true" data-content={{#quote}}{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}{{/quote}} data-trigger="click" aria-label="{{#str}}timeddiscussion, forum{{/str}}" title="{{#str}}timeddiscussion, forum{{/str}}">
                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                                    <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                                </svg>
                                            </button>
                                        </span>
                                    {{/discussion.timed.istimed}}
                                </div>

                            </th>
                            {{#forum.state.groupmode}}
                                <td class="group align-middle fit-content limit-width px-3">
                                    {{#discussion.group}}
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}" class="border rounded h-auto rounded-circle grouppicture" src="{{{urls.picture}}}" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\' title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
                                    {{/discussion.group}}
                                </td>
                            {{/forum.state.groupmode}}
                            <td class="author align-middle fit-content limit-width px-3">
                                {{#firstpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded userpicture mr-2" src="{{urls.profileimage}}" alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}">
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="text-truncate">{{fullname}}</div>
                                            <div class="author-info-details">
                                                {{< core/time_element }}
                                                {{$elementid}}created-{{discussion.id}}{{/elementid}}
                                                {{$timestampval}}{{discussion.times.created}}{{/timestampval}}
                                                {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                {{/core/time_element}}
                                            </div>
                                        </div>
                                    </div>
                                {{/firstpostauthor}}
                            </td>
                            <td class="text-left align-middle fit-content limit-width px-3">
                                {{! TODO Check q&a, eachuser }}
                                {{#latestpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded userpicture mr-2" src="{{urls.profileimage}}" alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}">
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="text-truncate">{{fullname}}</div>
                                            <div class="author-info-details">
                                                {{#latestpostid}}
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                        {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                        {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                        {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
                                                    </a>
                                                {{/latestpostid}}
                                            </div>
                                        </div>
                                    </div>
                                {{/latestpostauthor}}
                            </td>
                            {{#forum.capabilities.viewdiscussions}}
                                <td class="p-0 text-center align-middle fit-content px-2">
                                    <span class="badge badge-light">{{replies}}</span>
                                    {{#forum.userstate.tracked}}
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge-unread badge badge-link badge-success rounded-pill badge badge-link badge-primary rounded-pill" title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
                                    {{/forum.userstate.tracked}}
                                </td>
                            {{/forum.capabilities.viewdiscussions}}
                            {{#forum.capabilities.subscribe}}
                                <td class="text-center align-middle fit-content px-2">
                                    {{#discussion}}
                                        <label class="custom-control ios-switch form-check-inline m-0">
                                            <input type="checkbox" class="ios-switch-control-input form-check-input" id="subscription-toggle-{{id}}" data-type="subscription-toggle" data-action="toggle" data-discussionid="{{id}}" data-forumid="{{forumid}}" {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}} {{^userstate.subscribed}}data-targetstate="1" {{/userstate.subscribed}}>
                                            <span class="ios-switch-control-indicator"></span>
                                        </label>
                                        </span>
                                    {{/discussion}}
                                </td>
                            {{/forum.capabilities.subscribe}}
                            <td class="p-0 align-middle fit-content" data-container="discussion-summary-actions">
                                {{#discussion}}
                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin pr-2">
                                        {{#hasanyactions}}
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
                                            </div>
                                        {{/hasanyactions}}
                                    </div>
                                {{/discussion}}
                            </td>
                        </tr>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <tr class="discussion';
                $value = $context->findDot('discussion.pinned');
                $buffer .= $this->section06a429e123576badc8e52295604a303d($context, $indent, $value);
                $value = $context->findDot('discussion.userstate.favourited');
                $buffer .= $this->sectionB1a9d8cd1e354f9bf974f188e724426f($context, $indent, $value);
                $value = $context->findDot('discussion.userstate.subscribed');
                $buffer .= $this->sectionD311956d9afbf7e7dbf59246fb7bcedc($context, $indent, $value);
                $value = $context->find('unread');
                $buffer .= $this->section924a19be55d41b812cbdef471b525004($context, $indent, $value);
                $value = $context->findDot('discussion.timed');
                $buffer .= $this->sectionB9852e56b2e2e71abe5d2768426c44af($context, $indent, $value);
                $buffer .= '" data-region="discussion-list-item" data-discussionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-forumid="';
                $value = $this->resolveValue($context->find('forumid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            <td class="forum-icon-col text-center align-middle" style="width: 1px;">
';
                $value = $context->findDot('discussion.pinned');
                $buffer .= $this->section1cef32bba2ac62afd08d616328ae214c($context, $indent, $value);
                $value = $context->findDot('discussion.pinned');
                if (empty($value)) {
                    
                    $value = $context->find('discussion');
                    $buffer .= $this->section299f04c84910f862a3d597e5a60a6256($context, $indent, $value);
                }
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <th scope="row" class="topic p-0 align-middle">
';
                $buffer .= $indent . '                                <div class="p-l-0 d-inline-flex align-items-center">
';
                $buffer .= $indent . '                                    <a class="rui-discussion-link" href="';
                $value = $this->resolveValue($context->findDot('discussion.urls.view'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->findDot('discussion.name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $this->resolveValue($context->findDot('discussion.name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('shortentext');
                $buffer .= $this->sectionA9c739fd0fabc4eb11ea586804b0ba1f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <span class="badge-sq badge-xs badge-danger mx-2 ';
                $value = $context->findDot('discussion.locked');
                if (empty($value)) {
                    
                    $buffer .= 'hidden';
                }
                $buffer .= ' ';
                $value = $context->findDot('discussion.locked');
                $buffer .= $this->section10835323137865bd603dd05100549fd9($context, $indent, $value);
                $buffer .= '" data-region="locked-label">
';
                $buffer .= $indent . '                                        <span class="badge-icon">
';
                $buffer .= $indent . '                                            <svg width="13" height="13" stroke-width="2.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
';
                $buffer .= $indent . '                                                <path d="M16 12h1.4a.6.6 0 01.6.6v6.8a.6.6 0 01-.6.6H6.6a.6.6 0 01-.6-.6v-6.8a.6.6 0 01.6-.6H8m8 0V8c0-1.333-.8-4-4-4S8 6.667 8 8v4m8 0H8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                            </svg>
';
                $buffer .= $indent . '                                        </span>
';
                $buffer .= $indent . '                                        <span class="badge-name">';
                $value = $context->find('str');
                $buffer .= $this->section803e155e7b88f0a1bd6fbad5707cfc46($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                    </span>
';
                $value = $context->findDot('discussion.timed.istimed');
                $buffer .= $this->section530c0d4cfdcc88567aa2dd88a7eb2357($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            </th>
';
                $value = $context->findDot('forum.state.groupmode');
                $buffer .= $this->section6c1cfdc75be2c054d7d120902fb86509($context, $indent, $value);
                $buffer .= $indent . '                            <td class="author align-middle fit-content limit-width px-3">
';
                $value = $context->find('firstpostauthor');
                $buffer .= $this->section2c3dc8c52a430485c9197a1531987661($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                            <td class="text-left align-middle fit-content limit-width px-3">
';
                $value = $context->find('latestpostauthor');
                $buffer .= $this->section3539a14230bd04f5683b4f3d487855d5($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $value = $context->findDot('forum.capabilities.viewdiscussions');
                $buffer .= $this->sectionAd264eefc3ada76834fa233ebbeb693e($context, $indent, $value);
                $value = $context->findDot('forum.capabilities.subscribe');
                $buffer .= $this->section71ce13e6c575d2974aadf4b046894a2a($context, $indent, $value);
                $buffer .= $indent . '                            <td class="p-0 align-middle fit-content" data-container="discussion-summary-actions">
';
                $value = $context->find('discussion');
                $buffer .= $this->section9a476e802742931bf589bd1a19716fa4($context, $indent, $value);
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1c9709a2e02997a7f8767356e8634bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="forumaddnew">
                <a href="{{create_discussion_link}}" class="btn btn-primary">{{create_discussion_link_text}}</a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="forumaddnew">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('create_discussion_link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary">';
                $value = $this->resolveValue($context->find('create_discussion_link_text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section399793421b8abde7ba185a702a87eef1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$discussion_top_pagination}}
        {{{ pagination }}}
        {{/discussion_top_pagination}}
        {{$discussion_list_output}}
        <div class="table-overflow mt-3">
            <table class="table discussion-list generaltable">
                <caption id="discussion-table-description-{{uniqid}}" class="sr-only">
                    {{#str}} showingcountoftotaldiscussions, mod_forum, {"count": "{{visiblediscussioncount}}", "total":"{{totaldiscussioncount}}"} {{/str}}
                </caption>
                {{$discussion_list_header}}
                <thead>
                    <tr>
                        <th scope="col">
                            <span class="accesshide">{{#str}}status{{/str}}</span>
                        </th>
                        <th scope="col" class="p-l-0">
                            {{#state.sortorder.isdiscussiondesc}}
                                <a href="{{{forum.urls.sortdiscussionasc}}}" aria-label="{{#str}}discussionlistsortbydiscussionasc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isdiscussiondesc}}
                            {{#state.sortorder.isdiscussionasc}}
                                <a href="{{{forum.urls.sortdiscussiondesc}}}" aria-label="{{#str}}discussionlistsortbydiscussiondesc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isdiscussionasc}}
                            {{^state.sortorder.isdiscussiondesc}}
                                {{^state.sortorder.isdiscussionasc}}
                                    <a href="{{{forum.urls.sortdiscussiondesc}}}" aria-label="{{#str}}discussionlistsortbydiscussiondesc, mod_forum{{/str}}">{{#str}}discussion, mod_forum{{/str}}</a>
                                {{/state.sortorder.isdiscussionasc}}
                            {{/state.sortorder.isdiscussiondesc}}
                        </th>
                        {{#forum.state.groupmode}}
                            <th scope="col" class="group px-3">
                                {{#state.sortorder.isgroupdesc}}
                                    <a href="{{{forum.urls.sortgroupasc}}}" aria-label="{{#str}}discussionlistsortbygroupasc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isgroupdesc}}
                                {{#state.sortorder.isgroupasc}}
                                    <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isgroupasc}}
                                {{^state.sortorder.isgroupdesc}}
                                    {{^state.sortorder.isgroupasc}}
                                        <a href="{{{forum.urls.sortgroupdesc}}}" aria-label="{{#str}}discussionlistsortbygroupdesc, mod_forum{{/str}}">{{#str}}group{{/str}}</a>
                                    {{/state.sortorder.isgroupasc}}
                                {{/state.sortorder.isgroupdesc}}
                            </th>
                        {{/forum.state.groupmode}}
                        <th scope="col" class="author px-3">
                            {{#state.sortorder.isstarterdesc}}
                                <a href="{{{forum.urls.sortstarterasc}}}" aria-label="{{#str}}discussionlistsortbystarterasc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isstarterdesc}}
                            {{#state.sortorder.isstarterasc}}
                                <a href="{{{forum.urls.sortstarterdesc}}}" aria-label="{{#str}}discussionlistsortbystarterdesc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.isstarterasc}}
                            {{^state.sortorder.isstarterdesc}}
                                {{^state.sortorder.isstarterasc}}
                                    <a href="{{{forum.urls.sortstarterdesc}}}" aria-label="{{#str}}discussionlistsortbystarterdesc, mod_forum{{/str}}">{{#str}}startedby, mod_forum{{/str}}</a>
                                {{/state.sortorder.isstarterasc}}
                            {{/state.sortorder.isstarterdesc}}
                        </th>
                        <th scope="col" class="lastpost px-3">
                            {{#state.sortorder.islastpostdesc}}
                                <a href="{{{forum.urls.sortlastpostasc}}}" aria-label="{{#str}}discussionlistsortbylastpostasc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.islastpostdesc}}
                            {{#state.sortorder.islastpostasc}}
                                <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a> <span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                            {{/state.sortorder.islastpostasc}}
                            {{^state.sortorder.islastpostdesc}}
                                {{^state.sortorder.islastpostasc}}
                                    <a href="{{{forum.urls.sortlastpostdesc}}}" aria-label="{{#str}}discussionlistsortbylastpostdesc, mod_forum{{/str}}">{{#str}}lastpost, mod_forum{{/str}}</a>
                                {{/state.sortorder.islastpostasc}}
                            {{/state.sortorder.islastpostdesc}}
                        </th>
                        {{#forum.capabilities.viewdiscussions}}
                            <th scope="col" class="text-center px-2" style="min-width: 120px">
                                {{#state.sortorder.isrepliesdesc}}
                                    <a class="forum-icon" href="{{{forum.urls.sortrepliesasc}}}" aria-label="{{#str}}discussionlistsortbyrepliesasc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a><span>{{#pix}}t/downlong, core, {{#str}}desc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesdesc}}
                                {{#state.sortorder.isrepliesasc}}
                                    <a class="forum-icon" href="{{{forum.urls.sortrepliesdesc}}}" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a><span>{{#pix}}t/uplong, core, {{#str}}asc, core{{/str}}{{/pix}}</span>
                                {{/state.sortorder.isrepliesasc}}
                                {{^state.sortorder.isrepliesdesc}}
                                    {{^state.sortorder.isrepliesasc}}
                                        <a href="{{{forum.urls.sortrepliesdesc}}}" class="forum-replies-icon" aria-label="{{#str}}discussionlistsortbyrepliesdesc, mod_forum{{/str}}">{{#str}}replies, mod_forum{{/str}}</a>
                                    {{/state.sortorder.isrepliesasc}}
                                {{/state.sortorder.isrepliesdesc}}
                                {{#forum.userstate.tracked}}
                                    <a class="forum-markasread-icon" href="{{{forum.urls.markasread}}}">{{#pix}}t/markasread, core, {{#str}}markallread, mod_forum{{/str}}{{/pix}}</a>
                                {{/forum.userstate.tracked}}
                            </th>
                        {{/forum.capabilities.viewdiscussions}}
                        {{#forum.capabilities.subscribe}}
                            <th scope="col" class="text-center px-2">{{#str}} notsubscribed, mod_forum {{/str}}</th>
                        {{/forum.capabilities.subscribe}}
                        <th scope="col" class="discussionsubscription px-5">
                            <span class="accesshide">{{#str}}actions{{/str}}</span>
                        </th>
                    </tr>
                </thead>
                {{/discussion_list_header}}
                {{$discussion_list_body}}
                <tbody>
                    {{#summaries}}
                        {{! The discussion class is only required for behat tests to identify the row. }}
                        <tr class="discussion{{!
                                }}{{#discussion.pinned}} pinned{{/discussion.pinned}}{{!
                                }}{{#discussion.userstate.favourited}} favourited{{/discussion.userstate.favourited}}{{!
                                }}{{#discussion.userstate.subscribed}} subscribed{{/discussion.userstate.subscribed}}{{!
                                }}{{#unread}} hasunread{{/unread}}{{!
                                }}{{#discussion.timed}}{{#istimed}}{{^visible}} dimmed_text{{/visible}}{{/istimed}}{{/discussion.timed}}" data-region="discussion-list-item" data-discussionid="{{id}}" data-forumid="{{forumid}}">
                            <td class="forum-icon-col text-center align-middle" style="width: 1px;">
                                {{#discussion.pinned}}
                                    <span title="{{#str}}discussionpinned, mod_forum{{/str}}">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 7.75L7.75 4.75H16.25L15.25 7.75V10C18.25 11 18.25 14.25 18.25 14.25H5.75C5.75 14.25 5.75 11 8.75 10V7.75Z"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14.5V19.25"></path>
                                        </svg>
                                    </span>
                                {{/discussion.pinned}}
                                {{^discussion.pinned}}
                                    {{#discussion}}
                                        {{> mod_forum/forum_discussion_favourite_toggle}}
                                    {{/discussion}}
                                {{/discussion.pinned}}
                            </td>
                            <th scope="row" class="topic p-0 align-middle">
                                <div class="p-l-0 d-inline-flex align-items-center">
                                    <a class="rui-discussion-link" href="{{discussion.urls.view}}" title="{{discussion.name}}" aria-label="{{discussion.name}}">
                                        {{#shortentext}}100, {{{discussion.name}}}{{/shortentext}}
                                    </a>

                                    <span class="badge-sq badge-xs badge-danger mx-2 {{^discussion.locked}}hidden{{/discussion.locked}} {{#discussion.locked}}d-inline-flex{{/discussion.locked}}" data-region="locked-label">
                                        <span class="badge-icon">
                                            <svg width="13" height="13" stroke-width="2.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
                                                <path d="M16 12h1.4a.6.6 0 01.6.6v6.8a.6.6 0 01-.6.6H6.6a.6.6 0 01-.6-.6v-6.8a.6.6 0 01.6-.6H8m8 0V8c0-1.333-.8-4-4-4S8 6.667 8 8v4m8 0H8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        <span class="badge-name">{{#str}}locked, forum{{/str}}</span>
                                    </span>
                                    {{#discussion.timed.istimed}}
                                        <span>
                                            <button class="btn-icon--sm btn-danger ml-3" data-region="timed-label" title="{{#str}}timed, forum{{/str}}" data-toggle="popover" data-container="body" data-placement="right" data-html="true" data-content={{#quote}}{{#discussion.timed}}{{#discussion.times}}{{> mod_forum/discussion_times}}{{/discussion.times}}{{/discussion.timed}}{{/quote}} data-trigger="click" aria-label="{{#str}}timeddiscussion, forum{{/str}}" title="{{#str}}timeddiscussion, forum{{/str}}">
                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                                    <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                                </svg>
                                            </button>
                                        </span>
                                    {{/discussion.timed.istimed}}
                                </div>

                            </th>
                            {{#forum.state.groupmode}}
                                <td class="group align-middle fit-content limit-width px-3">
                                    {{#discussion.group}}
                                        <img alt="{{#str}} pictureof, core, {{name}} {{/str}}" class="border rounded h-auto rounded-circle grouppicture" src="{{{urls.picture}}}" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                                        {{#urls.userlist}}
                                            <a href="{{{urls.userlist}}}" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\' title=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                                                {{#shortentext}}30, {{name}}{{/shortentext}}
                                            </a>
                                        {{/urls.userlist}}
                                        {{^urls.userlist}}
                                            <span>{{name}}</span>
                                        {{/urls.userlist}}
                                    {{/discussion.group}}
                                </td>
                            {{/forum.state.groupmode}}
                            <td class="author align-middle fit-content limit-width px-3">
                                {{#firstpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded userpicture mr-2" src="{{urls.profileimage}}" alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}">
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="text-truncate">{{fullname}}</div>
                                            <div class="author-info-details">
                                                {{< core/time_element }}
                                                {{$elementid}}created-{{discussion.id}}{{/elementid}}
                                                {{$timestampval}}{{discussion.times.created}}{{/timestampval}}
                                                {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                {{/core/time_element}}
                                            </div>
                                        </div>
                                    </div>
                                {{/firstpostauthor}}
                            </td>
                            <td class="text-left align-middle fit-content limit-width px-3">
                                {{! TODO Check q&a, eachuser }}
                                {{#latestpostauthor}}
                                    <div class="d-flex">
                                        <div class="align-middle p-0">
                                            <img class="rounded userpicture mr-2" src="{{urls.profileimage}}" alt="{{#str}}pictureof, moodle, {{fullname}}{{/str}}" title="{{#str}}pictureof, moodle, {{fullname}}{{/str}}">
                                        </div>
                                        <div class="author-info align-middle">
                                            <div class="text-truncate">{{fullname}}</div>
                                            <div class="author-info-details">
                                                {{#latestpostid}}
                                                    <a href="{{{discussion.urls.viewlatest}}}" title="{{#userdate}}{{discussion.times.modified}},{{#str}}strftimerecentfull{{/str}}{{/userdate}}">
                                                        {{< core/time_element }}
                                                        {{$elementid}}modified-{{discussion.id}}{{/elementid}}
                                                        {{$timestampval}}{{discussion.times.modified}}{{/timestampval}}
                                                        {{$userdateformatval}}{{#str}}strftimedatemonthabbr, langconfig{{/str}}{{/userdateformatval}}
                                                        {{/ core/time_element }}
                                                    </a>
                                                {{/latestpostid}}
                                            </div>
                                        </div>
                                    </div>
                                {{/latestpostauthor}}
                            </td>
                            {{#forum.capabilities.viewdiscussions}}
                                <td class="p-0 text-center align-middle fit-content px-2">
                                    <span class="badge badge-light">{{replies}}</span>
                                    {{#forum.userstate.tracked}}
                                        {{#unread}}
                                            {{! TODO Rewrite as AJAX}}
                                            <span class="lead">
                                                <a href="{{{discussion.urls.viewfirstunread}}}" class="badge-unread badge badge-link badge-success rounded-pill badge badge-link badge-primary rounded-pill" title="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}" aria-label="{{#str}}unreadpostsnumber, mod_forum, {{unread}}{{/str}}">
                                                    {{unread}}
                                                </a>
                                            </span>
                                        {{/unread}}
                                    {{/forum.userstate.tracked}}
                                </td>
                            {{/forum.capabilities.viewdiscussions}}
                            {{#forum.capabilities.subscribe}}
                                <td class="text-center align-middle fit-content px-2">
                                    {{#discussion}}
                                        <label class="custom-control ios-switch form-check-inline m-0">
                                            <input type="checkbox" class="ios-switch-control-input form-check-input" id="subscription-toggle-{{id}}" data-type="subscription-toggle" data-action="toggle" data-discussionid="{{id}}" data-forumid="{{forumid}}" {{#userstate.subscribed}}data-targetstate="0" checked{{/userstate.subscribed}} {{^userstate.subscribed}}data-targetstate="1" {{/userstate.subscribed}}>
                                            <span class="ios-switch-control-indicator"></span>
                                        </label>
                                        </span>
                                    {{/discussion}}
                                </td>
                            {{/forum.capabilities.subscribe}}
                            <td class="p-0 align-middle fit-content" data-container="discussion-summary-actions">
                                {{#discussion}}
                                    <div class="d-flex flex-wrap justify-content-end icon-no-margin pr-2">
                                        {{#hasanyactions}}
                                            <div data-container=\'discussion-tools\'>
                                                {{> mod_forum/forum_action_menu}}
                                            </div>
                                        {{/hasanyactions}}
                                    </div>
                                {{/discussion}}
                            </td>
                        </tr>
                    {{/summaries}}
                </tbody>
                {{/discussion_list_body}}
            </table>
        </div>
        {{/discussion_list_output}}
        {{$discussion_bottom_pagination}}
        {{{ pagination }}}
        {{/discussion_bottom_pagination}}
        {{#can_create_discussion}}
            <div class="forumaddnew">
                <a href="{{create_discussion_link}}" class="btn btn-primary">{{create_discussion_link_text}}</a>
            </div>
        {{/can_create_discussion}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('discussion_top_pagination');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '        ';
                    $value = $this->resolveValue($context->find('pagination'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                }
                $blockFunction = $context->findInBlock('discussion_list_output');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '        <div class="table-overflow mt-3">
';
                    $buffer .= $indent . '            <table class="table discussion-list generaltable">
';
                    $buffer .= $indent . '                <caption id="discussion-table-description-';
                    $value = $this->resolveValue($context->find('uniqid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="sr-only">
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionEb7616eb082d38ffbff265dd116717ed($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                </caption>
';
                    $blockFunction = $context->findInBlock('discussion_list_header');
                    if (is_callable($blockFunction)) {
                        $buffer .= call_user_func($blockFunction, $context);
                    } else {
                        $buffer .= $indent . '                <thead>
';
                        $buffer .= $indent . '                    <tr>
';
                        $buffer .= $indent . '                        <th scope="col">
';
                        $buffer .= $indent . '                            <span class="accesshide">';
                        $value = $context->find('str');
                        $buffer .= $this->sectionE1a6182796dd1b976d215abc089edf1e($context, $indent, $value);
                        $buffer .= '</span>
';
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                        <th scope="col" class="p-l-0">
';
                        $value = $context->findDot('state.sortorder.isdiscussiondesc');
                        $buffer .= $this->sectionFebb5c3e5e00989754f6371cdff20963($context, $indent, $value);
                        $value = $context->findDot('state.sortorder.isdiscussionasc');
                        $buffer .= $this->section2c84cca434c83fe330a747dad2ab4977($context, $indent, $value);
                        $value = $context->findDot('state.sortorder.isdiscussiondesc');
                        if (empty($value)) {
                            
                            $value = $context->findDot('state.sortorder.isdiscussionasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortdiscussiondesc'), $context);
                                $buffer .= ($value === null ? '' : $value);
                                $buffer .= '" aria-label="';
                                $value = $context->find('str');
                                $buffer .= $this->sectionEf9629036b0703b6b8c3ca28b91e7251($context, $indent, $value);
                                $buffer .= '">';
                                $value = $context->find('str');
                                $buffer .= $this->sectionC1992336f71ab27e96dd60b73814a51c($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        $value = $context->findDot('forum.state.groupmode');
                        $buffer .= $this->sectionB72db95a34ce38ea329886d1dc098d6d($context, $indent, $value);
                        $buffer .= $indent . '                        <th scope="col" class="author px-3">
';
                        $value = $context->findDot('state.sortorder.isstarterdesc');
                        $buffer .= $this->section227321f5c12876cc15fb7a32576286a5($context, $indent, $value);
                        $value = $context->findDot('state.sortorder.isstarterasc');
                        $buffer .= $this->section23be51617b4c136f5d5b1a5f8e821ac6($context, $indent, $value);
                        $value = $context->findDot('state.sortorder.isstarterdesc');
                        if (empty($value)) {
                            
                            $value = $context->findDot('state.sortorder.isstarterasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortstarterdesc'), $context);
                                $buffer .= ($value === null ? '' : $value);
                                $buffer .= '" aria-label="';
                                $value = $context->find('str');
                                $buffer .= $this->sectionC00eea43088295dd7c1188b2e55e141a($context, $indent, $value);
                                $buffer .= '">';
                                $value = $context->find('str');
                                $buffer .= $this->section0b223ddf50719647c9723401fba2694d($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                        <th scope="col" class="lastpost px-3">
';
                        $value = $context->findDot('state.sortorder.islastpostdesc');
                        $buffer .= $this->section75e5502fdfe08530b472d995ed208f0b($context, $indent, $value);
                        $value = $context->findDot('state.sortorder.islastpostasc');
                        $buffer .= $this->sectionC33ee1551107eeef57b5193e649d4b03($context, $indent, $value);
                        $value = $context->findDot('state.sortorder.islastpostdesc');
                        if (empty($value)) {
                            
                            $value = $context->findDot('state.sortorder.islastpostasc');
                            if (empty($value)) {
                                
                                $buffer .= $indent . '                                    <a href="';
                                $value = $this->resolveValue($context->findDot('forum.urls.sortlastpostdesc'), $context);
                                $buffer .= ($value === null ? '' : $value);
                                $buffer .= '" aria-label="';
                                $value = $context->find('str');
                                $buffer .= $this->sectionEa917cd08c45399601e65090de917ad3($context, $indent, $value);
                                $buffer .= '">';
                                $value = $context->find('str');
                                $buffer .= $this->sectionBc4bf659abc5d7e4d1fa879fd68d56c8($context, $indent, $value);
                                $buffer .= '</a>
';
                            }
                        }
                        $buffer .= $indent . '                        </th>
';
                        $value = $context->findDot('forum.capabilities.viewdiscussions');
                        $buffer .= $this->sectionAc3c5cc4fd33a3c30478b9aeac8408c5($context, $indent, $value);
                        $value = $context->findDot('forum.capabilities.subscribe');
                        $buffer .= $this->section66a310cc5db67af73999a28823a03ecb($context, $indent, $value);
                        $buffer .= $indent . '                        <th scope="col" class="discussionsubscription px-5">
';
                        $buffer .= $indent . '                            <span class="accesshide">';
                        $value = $context->find('str');
                        $buffer .= $this->section2ad2fdcc9b858451e82e60edfcdcf48d($context, $indent, $value);
                        $buffer .= '</span>
';
                        $buffer .= $indent . '                        </th>
';
                        $buffer .= $indent . '                    </tr>
';
                        $buffer .= $indent . '                </thead>
';
                    }
                    $blockFunction = $context->findInBlock('discussion_list_body');
                    if (is_callable($blockFunction)) {
                        $buffer .= call_user_func($blockFunction, $context);
                    } else {
                        $buffer .= $indent . '                <tbody>
';
                        $value = $context->find('summaries');
                        $buffer .= $this->section264769895cdf842ed6a3d4b510f6eabe($context, $indent, $value);
                        $buffer .= $indent . '                </tbody>
';
                    }
                    $buffer .= $indent . '            </table>
';
                    $buffer .= $indent . '        </div>
';
                }
                $blockFunction = $context->findInBlock('discussion_bottom_pagination');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '        ';
                    $value = $this->resolveValue($context->find('pagination'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                }
                $value = $context->find('can_create_discussion');
                $buffer .= $this->sectionF1c9709a2e02997a7f8767356e8634bf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59c4aea0943e493fb1621a8d24c8bd0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nodiscussions, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nodiscussions, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section132f812b02ab59348cb5162d371a429e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'mod_forum/discussion_list\'], function($, View) {
    var root = $(\'#discussion-list-{{uniqid}}\');
    View.init(root);
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'mod_forum/discussion_list\'], function($, View) {
';
                $buffer .= $indent . '    var root = $(\'#discussion-list-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    View.init(root);
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block15df760132d95f76dffbdbae0ee33e4d($context)
    {
        $indent = $buffer = '';
        $buffer .= 'created-';
        $value = $this->resolveValue($context->findDot('discussion.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockB7bde8bf2db4dc361c0b908f53f3fc79($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->findDot('discussion.times.created'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block53f83b00ab9ad434690df04be3c450b0($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section3a6e53f90c6dd41d1acb0c171f9b04ca($context, $indent, $value);
    
        return $buffer;
    }

    public function block7c410968757b6c8d01f11505254aceed($context)
    {
        $indent = $buffer = '';
        $buffer .= 'modified-';
        $value = $this->resolveValue($context->findDot('discussion.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block09d402946013895bbd33900cb9f5cbf4($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->findDot('discussion.times.modified'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }
}
