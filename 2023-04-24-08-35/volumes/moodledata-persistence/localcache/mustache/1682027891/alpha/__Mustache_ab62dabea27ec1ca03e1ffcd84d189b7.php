<?php

class __Mustache_ab62dabea27ec1ca03e1ffcd84d189b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-login-layout 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionFae2e673aab9f27c06408ea1443e7dfd($context, $indent, $value);
        $buffer .= ' 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayoutimg');
        if (empty($value)) {
            
            $buffer .= 'rui-login-layout-simple';
        }
        $buffer .= ' 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlogooutside');
        $buffer .= $this->section2f8037f28a0eb1fa35d2b2c37d3c9283($context, $indent, $value);
        $buffer .= ' 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout1');
        $buffer .= $this->sectionC1e15dfdcabb04e68c281485556042d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout2');
        $buffer .= $this->sectionD0da84c782719be6e34d02bb0f01be84($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout3');
        $buffer .= $this->section18b534f24a03a4391946c1f51b854472($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout4');
        $buffer .= $this->sectionD876a3aff3d0c0634f093d41158002e9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout5');
        $buffer .= $this->section29ff704ed8f80fea4ffde99c6c0ba9ab($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '         
';
        $value = $context->find('cansignup');
        $buffer .= $this->section520bacee3855c5c7b774ae1a87302f2a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionF03205806acd4805b2ca566b70bd5ece($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlogooutside');
        $buffer .= $this->sectionAca2e14869781ce195371307b3a3b12e($context, $indent, $value);
        $buffer .= $indent . '           
';
        $value = $context->find('loginhtmlcontent1');
        $buffer .= $this->section9af015534f92cf92a3c39bceedf7c70c($context, $indent, $value);
        $buffer .= $indent . '            
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section87eed43a4c7ce7f9757971add7ae41e6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionC49deff370f5e814734f8b6533c8b227($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="rui-login-box">
';
        $buffer .= $indent . '                        <div class="rui-login-content">
';
        $value = $context->find('cansignup');
        $buffer .= $this->section41dceb7889e645458ff3eba891e83789($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <div class="rui-loginpage-intro">
';
        $value = $context->find('loginlogooutside');
        if (empty($value)) {
            
            $buffer .= $indent . '                                <div class="rui-loginpage-intro-logo">
';
            $value = $context->find('customloginlogo');
            $buffer .= $this->section6c072c14762a6021e28735866d3e0f2c($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('customloginlogo');
            if (empty($value)) {
                
                $value = $context->find('logourl');
                $buffer .= $this->section2a449439473fd9f25676a994079ac7d5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                        <a href="';
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"><h2>';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h2></a>
';
                }
            }
            $buffer .= $indent . '                                </div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('loginintrotext');
        $buffer .= $this->section5913cfe17a5057dbcef689f5d77eead0($context, $indent, $value);
        $buffer .= $indent . '      
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('error');
        $buffer .= $this->section275589033c64fc9fb5c49f91dee51230($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginidprovtop');
        $buffer .= $this->section0a3025eec5644b47fdd31d5884abce2c($context, $indent, $value);
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                            <div class="rui-login-form">
';
        $buffer .= $indent . '                                
';
        $buffer .= $indent . '                                <form action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="post" id="login">
';
        $buffer .= $indent . '                                    <input id="anchor" type="hidden" name="anchor" value="">
';
        $buffer .= $indent . '                                    <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
        $buffer .= $indent . '                                    <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                                    <div class="form-group mb-2">
';
        $buffer .= $indent . '                                        <label for="username" class="sr-only">
';
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                                                ';
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section0fa4afe6c92d43f86828cd626c68d3ad($context, $indent, $value);
        $buffer .= $indent . '                                        </label>                                
';
        $buffer .= $indent . '                                        <input type="text" name="username" id="username"
';
        $buffer .= $indent . '                                            class="form-control form-control--username"
';
        $buffer .= $indent . '                                            value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                                            placeholder=';
        $value = $context->find('quote');
        $buffer .= $this->section4a2b2050243eb4dff6ce2b11212bbbcb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                            autocomplete="username">
';
        $buffer .= $indent . '
';
        $value = $context->find('rememberusername');
        $buffer .= $this->sectionC11aded977862a5bbc118b195e12b140($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group my-1">
';
        $buffer .= $indent . '                                        <label for="password" class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                                        <input type="password" name="password" id="password" value=""
';
        $buffer .= $indent . '                                            class="form-control form-control--password"
';
        $buffer .= $indent . '                                            placeholder=';
        $value = $context->find('quote');
        $buffer .= $this->section1e0c7d916e3932461ff09cf034c710f8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                            autocomplete="current-password">
';
        $buffer .= $indent . '                                            <span class="rui-show-password-btn rui-show-password-btn--hidden" id="togglePassword">
';
        $buffer .= $indent . '                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12C19.25 13 17.5 18.25 12 18.25C6.5 18.25 4.75 13 4.75 12C4.75 11 6.5 5.75 12 5.75C17.5 5.75 19.25 11 19.25 12Z"></path>
';
        $buffer .= $indent . '                                                    <circle cx="12" cy="12" r="2.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '                                                </svg>
';
        $buffer .= $indent . '                                            </span>
';
        $buffer .= $indent . '                                    </div>
';
        $value = $context->find('hideforgotpassword');
        if (empty($value)) {
            
            $buffer .= $indent . '                                    <div class="w-100 text-center">
';
            $buffer .= $indent . '                                        <a class="rui-login-forgot-btn" href="';
            $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">';
            $value = $context->find('str');
            $buffer .= $this->section6aa95a7e496f5307b40bee7262bd9321($context, $indent, $value);
            $buffer .= '</a>
';
            $buffer .= $indent . '                                    </div>
';
        }
        $buffer .= $indent . '                                    ';
        $value = $this->resolveValue($context->find('logininfobox'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                    <button type="submit" class="btn btn-lg btn-primary btn-block mt-3" id="loginbtn">';
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                                </form>
';
        $buffer .= $indent . '                            </div><!-- .rui-login-form -->
';
        $buffer .= $indent . '
';
        $value = $context->find('loginidprovtop');
        if (empty($value)) {
            
            $value = $context->find('hasidentityproviders');
            $buffer .= $this->sectionFdb181c9eef08c0b23a93088fc450436($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <div class="rui-login-additional-btns">
';
        $value = $context->find('canloginasguest');
        $buffer .= $this->section6ac00b104b24a60d05c247cefb271e04($context, $indent, $value);
        $buffer .= $indent . '                            </div><!-- .rui-additional-btns -->
';
        $buffer .= $indent . '                            
';
        $value = $context->find('cansignup');
        $buffer .= $this->section0e83e73b6a846640e7819305a86f8898($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('customsignupoutside');
        if (empty($value)) {
            
            $buffer .= $indent . '                            <div class="rui-login-createaccount my-4 text-center">
';
            $buffer .= $indent . '                                <hr class="hr-small" />
';
            $buffer .= $indent . '                                <form action="';
            $value = $this->resolveValue($context->find('signupurl'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" method="get" id="signup">
';
            $buffer .= $indent . '                                    ';
            $value = $context->find('stringca');
            $buffer .= $this->sectionD6f91d8a329e39df2167e3115bcce6c5($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                                    <button type="submit" class="btn btn-info w-100">';
            $value = $context->find('str');
            $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
            $buffer .= '</button>
';
            $buffer .= $indent . '                                </form>
';
            $buffer .= $indent . '                            </div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('loginhtmlblockbottom');
        $buffer .= $this->section6c78e87195b48e3cf77d0be39b0004fd($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('instructions');
        $buffer .= $this->sectionF2b736000af8c1b6c171725302da812e($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        if (empty($value)) {
            
            $value = $context->find('loginhtmlcontent3');
            $buffer .= $this->section429f5813542c53298f6bde6def47aeb5($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('loginfootercontent');
            $buffer .= $this->section7ac4641b637b23cd58b8ba904a69a8e5($context, $indent, $value);
        }
        $buffer .= $indent . '                        </div><!-- .rui-login-content -->
';
        $buffer .= $indent . '                    </div><!-- .rui-login-box -->
';
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section0197c01102faa002ef947e9a01bf0032($context, $indent, $value);
        $buffer .= $indent . '               
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionFa190b48422a7a2a2be750ff314c319f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section4850086520087183a238f69e455f8d03($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <button type="button" class="btn btn-xs btn-dark btn--cookie" ';
        $buffer .= ' data-modal="alert"';
        $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
        $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
        $buffer .= '>
';
        $buffer .= $indent . '            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V15"></path>
';
        $buffer .= $indent . '                <circle cx="12" cy="9" r="1" fill="currentColor"></circle>
';
        $buffer .= $indent . '                <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <span class="ml-1">';
        $value = $context->find('str');
        $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
        $buffer .= '</span></button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div><!-- .login layout -->
';
        $buffer .= $indent . '
';
        $value = $context->find('maintenance');
        $buffer .= $this->sectionFf90a67640f3d358c76a1b34b999c9b0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section4a6eee035d80a0c1b39c0718cd5f551a($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '        const togglePassword = document.querySelector("#togglePassword");
';
        $buffer .= $indent . '        const password = document.querySelector("#password");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        togglePassword.addEventListener("click", function () {
';
        $buffer .= $indent . '            // toggle the type attribute
';
        $buffer .= $indent . '            const type = password.getAttribute("type") === "password" ? "text" : "password";
';
        $buffer .= $indent . '            password.setAttribute("type", type);
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            // toggle the icon
';
        $buffer .= $indent . '            this.classList.toggle("rui-show-password-btn--hidden");
';
        $buffer .= $indent . '        });
';
        $buffer .= $indent . '    </script>
';
        $buffer .= $indent . '    
';
        $value = $this->resolveValue($context->find('logincustomfooterhtml'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';

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

    private function section2f8037f28a0eb1fa35d2b2c37d3c9283(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login--logo-outsite';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login--logo-outsite';
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

    private function section890fae76c23715074c7640b24e13e950(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-top-btn">
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
                
                $buffer .= $indent . '            <div class="rui-login-top-btn">
';
                $buffer .= $indent . '                <form action="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="get" id="signup">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('stringca');
                $buffer .= $this->section0e9ecf4a6aeb9951bc03c48d31a57cdf($context, $indent, $value);
                $buffer .= ' <button type="submit" class="btn-link--clean">';
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                </form>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section520bacee3855c5c7b774ae1a87302f2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#customsignupoutside}}
            <div class="rui-login-top-btn">
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
                $buffer .= $this->section890fae76c23715074c7640b24e13e950($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF03205806acd4805b2ca566b70bd5ece(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '            <div class="rui-login-wrapper">
';
                $buffer .= $indent . '                <div class="rui-login-top-wrapper">
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
                
                $buffer .= '<div class="rui-login-top">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB75c6bc1a2135a666a287b87e49b53af(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                    <a href="';
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

    private function section61f6d5cf2eaec4c82a99c54a99247079(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                        <a href="';
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
                
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAca2e14869781ce195371307b3a3b12e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-logo-container my-6">
            {{#loginlayoutimg}}<div class="rui-login-top">{{/loginlayoutimg}}
                <div>
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
                </div>
            {{#loginlayoutimg}}</div>{{/loginlayoutimg}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-login-logo-container my-6">
';
                $buffer .= $indent . '            ';
                $value = $context->find('loginlayoutimg');
                $buffer .= $this->sectionC336dc80046e60a9736cf2f88c76e24c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div>
';
                $value = $context->find('customloginlogo');
                $buffer .= $this->sectionB75c6bc1a2135a666a287b87e49b53af($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('customloginlogo');
                if (empty($value)) {
                    
                    $value = $context->find('logourl');
                    $buffer .= $this->section61f6d5cf2eaec4c82a99c54a99247079($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $value = $context->find('logourl');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                        <a href="';
                        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '"><h1 class="rui-login-logo-name">';
                        $value = $this->resolveValue($context->find('sitename'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '</h1></a>
';
                    }
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            ';
                $value = $context->find('loginlayoutimg');
                $buffer .= $this->section9c8015515e366bc886d44cbfc72bd0fd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9af015534f92cf92a3c39bceedf7c70c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-html-1">                           
                {{{loginhtmlcontent1}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-login-html-1">                           
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('loginhtmlcontent1'), $context);
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

    private function section87eed43a4c7ce7f9757971add7ae41e6(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC49deff370f5e814734f8b6533c8b227(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '            <div class="rui-login-wrapper row no-gutters align-items-center justify-content-center w-100">
';
                $buffer .= $indent . '                <div class="rui-login-container row no-gutters">
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

    private function section41dceb7889e645458ff3eba891e83789(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                <div class="sr-only">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c072c14762a6021e28735866d3e0f2c(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                    <a href="';
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

    private function section2a449439473fd9f25676a994079ac7d5(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                        <a href="';
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

    private function section5913cfe17a5057dbcef689f5d77eead0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-loginpage-intro-content mb-3 text-center">
                                    {{{loginintrotext}}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-loginpage-intro-content mb-3 text-center">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('loginintrotext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section275589033c64fc9fb5c49f91dee51230(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="loginerrors mt-3">
                                    <a href="#" id="loginerrormessage" class="accesshide">{{error}}</a>
                                    <div class="alert alert-danger" role="alert" data-aria-autofocus="true">{{error}}</div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="loginerrors mt-3">
';
                $buffer .= $indent . '                                    <a href="#" id="loginerrormessage" class="accesshide">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                                    <div class="alert alert-danger" role="alert" data-aria-autofocus="true">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fc38b71bab296fb0efdd08834d72587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4aa56fb7ecc76d79a0b154c7c011b9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section944ae240c98192172b246ca2f4010abb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="rui-potentialidp w-100 mt-1">
                                            <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-outline-secondary mt-1 w-100">
                                                {{#iconurl}}
                                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                                {{/iconurl}}
                                                <span class="rui-potentialidp--name ml-3">{{name}}</span>
                                            </a>
                                        </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="rui-potentialidp w-100 mt-1">
';
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title=';
                $value = $context->find('quote');
                $buffer .= $this->section5fc38b71bab296fb0efdd08834d72587($context, $indent, $value);
                $buffer .= ' class="btn btn-outline-secondary mt-1 w-100">
';
                $value = $context->find('iconurl');
                $buffer .= $this->sectionC4aa56fb7ecc76d79a0b154c7c011b9d($context, $indent, $value);
                $buffer .= $indent . '                                                <span class="rui-potentialidp--name ml-3">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdb181c9eef08c0b23a93088fc450436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-potentialidplist mt-3 text-center">
                                    <p class="small text-center">{{#str}} potentialidps, auth {{/str}}</p>
                                    <div class="row no-gutters mt-1">
                                    {{#identityproviders}}
                                        <div class="rui-potentialidp w-100 mt-1">
                                            <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-outline-secondary mt-1 w-100">
                                                {{#iconurl}}
                                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                                {{/iconurl}}
                                                <span class="rui-potentialidp--name ml-3">{{name}}</span>
                                            </a>
                                        </div>
                                    {{/identityproviders}}
                                    </div>
                                    <hr class="hr-small" />
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-potentialidplist mt-3 text-center">
';
                $buffer .= $indent . '                                    <p class="small text-center">';
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                    <div class="row no-gutters mt-1">
';
                $value = $context->find('identityproviders');
                $buffer .= $this->section944ae240c98192172b246ca2f4010abb($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <hr class="hr-small" />
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a3025eec5644b47fdd31d5884abce2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#hasidentityproviders}}
                                <div class="rui-potentialidplist mt-3 text-center">
                                    <p class="small text-center">{{#str}} potentialidps, auth {{/str}}</p>
                                    <div class="row no-gutters mt-1">
                                    {{#identityproviders}}
                                        <div class="rui-potentialidp w-100 mt-1">
                                            <a href="{{url}}" title={{#quote}}{{name}}{{/quote}} class="btn btn-outline-secondary mt-1 w-100">
                                                {{#iconurl}}
                                                    <img src="{{iconurl}}" alt="" width="24" height="24"/>
                                                {{/iconurl}}
                                                <span class="rui-potentialidp--name ml-3">{{name}}</span>
                                            </a>
                                        </div>
                                    {{/identityproviders}}
                                    </div>
                                    <hr class="hr-small" />
                                </div>
                            {{/hasidentityproviders}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasidentityproviders');
                $buffer .= $this->sectionFdb181c9eef08c0b23a93088fc450436($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fa4afe6c92d43f86828cd626c68d3ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#str}} usernameemail {{/str}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                ';
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cfee3b9563446af7cf73b3dabe83fe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}usernameemail{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a2b2050243eb4dff6ce2b11212bbbcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^canloginbyemail}}{{#str}}username{{/str}}{{/canloginbyemail}}{{#canloginbyemail}}{{#str}}usernameemail{{/str}}{{/canloginbyemail}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section1cfee3b9563446af7cf73b3dabe83fe5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAde9318c94c2f3a55f9a22a57e193ad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rememberusername, admin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' rememberusername, admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC11aded977862a5bbc118b195e12b140(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="rui-rememberpass mt-1 text-right">
                                                <label class="custom-control ios-switch pr-0">
                                                    <input class="ios-switch-control-input form-check-input" type="checkbox" name="rememberusername" id="rememberusername" value="1" {{#username}}checked="checked"{{/username}} />
                                                    <span class="ios-switch-control-indicator"></span>
                                                    <label class="rui-rememberusername-text my-0" for="rememberusername">{{#str}} rememberusername, admin {{/str}}</label>
                                                </label>
                                            </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="rui-rememberpass mt-1 text-right">
';
                $buffer .= $indent . '                                                <label class="custom-control ios-switch pr-0">
';
                $buffer .= $indent . '                                                    <input class="ios-switch-control-input form-check-input" type="checkbox" name="rememberusername" id="rememberusername" value="1" ';
                $value = $context->find('username');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= ' />
';
                $buffer .= $indent . '                                                    <span class="ios-switch-control-indicator"></span>
';
                $buffer .= $indent . '                                                    <label class="rui-rememberusername-text my-0" for="rememberusername">';
                $value = $context->find('str');
                $buffer .= $this->sectionAde9318c94c2f3a55f9a22a57e193ad0($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                                                </label>
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e0c7d916e3932461ff09cf034c710f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}password{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa95a7e496f5307b40bee7262bd9321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotten';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'forgotten';
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

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ac00b104b24a60d05c247cefb271e04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-canloginasguest mt-2" title="{{#str}}someallowguest{{/str}}">
                                    <p class="small text-center">{{#str}}someallowguest{{/str}}</p>
                                    <form action="{{loginurl}}" method="post" id="guestlogin">
                                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                                        <input type="hidden" name="username" value="guest" />
                                        <input type="hidden" name="password" value="guest" />
                                        <button class="btn btn-sm btn-outline-secondary w-100" type="submit">{{#str}}loginguest{{/str}}</button>
                                    </form>
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-canloginasguest mt-2" title="';
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <p class="small text-center">';
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                    <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                        <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                                        <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                                        <button class="btn btn-sm btn-outline-secondary w-100" type="submit">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                                    </form>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e83e73b6a846640e7819305a86f8898(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^customsignupoutside}}
                            <div class="mt-3 text-center">
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
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <div class="mt-3 text-center">
';
                    $buffer .= $indent . '                                <form action="';
                    $value = $this->resolveValue($context->find('signupurl'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" method="get" id="signup">
';
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('stringca');
                    $buffer .= $this->section0e9ecf4a6aeb9951bc03c48d31a57cdf($context, $indent, $value);
                    $buffer .= ' <button type="submit" class="btn-link--clean">';
                    $value = $context->find('str');
                    $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                    $buffer .= '</button>
';
                    $buffer .= $indent . '                                </form>
';
                    $buffer .= $indent . '                            </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6f91d8a329e39df2167e3115bcce6c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p class="small">{{{stringca}}}</p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p class="small">';
                $value = $this->resolveValue($context->find('stringca'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c78e87195b48e3cf77d0be39b0004fd(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                <div class="rui-login-bottom-block">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('loginhtmlblockbottom'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2b736000af8c1b6c171725302da812e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-hasinstructions-desc alert alert-info">
                                    {{{instructions}}}
                                </div><!-- .rui-hasinstructions-desc -->
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-hasinstructions-desc alert alert-info">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div><!-- .rui-hasinstructions-desc -->
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section429f5813542c53298f6bde6def47aeb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-login-html-3">
                                    {{{loginhtmlcontent3}}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-login-html-3">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('loginhtmlcontent3'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ac4641b637b23cd58b8ba904a69a8e5(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                <div class="rui-login-footer-content text-center mb-2">
';
                $buffer .= $indent . '                                    <hr class="hr-small" />
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('loginfootercontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF10c2e2e695d6a6d7d7651b701c03955(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="rui-login-additional-content">
                            {{{loginhtmlcontent2}}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="rui-login-additional-content">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('loginhtmlcontent2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0197c01102faa002ef947e9a01bf0032(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="rui-login-bg-container" style="background-image: url(\'{{loginbg}}\');">
                        {{#loginhtmlcontent2}}
                            <div class="rui-login-additional-content">
                            {{{loginhtmlcontent2}}}
                            </div>
                        {{/loginhtmlcontent2}}
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="rui-login-bg-container" style="background-image: url(\'';
                $value = $this->resolveValue($context->find('loginbg'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');">
';
                $value = $context->find('loginhtmlcontent2');
                $buffer .= $this->sectionF10c2e2e695d6a6d7d7651b701c03955($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa190b48422a7a2a2be750ff314c319f(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7dd0a32e070997cd4a447ecaffac7c20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="rui-login-footer rui-login-footer-content">
                    {{{loginhtmlcontent3}}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="rui-login-footer rui-login-footer-content">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('loginhtmlcontent3'), $context);
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

    private function section63427a69a12256f4850639985299f025(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <div class="rui-login-footer text-center">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('loginfootercontent'), $context);
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

    private function section4850086520087183a238f69e455f8d03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-wrapper">
                {{#loginhtmlcontent3}}
                <div class="rui-login-footer rui-login-footer-content">
                    {{{loginhtmlcontent3}}}
                </div>
                {{/loginhtmlcontent3}}

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
                
                $buffer .= $indent . '            <div class="rui-login-wrapper">
';
                $value = $context->find('loginhtmlcontent3');
                $buffer .= $this->section7dd0a32e070997cd4a447ecaffac7c20($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('loginfootercontent');
                $buffer .= $this->section63427a69a12256f4850639985299f025($context, $indent, $value);
                $buffer .= $indent . '                
';
                $buffer .= $indent . '            </div>
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

    private function sectionA0f57f9988f6ef94f3119d4e15f5b78b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemaintenance, core_admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemaintenance, core_admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf90a67640f3d358c76a1b34b999c9b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-maintenance">
            <h2>{{#str}}sitemaintenance, core_admin{{/str}}</h2>
            <div class="rui-maintenance-desc">
                {{{maintenance}}}
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-maintenance">
';
                $buffer .= $indent . '            <h2>';
                $value = $context->find('str');
                $buffer .= $this->sectionA0f57f9988f6ef94f3119d4e15f5b78b($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '            <div class="rui-maintenance-desc">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('maintenance'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section691cc2f9954bba7bfc6c89b209875ecc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            var userNameField = document.getElementById(\'username\');
            if (userNameField.value.length == 0) {
                userNameField.focus();
            } else {
                document.getElementById(\'password\').focus();
            }
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            var userNameField = document.getElementById(\'username\');
';
                $buffer .= $indent . '            if (userNameField.value.length == 0) {
';
                $buffer .= $indent . '                userNameField.focus();
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                document.getElementById(\'password\').focus();
';
                $buffer .= $indent . '            }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb31e0a905855a4df03d13e2bbd239e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        document.getElementById(\'loginerrormessage\').focus();
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        document.getElementById(\'loginerrormessage\').focus();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a6eee035d80a0c1b39c0718cd5f551a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^error}}
        {{#autofocusform}}
            var userNameField = document.getElementById(\'username\');
            if (userNameField.value.length == 0) {
                userNameField.focus();
            } else {
                document.getElementById(\'password\').focus();
            }
        {{/autofocusform}}
    {{/error}}
    {{#error}}
        document.getElementById(\'loginerrormessage\').focus();
    {{/error}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('error');
                if (empty($value)) {
                    
                    $value = $context->find('autofocusform');
                    $buffer .= $this->section691cc2f9954bba7bfc6c89b209875ecc($context, $indent, $value);
                }
                $value = $context->find('error');
                $buffer .= $this->sectionEb31e0a905855a4df03d13e2bbd239e8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
