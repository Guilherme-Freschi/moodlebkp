<?php

class __Mustache_2a42fe928fdc80e74ecbe8a2f41dccd3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('url');
        $buffer .= $this->section5a714f8a763abced5df5f4e32000483d($context, $indent, $value);

        return $buffer;
    }

    private function section2dc605662493d943d76622d2f7dc61e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{$ core/inplace_editable }}
                            {{> core/inplace_editable }}
                        {{/ core/inplace_editable }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core/inplace_editable');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core/inplace_editable')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a714f8a763abced5df5f4e32000483d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="activity-instance d-flex flex-column">
        <div class="activitytitle media {{textclasses}} modtype_{{modname}} position-relative align-self-start">
            <div class="activityiconcontainer {{purpose}} courseicon align-self-start">
                <img src="{{{icon}}}" class="activityicon " alt="{{{modname}}} icon">
            </div>
            <div class="media-body align-self-center">
                <div class="rui-pluginname">
                    {{{pluginname}}}
                </div>
                <div class="activityname">
                    {{#activityname}}
                        {{$ core/inplace_editable }}
                            {{> core/inplace_editable }}
                        {{/ core/inplace_editable }}
                    {{/activityname}}
                </div>
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
                
                $buffer .= $indent . '    <div class="activity-instance d-flex flex-column">
';
                $buffer .= $indent . '        <div class="activitytitle media ';
                $value = $this->resolveValue($context->find('textclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' position-relative align-self-start">
';
                $buffer .= $indent . '            <div class="activityiconcontainer ';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' courseicon align-self-start">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="activityicon " alt="';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' icon">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="media-body align-self-center">
';
                $buffer .= $indent . '                <div class="rui-pluginname">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="activityname">
';
                $value = $context->find('activityname');
                $buffer .= $this->section2dc605662493d943d76622d2f7dc61e1($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
