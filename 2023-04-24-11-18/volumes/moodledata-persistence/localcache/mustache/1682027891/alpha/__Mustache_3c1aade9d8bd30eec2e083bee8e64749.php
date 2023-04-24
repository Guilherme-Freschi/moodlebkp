<?php

class __Mustache_3c1aade9d8bd30eec2e083bee8e64749 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-login-top-btn">
';
        $buffer .= $indent . '        ';
        $value = $context->find('stringbacktologin');
        $buffer .= $this->section35dc73c3b4fc7788b03593a96c2071cc($context, $indent, $value);
        $buffer .= ' <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/login/index.php" class="btn-link--clean">';
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-login-layout ';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionFae2e673aab9f27c06408ea1443e7dfd($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('loginlayoutimg');
        if (empty($value)) {
            
            $buffer .= 'rui-login-layout-simple';
        }
        $buffer .= ' ';
        $value = $context->find('loginlayout1');
        $buffer .= $this->sectionC1e15dfdcabb04e68c281485556042d6($context, $indent, $value);
        $value = $context->find('loginlayout2');
        $buffer .= $this->sectionD0da84c782719be6e34d02bb0f01be84($context, $indent, $value);
        $value = $context->find('loginlayout3');
        $buffer .= $this->section18b534f24a03a4391946c1f51b854472($context, $indent, $value);
        $value = $context->find('loginlayout4');
        $buffer .= $this->sectionD876a3aff3d0c0634f093d41158002e9($context, $indent, $value);
        $value = $context->find('loginlayout5');
        $buffer .= $this->section29ff704ed8f80fea4ffde99c6c0ba9ab($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('logincreateainbox');
        if (empty($value)) {
            
            $value = $context->find('cansignup');
            $buffer .= $this->sectionF468e1e999307d134706a55d19172400($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section46f3687730bffa1de4e7e44d53d36762($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('loginlogooutside');
        $buffer .= $this->sectionF01671987b6c86ef5ce2219cf51f6afd($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionD4ac434818e4ab00f3f22dc2cfb1d3e0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section92344c6b95fc8f2590b3c8f3d0a89c8f($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-login-box">
';
        $buffer .= $indent . '            <div class="rui-login-content">
';
        $value = $context->find('cansignup');
        $buffer .= $this->section7e3a2461334e35d0671c614d178f13b3($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="rui-loginpage-intro">
';
        $value = $context->find('loginlogooutside');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <div class="rui-loginpage-intro-logo">
';
            $value = $context->find('customloginlogo');
            $buffer .= $this->section86e37e38c49bec48d8949219ab1618af($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('customloginlogo');
            if (empty($value)) {
                
                $value = $context->find('logourl');
                $buffer .= $this->section7f10f9e8e7188f570be541981b0dc500($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <a href="';
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"><h2>';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h2></a>
';
                }
            }
            $buffer .= $indent . '                    </div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('signupintrotext');
        $buffer .= $this->sectionB3a472a0a177345b7ced5519329c9980($context, $indent, $value);
        $value = $context->find('loginlayoutimg');
        if (empty($value)) {
            
            $value = $context->find('signuptext');
            $buffer .= $this->section63b075280e4e8e94d21139a7ff16728a($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="rui-login-form">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('formhtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div><!-- .rui-login-form -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('loginhtmlblockbottom');
        $buffer .= $this->section2c766ac8e1f4521df83cb63c8d634759($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        if (empty($value)) {
            
            $value = $context->find('loginfootercontent');
            $buffer .= $this->section6cc7c92dbc1ccd5fb6d1ed553fd8447a($context, $indent, $value);
        }
        $buffer .= $indent . '            </div><!-- .rui-login-content -->
';
        $buffer .= $indent . '        </div><!-- .rui-login-box -->
';
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section5ce41ae20b025d5667238fa70b0e0262($context, $indent, $value);
        $buffer .= $indent . '   
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section6e3580bc55381ff6740c476d8c646bf1($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionF4fd8a82b36334cb052076d4f11bf9e2($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<button type="button" class="btn btn-xs btn-dark btn--cookie" ';
        $buffer .= ' data-modal="alert"';
        $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
        $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
        $buffer .= '>
';
        $buffer .= $indent . '<svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V15"></path>
';
        $buffer .= $indent . '    <circle cx="12" cy="9" r="1" fill="currentColor"></circle>
';
        $buffer .= $indent . '    <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '</svg>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<span class="ml-1">';
        $value = $context->find('str');
        $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
        $buffer .= '</span></button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div><!-- .login layout -->';

        return $buffer;
    }

    private function section35dc73c3b4fc7788b03593a96c2071cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="rui-login-calabel">{{{stringbacktologin}}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="rui-login-calabel">';
                $value = $this->resolveValue($context->find('stringbacktologin'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFae2e673aab9f27c06408ea1443e7dfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout-img';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout-img';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1e15dfdcabb04e68c281485556042d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0da84c782719be6e34d02bb0f01be84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18b534f24a03a4391946c1f51b854472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--3';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD876a3aff3d0c0634f093d41158002e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--4';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--4';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29ff704ed8f80fea4ffde99c6c0ba9ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--5';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--5';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e9ecf4a6aeb9951bc03c48d31a57cdf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="rui-login-calabel">{{{stringca}}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="rui-login-calabel">';
                $value = $this->resolveValue($context->find('stringca'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf72090742a5ac5031da4c04572ee091(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="rui-login-createaccount--top">
    <form action="{{signupurl}}" method="get" id="signup">
        {{#stringca}}<span class="rui-login-calabel">{{{stringca}}}</span>{{/stringca}} <button type="submit" class="btn-link--clean">{{#str}}startsignup{{/str}}</button>
    </form>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="rui-login-createaccount--top">
';
                $buffer .= $indent . '    <form action="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="get" id="signup">
';
                $buffer .= $indent . '        ';
                $value = $context->find('stringca');
                $buffer .= $this->section0e9ecf4a6aeb9951bc03c48d31a57cdf($context, $indent, $value);
                $buffer .= ' <button type="submit" class="btn-link--clean">';
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '    </form>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF468e1e999307d134706a55d19172400(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#customsignupoutside}}
<div class="rui-login-createaccount--top">
    <form action="{{signupurl}}" method="get" id="signup">
        {{#stringca}}<span class="rui-login-calabel">{{{stringca}}}</span>{{/stringca}} <button type="submit" class="btn-link--clean">{{#str}}startsignup{{/str}}</button>
    </form>
</div>
{{/customsignupoutside}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('customsignupoutside');
                $buffer .= $this->sectionCf72090742a5ac5031da4c04572ee091($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f3687730bffa1de4e7e44d53d36762(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="rui-login-wrapper">
    <div class="rui-login-top-wrapper">
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="rui-login-wrapper">
';
                $buffer .= $indent . '    <div class="rui-login-top-wrapper">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC336dc80046e60a9736cf2f88c76e24c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="rui-login-top">';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="rui-login-top">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section777c7b2295016b9aafb864daa61251ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{{ config.wwwroot }}}"><img src="{{customloginlogo}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('customloginlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid"/></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbf6a7d279452055061d0ad443007e02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{ config.wwwroot }}}"><img src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid"/></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c8015515e366bc886d44cbfc72bd0fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF01671987b6c86ef5ce2219cf51f6afd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="rui-login-logo my-6">
{{#loginlayoutimg}}<div class="rui-login-top">{{/loginlayoutimg}}
        {{#customloginlogo}}
        <a href="{{{ config.wwwroot }}}"><img src="{{customloginlogo}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></a>
        {{/customloginlogo}}

        {{^customloginlogo}}
            {{#logourl}}
            <a href="{{{ config.wwwroot }}}"><img src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></a>
            {{/logourl}}

            {{^logourl}}
            <a href="{{{ config.wwwroot }}}"><h1 class="rui-login-logo-name">{{sitename}}</h1></a>
            {{/logourl}}
        {{/customloginlogo}}
{{#loginlayoutimg}}</div>{{/loginlayoutimg}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="rui-login-logo my-6">
';
                $value = $context->find('loginlayoutimg');
                $buffer .= $this->sectionC336dc80046e60a9736cf2f88c76e24c($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('customloginlogo');
                $buffer .= $this->section777c7b2295016b9aafb864daa61251ba($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('customloginlogo');
                if (empty($value)) {
                    
                    $value = $context->find('logourl');
                    $buffer .= $this->sectionEbf6a7d279452055061d0ad443007e02($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $value = $context->find('logourl');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '            <a href="';
                        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '"><h1 class="rui-login-logo-name">';
                        $value = $this->resolveValue($context->find('sitename'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '</h1></a>
';
                    }
                }
                $value = $context->find('loginlayoutimg');
                $buffer .= $this->section9c8015515e366bc886d44cbfc72bd0fd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4ac434818e4ab00f3f22dc2cfb1d3e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '    
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92344c6b95fc8f2590b3c8f3d0a89c8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="rui-login-wrapper row no-gutters align-items-center justify-content-center w-100">
    <div class="rui-login-container row no-gutters">

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="rui-login-wrapper row no-gutters align-items-center justify-content-center w-100">
';
                $buffer .= $indent . '    <div class="rui-login-container row no-gutters">
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e3a2461334e35d0671c614d178f13b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="sr-only">
                        <a href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="sr-only">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86e37e38c49bec48d8949219ab1618af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{ config.wwwroot }}}"><h2><img src="{{customloginlogo}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></h2></a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><h2><img src="';
                $value = $this->resolveValue($context->find('customloginlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid"/></h2></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f10f9e8e7188f570be541981b0dc500(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{{ config.wwwroot }}}"><h2><img src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></h2></a>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><h2><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid"/></h2></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3a472a0a177345b7ced5519329c9980(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="rui-loginpage-intro-content">
                            {{{signupintrotext}}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="rui-loginpage-intro-content">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('signupintrotext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb5cbf05976368b3d18f56669da8579b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mt-3';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mt-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63b075280e4e8e94d21139a7ff16728a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="{{#signupintrotext}}mt-3{{/signupintrotext}}">
                            {{{signuptext}}}
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="';
                $value = $context->find('signupintrotext');
                $buffer .= $this->sectionEb5cbf05976368b3d18f56669da8579b($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('signuptext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c766ac8e1f4521df83cb63c8d634759(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="rui-login-bottom-block">
                    {{{loginhtmlblockbottom}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="rui-login-bottom-block">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('loginhtmlblockbottom'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cc7c92dbc1ccd5fb6d1ed553fd8447a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="rui-login-footer-content text-center mb-2">
                        <hr class="hr-small" />
                        {{{loginfootercontent}}}
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="rui-login-footer-content text-center mb-2">
';
                $buffer .= $indent . '                        <hr class="hr-small" />
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('loginfootercontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa0a0bb6db2cdb50d53df1d5bcae504f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-signup-additional-content">
                {{{signuptext}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-signup-additional-content">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('signuptext'), $context);
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

    private function section5ce41ae20b025d5667238fa70b0e0262(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-login-bg-container" style="background-image: url(\'{{loginbg}}\');">
            {{#signuptext}}
            <div class="rui-signup-additional-content">
                {{{signuptext}}}
            </div>
            {{/signuptext}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-login-bg-container" style="background-image: url(\'';
                $value = $this->resolveValue($context->find('loginbg'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');">
';
                $value = $context->find('signuptext');
                $buffer .= $this->sectionDa0a0bb6db2cdb50d53df1d5bcae504f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e3580bc55381ff6740c476d8c646bf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf6251f1430d8420d37c6b3ad91cd4f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="rui-login-footer text-center">
    {{{loginfootercontent}}}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="rui-login-footer text-center">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('loginfootercontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4fd8a82b36334cb052076d4f11bf9e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="rui-login-wrapper">
    {{#loginfootercontent}}
    <div class="rui-login-footer text-center">
    {{{loginfootercontent}}}
    </div>
    {{/loginfootercontent}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="rui-login-wrapper">
';
                $value = $context->find('loginfootercontent');
                $buffer .= $this->sectionEf6251f1430d8420d37c6b3ad91cd4f5($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb729cc74d31bce5e3746aa60b79a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cookiesnotice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cookiesnotice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
