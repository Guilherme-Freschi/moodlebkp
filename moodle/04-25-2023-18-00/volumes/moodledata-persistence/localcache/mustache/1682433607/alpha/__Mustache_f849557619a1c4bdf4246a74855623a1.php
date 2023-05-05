<?php

class __Mustache_f849557619a1c4bdf4246a74855623a1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<p>';
        $value = $context->find('str');
        $buffer .= $this->section1bec9365f4a787b6e087a0f24aef593b($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '<div class="alert alert-warning" role="alert">
';
        $value = $context->find('str');
        $buffer .= $this->section9d0a3d8ac9b714d1134ed6a939fddd2c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<table class="table table-striped">
';
        $buffer .= $indent . '<tr>
';
        $buffer .= $indent . '<th>';
        $value = $context->find('str');
        $buffer .= $this->sectionBa15dce9e154acf67e8a14fa87ab9be0($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '<th>';
        $value = $context->find('str');
        $buffer .= $this->sectionF6e7bfdc48f0ec1e574f3938127fd16f($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '<th>';
        $value = $context->find('str');
        $buffer .= $this->section531a7e85534cd41c3905146342d9625c($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '<th></th>
';
        $buffer .= $indent . '</tr>
';
        $value = $context->find('tools');
        $buffer .= $this->section0dde08e6522739985cf50a5b3d10d669($context, $indent, $value);
        $buffer .= $indent . '</table>
';
        $value = $context->find('tools');
        if (empty($value)) {
            
            $value = $context->find('str');
            $buffer .= $this->sectionFcabd928f54c8348965ed986f3f6c0ea($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '  <button data-href="startltiadvregistration.php?url=';
        $value = $this->resolveValue($context->find('startregurlenc'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&type=0" class="btn btn-primary">
';
        $buffer .= $indent . '    <span class="btn-loader">';
        if ($partial = $this->mustache->loadPartial('mod_lti/loader')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->section39caab806cf9d3491b5608c8eea73b5e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </button>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<form method="POST" id="startregform">
';
        $buffer .= $indent . '  <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"/>
';
        $buffer .= $indent . '</form>
';
        $value = $context->find('js');
        $buffer .= $this->section504c1a01d9a6d29de47a76c671b1b2cf($context, $indent, $value);

        return $buffer;
    }

    private function section1bec9365f4a787b6e087a0f24aef593b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_text, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dynreg_update_text, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d0a3d8ac9b714d1134ed6a939fddd2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_warn_dupdomain, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'dynreg_update_warn_dupdomain, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa15dce9e154acf67e8a14fa87ab9be0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_name, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dynreg_update_name, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6e7bfdc48f0ec1e574f3938127fd16f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_url, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dynreg_update_url, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section531a7e85534cd41c3905146342d9625c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_version, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dynreg_update_version, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0a3543c76dd6fbe68e6bc369a5680d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_btn_update, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dynreg_update_btn_update, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0dde08e6522739985cf50a5b3d10d669(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <tr>
  <td>{{name}}</td>
  <td>{{baseurl}}</td>
  <td>{{ltiversion}}</td>
  <td><button data-href="startltiadvregistration.php?url={{startregurlenc}}&type={{id}}" class="btn btn-outline-primary">
      <span class="btn-loader">{{> mod_lti/loader }}</span>
      {{#str}}dynreg_update_btn_update, mod_lti {{/str}}
      </button>
  </td>
  </tr>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <tr>
';
                $buffer .= $indent . '  <td>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '  <td>';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '  <td>';
                $value = $this->resolveValue($context->find('ltiversion'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '  <td><button data-href="startltiadvregistration.php?url=';
                $value = $this->resolveValue($context->find('startregurlenc'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&type=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-outline-primary">
';
                $buffer .= $indent . '      <span class="btn-loader">';
                if ($partial = $this->mustache->loadPartial('mod_lti/loader')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '</span>
';
                $buffer .= $indent . '      ';
                $value = $context->find('str');
                $buffer .= $this->sectionC0a3543c76dd6fbe68e6bc369a5680d5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      </button>
';
                $buffer .= $indent . '  </td>
';
                $buffer .= $indent . '  </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcabd928f54c8348965ed986f3f6c0ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_notools, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'dynreg_update_notools, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39caab806cf9d3491b5608c8eea73b5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dynreg_update_btn_new, mod_lti ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dynreg_update_btn_new, mod_lti ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section504c1a01d9a6d29de47a76c671b1b2cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    disableAndGo = e => {
      document.querySelectorAll("button").forEach(e=>e.setAttribute("disabled", true));
      e.target.querySelector("span.btn-loader").style.display="inline";
      let form = document.getElementById("startregform");
      form.action = e.target.getAttribute("data-href");
      form.submit();
    };
    document.querySelectorAll("button").forEach(b=>b.onclick=disableAndGo);
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    disableAndGo = e => {
';
                $buffer .= $indent . '      document.querySelectorAll("button").forEach(e=>e.setAttribute("disabled", true));
';
                $buffer .= $indent . '      e.target.querySelector("span.btn-loader").style.display="inline";
';
                $buffer .= $indent . '      let form = document.getElementById("startregform");
';
                $buffer .= $indent . '      form.action = e.target.getAttribute("data-href");
';
                $buffer .= $indent . '      form.submit();
';
                $buffer .= $indent . '    };
';
                $buffer .= $indent . '    document.querySelectorAll("button").forEach(b=>b.onclick=disableAndGo);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
