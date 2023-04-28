<?php

class __Mustache_50daa4a5a816df4c48b205405baf2dc0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="coursecompetenciespage" class="mt-4">
';
        $buffer .= $indent . '    <div data-region="actions" class="clearfix wrapper-fw my-3">
';
        $buffer .= $indent . '        <div class="float-sm-left">
';
        $value = $context->find('canmanagecoursecompetencies');
        $buffer .= $this->sectionF7e8d84187d897183473dd66fc738247($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="configurecoursecompetencies" class="wrapper-fw">
';
        $value = $context->find('cangradecompetencies');
        $buffer .= $this->section9cc65b41d626c29d5e5637014f695b0e($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('statistics');
        $buffer .= $this->sectionB501155168f9ceba653a4354a613a445($context, $indent, $value);
        $buffer .= $indent . '<div data-region="coursecompetencies">
';
        $buffer .= $indent . '<table class="generaltable fullwidth managecompetencies position-relative">
';
        $buffer .= $indent . '<tbody class="drag-parentnode">
';
        $value = $context->find('competencies');
        $buffer .= $this->sectionD4728ff5ab816da4f539e2c4fb95fad0($context, $indent, $value);
        $buffer .= $indent . '</tbody>
';
        $buffer .= $indent . '</table>
';
        $value = $context->find('competencies');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="alert alert-danger my-3">
';
            $value = $context->find('moduleid');
            $buffer .= $this->section964b073a38fdd7bb782cf3629b01b56d($context, $indent, $value);
            $value = $context->find('moduleid');
            if (empty($value)) {
                
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section03e850bca9d66bc415422912b5bd6e07($context, $indent, $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '</div>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div data-region="actions">
';
        $value = $context->find('canmanagecompetencyframeworks');
        $buffer .= $this->sectionF714bdc1a1bd10ffaac46c58eaed1709($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section613613d384c0d3c987a261019bd6da90($context, $indent, $value);
        $value = $context->find('canconfigurecoursecompetencies');
        $buffer .= $this->section6452acc23e99b68630649c182e2455fe($context, $indent, $value);

        return $buffer;
    }

    private function section8e1a2521a451eb6a7b8b5f0ae4b72269(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcoursecompetencies, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcoursecompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7e8d84187d897183473dd66fc738247(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <button class="btn btn-primary" disabled>{{#str}}addcoursecompetencies, tool_lp{{/str}}</button>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <button class="btn btn-primary" disabled>';
                $value = $context->find('str');
                $buffer .= $this->section8e1a2521a451eb6a7b8b5f0ae4b72269($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0ed9b535ed171b00353f97e30f4d0eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarepushedtouserplans, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursecompetencyratingsarepushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE90f8c29c8184c27e498368c311f10e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}coursecompetencyratingsarepushedtouserplans, tool_lp{{/str}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionA0ed9b535ed171b00353f97e30f4d0eb($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7728dc32f135d1e2924b0746299af745(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc1d4f1bf432cd9124ae3a835133dcf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}edit{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c2bdc7141fc65ee703e3af7f89a2bab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#"
               data-action="configure-course-competency-settings"
               data-courseid="{{courseid}}"
               data-pushratingstouserplans="{{settings.pushratingstouserplans}}">
                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#"
';
                $buffer .= $indent . '               data-action="configure-course-competency-settings"
';
                $buffer .= $indent . '               data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               data-pushratingstouserplans="';
                $value = $this->resolveValue($context->findDot('settings.pushratingstouserplans'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionFc1d4f1bf432cd9124ae3a835133dcf6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cc65b41d626c29d5e5637014f695b0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="alert alert-light my-3">
        {{#settings.pushratingstouserplans}}
            {{#str}}coursecompetencyratingsarepushedtouserplans, tool_lp{{/str}}
        {{/settings.pushratingstouserplans}}
        {{^settings.pushratingstouserplans}}
            {{#str}}coursecompetencyratingsarenotpushedtouserplans, tool_lp{{/str}}
        {{/settings.pushratingstouserplans}}
        {{#canconfigurecoursecompetencies}}
            <a href="#"
               data-action="configure-course-competency-settings"
               data-courseid="{{courseid}}"
               data-pushratingstouserplans="{{settings.pushratingstouserplans}}">
                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}
            </a>
        {{/canconfigurecoursecompetencies}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="alert alert-light my-3">
';
                $value = $context->findDot('settings.pushratingstouserplans');
                $buffer .= $this->sectionE90f8c29c8184c27e498368c311f10e0($context, $indent, $value);
                $value = $context->findDot('settings.pushratingstouserplans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    $value = $context->find('str');
                    $buffer .= $this->section7728dc32f135d1e2924b0746299af745($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('canconfigurecoursecompetencies');
                $buffer .= $this->section1c2bdc7141fc65ee703e3af7f89a2bab($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB501155168f9ceba653a4354a613a445(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> tool_lp/course_competency_statistics }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_lp/course_competency_statistics')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa3e01b8d1173704a07bf66f4f75d666(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="drag-handlecontainer"></span>
        <div class="float-sm-right">
            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}" class="btn btn-icon btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
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
                
                $buffer .= $indent . '        <span class="drag-handlecontainer"></span>
';
                $buffer .= $indent . '        <div class="float-sm-right">
';
                $buffer .= $indent . '            <a href="#" data-action="delete-competency-link" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-icon btn-danger">
';
                $buffer .= $indent . '                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
';
                $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
';
                $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
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

    private function sectionD6d7bcd5d66932580fec7960232c9fc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewdetails, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewdetails, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE93b62b2f5d6e0f845afdb0a073572d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{pluginbaseurl}}/user_competency_in_course.php?courseid={{courseid}}&competencyid={{competency.id}}&userid={{gradableuserid}}"
                    id="competency-info-link-{{competency.id}}"
                    class="d-block mb-2"
                    title="{{#str}}viewdetails, tool_lp{{/str}}">
                    <div class="d-inline-flex"><strong class="py-1 mr-2">{{{competency.shortname}}}</strong><div class="badge badge-info">{{competency.idnumber}}</div></div>
                </a>
                <div>{{{competency.description}}}</div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/user_competency_in_course.php?courseid=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&competencyid=';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&userid=';
                $value = $this->resolveValue($context->find('gradableuserid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    id="competency-info-link-';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    class="d-block mb-2"
';
                $buffer .= $indent . '                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD6d7bcd5d66932580fec7960232c9fc4($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="d-inline-flex"><strong class="py-1 mr-2">';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</strong><div class="badge badge-info">';
                $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div></div>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <div>';
                $value = $this->resolveValue($context->findDot('competency.description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db15ba4d8fa7764751fbbe00561fbe0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'path, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'path, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2829b90b1614d563eb8130912ecc1ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-inline-flex align-items-center my-2">
                <span class="badge badge-light mr-2">{{#str}}path, tool_lp{{/str}}</span>
                <span>{{> tool_lp/competency_path }}</span>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-inline-flex align-items-center my-2">
';
                $buffer .= $indent . '                <span class="badge badge-light mr-2">';
                $value = $context->find('str');
                $buffer .= $this->section5db15ba4d8fa7764751fbbe00561fbe0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                <span>';
                if ($partial = $this->mustache->loadPartial('tool_lp/competency_path')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcd8df39475c954582aec8b93a5f17d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'badge-success';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'badge-success';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE949995580f4edca462e6c410f6e8cc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}}">{{gradename}}</span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <span class="badge ';
                $value = $context->find('proficiency');
                $buffer .= $this->sectionBcd8df39475c954582aec8b93a5f17d5($context, $indent, $value);
                $value = $context->find('proficiency');
                if (empty($value)) {
                    
                    $buffer .= 'badge-danger';
                }
                $buffer .= '">';
                $value = $this->resolveValue($context->find('gradename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4603a632eeafac814db6dcdafed283c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#grade}}
                <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}}">{{gradename}}</span>
                {{/grade}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('grade');
                $buffer .= $this->sectionE949995580f4edca462e6c410f6e8cc2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c0c437015e88b1da78736264f954838(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'uponcoursecompletion, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'uponcoursecompletion, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f10ca2c32952381466655b33bb39bd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA33e763be02a64e47fea9dfc42323057(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div data-region="coursecompetency-ruleoutcome" class="my-3">
                <label class="my-0">
                    <span class="mr-1">{{#str}}uponcoursecompletion, tool_lp{{/str}}</span>
                    <select data-field="ruleoutcome" data-id="{{coursecompetency.id}}" class="custom-select">
                    {{#ruleoutcomeoptions}}
                        <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                    {{/ruleoutcomeoptions}}
                    </select>
                </label>
            </div>

            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div data-region="coursecompetency-ruleoutcome" class="my-3">
';
                $buffer .= $indent . '                <label class="my-0">
';
                $buffer .= $indent . '                    <span class="mr-1">';
                $value = $context->find('str');
                $buffer .= $this->section5c0c437015e88b1da78736264f954838($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <select data-field="ruleoutcome" data-id="';
                $value = $this->resolveValue($context->findDot('coursecompetency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="custom-select">
';
                $value = $context->find('ruleoutcomeoptions');
                $buffer .= $this->section0f10ca2c32952381466655b33bb39bd4($context, $indent, $value);
                $buffer .= $indent . '                    </select>
';
                $buffer .= $indent . '                </label>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24a67fa020473241f6bf9a69b69d7be2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activities';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activities';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6318ffa033c858a9cacf07db58926d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="list-inline-item"><a href="{{url}}"><img src="{{iconurl}}"> {{name}} </a></li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa4a803c089c26a0a2019bf1954e8a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noactivities, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'noactivities, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a1322c6565f41374b0000292a58679d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userplans, core_competency';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userplans, core_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30642908f7ecbf6e7d6ec93e191fb357(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/plan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE284c88c7c4e1ebb61be5d7e54215ba3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nouserplanswithcompetency, core_competency';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nouserplanswithcompetency, core_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4728ff5ab816da4f539e2c4fb95fad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr class="drag-samenode position-relative" data-id="{{competency.id}}">
    <td class="position-relative">
        {{#canmanagecoursecompetencies}}
        <span class="drag-handlecontainer"></span>
        <div class="float-sm-right">
            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}" class="btn btn-icon btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
                </svg>
            </a>
        </div>
        {{/canmanagecoursecompetencies}}

        <div class="pt-2 px-2 mt-2 border-top">
            {{#competency}}
                <a href="{{pluginbaseurl}}/user_competency_in_course.php?courseid={{courseid}}&competencyid={{competency.id}}&userid={{gradableuserid}}"
                    id="competency-info-link-{{competency.id}}"
                    class="d-block mb-2"
                    title="{{#str}}viewdetails, tool_lp{{/str}}">
                    <div class="d-inline-flex"><strong class="py-1 mr-2">{{{competency.shortname}}}</strong><div class="badge badge-info">{{competency.idnumber}}</div></div>
                </a>
                <div>{{{competency.description}}}</div>
            {{/competency}}

            {{#comppath}}
            <div class="d-inline-flex align-items-center my-2">
                <span class="badge badge-light mr-2">{{#str}}path, tool_lp{{/str}}</span>
                <span>{{> tool_lp/competency_path }}</span>
            </div>
            {{/comppath}}
            {{#usercompetencycourse}}
                {{#grade}}
                <span class="badge {{#proficiency}}badge-success{{/proficiency}}{{^proficiency}}badge-danger{{/proficiency}}">{{gradename}}</span>
                {{/grade}}
            {{/usercompetencycourse}}
            {{#canmanagecoursecompetencies}}
            <div data-region="coursecompetency-ruleoutcome" class="my-3">
                <label class="my-0">
                    <span class="mr-1">{{#str}}uponcoursecompletion, tool_lp{{/str}}</span>
                    <select data-field="ruleoutcome" data-id="{{coursecompetency.id}}" class="custom-select">
                    {{#ruleoutcomeoptions}}
                        <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                    {{/ruleoutcomeoptions}}
                    </select>
                </label>
            </div>

            {{/canmanagecoursecompetencies}}
            <div data-region="coursecompetencyactivities" class="my-3 pb-3 border-bottom">
                <h6>{{#str}}activities{{/str}}</h6>
                <ul class="inline list-inline mt-0 p-0">
                {{#coursemodules}}
                    <li class="list-inline-item"><a href="{{url}}"><img src="{{iconurl}}"> {{name}} </a></li>
                {{/coursemodules}}
                {{^coursemodules}}
                    <li class="list-inline-item"><div class="badge badge-warning">{{#str}}noactivities, tool_lp{{/str}}</div></li>
                {{/coursemodules}}
                </ul>
            </div>

            <div data-region="learningplans">

                <h6>{{#str}}userplans, core_competency{{/str}}</h6>
                <ul class="inline list-inline mt-0 p-0">
                {{#plans}}
                    <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
                {{/plans}}
                {{^plans}}
                    <li class="list-inline-item"><div class="badge badge-warning">{{#str}}nouserplanswithcompetency, core_competency{{/str}}</div></li>
                {{/plans}}
                </ul>

            </div>

        </div>
    </td>
    </tr>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <tr class="drag-samenode position-relative" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '    <td class="position-relative">
';
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->sectionAa3e01b8d1173704a07bf66f4f75d666($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="pt-2 px-2 mt-2 border-top">
';
                $value = $context->find('competency');
                $buffer .= $this->sectionE93b62b2f5d6e0f845afdb0a073572d5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('comppath');
                $buffer .= $this->sectionC2829b90b1614d563eb8130912ecc1ea($context, $indent, $value);
                $value = $context->find('usercompetencycourse');
                $buffer .= $this->section4603a632eeafac814db6dcdafed283c2($context, $indent, $value);
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->sectionA33e763be02a64e47fea9dfc42323057($context, $indent, $value);
                $buffer .= $indent . '            <div data-region="coursecompetencyactivities" class="my-3 pb-3 border-bottom">
';
                $buffer .= $indent . '                <h6>';
                $value = $context->find('str');
                $buffer .= $this->section24a67fa020473241f6bf9a69b69d7be2($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                <ul class="inline list-inline mt-0 p-0">
';
                $value = $context->find('coursemodules');
                $buffer .= $this->sectionE6318ffa033c858a9cacf07db58926d7($context, $indent, $value);
                $value = $context->find('coursemodules');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <li class="list-inline-item"><div class="badge badge-warning">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa4a803c089c26a0a2019bf1954e8a7d($context, $indent, $value);
                    $buffer .= '</div></li>
';
                }
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div data-region="learningplans">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <h6>';
                $value = $context->find('str');
                $buffer .= $this->section6a1322c6565f41374b0000292a58679d($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                <ul class="inline list-inline mt-0 p-0">
';
                $value = $context->find('plans');
                $buffer .= $this->section30642908f7ecbf6e7d6ec93e191fb357($context, $indent, $value);
                $value = $context->find('plans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <li class="list-inline-item"><div class="badge badge-warning">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionE284c88c7c4e1ebb61be5d7e54215ba3($context, $indent, $value);
                    $buffer .= '</div></li>
';
                }
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82d921192368247c8321959f9fbbe9c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesinactivity, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetenciesinactivity, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section964b073a38fdd7bb782cf3629b01b56d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#str}}nocompetenciesinactivity, tool_lp{{/str}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section82d921192368247c8321959f9fbbe9c4($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03e850bca9d66bc415422912b5bd6e07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesincourse, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetenciesincourse, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section162358c28b46626a5b0ef954763a36a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managecompetenciesandframeworks, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'managecompetenciesandframeworks, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF714bdc1a1bd10ffaac46c58eaed1709(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a class="btn btn-primary" href="{{manageurl}}">{{#str}}managecompetenciesandframeworks, tool_lp{{/str}}</a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('manageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section162358c28b46626a5b0ef954763a36a3($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section613613d384c0d3c987a261019bd6da90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencies\'], function(mod) {
    (new mod({{courseid}}, \'course\', {{pagecontextid}}));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_lp/competencies\'], function(mod) {
';
                $buffer .= $indent . '    (new mod(';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', \'course\', ';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c49fd6a3b94bb73a903cd71326b01e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/course_competency_settings\'], function(Mod) {
    (new Mod(\'[data-action=configure-course-competency-settings]\'));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_lp/course_competency_settings\'], function(Mod) {
';
                $buffer .= $indent . '    (new Mod(\'[data-action=configure-course-competency-settings]\'));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6452acc23e99b68630649c182e2455fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'tool_lp/course_competency_settings\'], function(Mod) {
    (new Mod(\'[data-action=configure-course-competency-settings]\'));
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section0c49fd6a3b94bb73a903cd71326b01e7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
