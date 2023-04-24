<?php

class __Mustache_fa2e912bce26ccec5c21736c1e333a6a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<nav id="topBar" class="rui-topbar-wrapper moodle-has-zindex">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="rui-topbar wrapper-page ';
        $value = $context->findDot('output.custom_menu');
        $buffer .= $this->section010aa6f4e08815ab4a342e2589c47bc0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="topbarLeft" class="d-inline-flex align-items-center">
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '            <div class="d-inline-flex align-items-center">   
';
        $buffer .= $indent . '
';
        $value = $context->find('topbarlogoareaon');
        $buffer .= $this->sectionF01ddc0b983d257b7108e9a72a8d926e($context, $indent, $value);
        $buffer .= $indent . '                
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('hiddensidebar');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="rui-drawer-toggle ';
            $value = $context->find('topbarlogoareaon');
            $buffer .= $this->section800cd270198402686f2753eb4a5ba186($context, $indent, $value);
            $buffer .= '" data-region="drawer-toggle">
';
            $buffer .= $indent . '                    <button id="mainNav" class="rui-topbar-btn nav-drawer-btn" aria-expanded="';
            $value = $context->find('navdraweropen');
            $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
            $value = $context->find('navdraweropen');
            if (empty($value)) {
                
                $buffer .= 'false';
            }
            $buffer .= '" aria-controls="nav-drawer" type="button" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
';
            $buffer .= $indent . '                        <svg class="nav-drawer-btn--opened" width="18" height="18" fill="none" viewBox="0 0 24 24">
';
            $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
';
            $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19.25 12H5"></path>
';
            $buffer .= $indent . '                        </svg>
';
            $buffer .= $indent . '                        <svg class="nav-drawer-btn--closed" width="18" height="18" fill="none" viewBox="0 0 24 24">
';
            $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.75 7.75H19.25"></path>
';
            $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.75 14.75H19.25"></path>
';
            $buffer .= $indent . '                        </svg>
';
            $buffer .= $indent . '                    </button>
';
            $buffer .= $indent . '                </div>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->findDot('output.custom_menu');
        $buffer .= $this->section8c827be5fa54a657aa0465d293985af1($context, $indent, $value);
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        ';
        $value = $context->find('topbarcustomhtml');
        $buffer .= $this->section73b1ce855110fcf7781584cb6d9e243b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <ul class="rui-icon-menu rui-icon-menu--right ';
        $value = $context->find('topbarcustomhtml');
        if (empty($value)) {
            
            $buffer .= 'ml-auto';
        }
        $buffer .= '">
';
        $value = $context->find('hiddensidebar');
        $buffer .= $this->section304d75b2869532e070e963d03b998c6e($context, $indent, $value);
        $buffer .= '  
';
        $buffer .= $indent . '            <li>';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</li>
';
        $buffer .= $indent . '            <li class="rui-icon-menu-user m-0">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </li>        
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $context->find('hiddensidebar');
        $buffer .= $this->section7aee81b9d74e0967e16ea922f7f35e37($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>';

        return $buffer;
    }

    private function section010aa6f4e08815ab4a342e2589c47bc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-topbar--custom-menu';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-topbar--custom-menu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78809003afd3b387d5b09e8f52115182(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-navbar-brand--img';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-navbar-brand--img';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f02bdab39bdb326c592eb1133254d23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dark-mode-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dark-mode-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20ae68585704871e7ab3a11e79efeebc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{customdmlogo}}" class="rui-custom-dmlogo ml-2" alt="{{sitename}}" />';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('customdmlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-custom-dmlogo ml-2" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7204ad84bc492c8ef0e995995e84cfee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="rui-logo {{#customdmlogo}}dark-mode-logo{{/customdmlogo}}">
                            <img src="{{customlogo}}" class="rui-custom-logo ml-2" alt="{{sitename}}" />
                            {{#customdmlogo}}<img src="{{customdmlogo}}" class="rui-custom-dmlogo ml-2" alt="{{sitename}}" />{{/customdmlogo}}
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="rui-logo ';
                $value = $context->find('customdmlogo');
                $buffer .= $this->section9f02bdab39bdb326c592eb1133254d23($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <img src="';
                $value = $this->resolveValue($context->find('customlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-custom-logo ml-2" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" />
';
                $buffer .= $indent . '                            ';
                $value = $context->find('customdmlogo');
                $buffer .= $this->section20ae68585704871e7ab3a11e79efeebc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF01ddc0b983d257b7108e9a72a8d926e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a id="logo" href="{{{ config.wwwroot }}}" class="d-sm-none d-md-inline-flex rui-navbar-brand {{#customlogo}}rui-navbar-brand--img{{/customlogo}} aabtn {{# output.should_display_navbar_logo }}has-logo{{/ output.should_display_navbar_logo }}">
                    {{#customlogo}}
                        <span class="rui-logo {{#customdmlogo}}dark-mode-logo{{/customdmlogo}}">
                            <img src="{{customlogo}}" class="rui-custom-logo ml-2" alt="{{sitename}}" />
                            {{#customdmlogo}}<img src="{{customdmlogo}}" class="rui-custom-dmlogo ml-2" alt="{{sitename}}" />{{/customdmlogo}}
                        </span>
                    {{/customlogo}}

                    {{^customlogo}}
                    <span class="site-name">
                        {{^ customlogotxt }}{{{ sitename }}}{{/ customlogotxt }}
                        {{{ customlogotxt }}}
                    </span>
                    {{/customlogo}}
                </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a id="logo" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="d-sm-none d-md-inline-flex rui-navbar-brand ';
                $value = $context->find('customlogo');
                $buffer .= $this->section78809003afd3b387d5b09e8f52115182($context, $indent, $value);
                $buffer .= ' aabtn ';
                $value = $context->findDot('output.should_display_navbar_logo');
                $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('customlogo');
                $buffer .= $this->section7204ad84bc492c8ef0e995995e84cfee($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('customlogo');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <span class="site-name">
';
                    $buffer .= $indent . '                        ';
                    $value = $context->find('customlogotxt');
                    if (empty($value)) {
                        
                        $value = $this->resolveValue($context->find('sitename'), $context);
                        $buffer .= ($value === null ? '' : $value);
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                        ';
                    $value = $this->resolveValue($context->find('customlogotxt'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    </span>
';
                }
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section800cd270198402686f2753eb4a5ba186(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-navbar-nav--sep ml-md-2 pl-md-2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-navbar-nav--sep ml-md-2 pl-md-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8d02550eef8dd78cfe22b730ceb5426(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tablist';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tablist';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC225dbeabea012d1739058de23648ffe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tab';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tab';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c6563651a74cecb20df7d24915a8244(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            require([\'core/moremenu\'], function(moremenu) {
                moremenu(document.querySelector(\'#moremenu-topbar\'));
            });
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            require([\'core/moremenu\'], function(moremenu) {
';
                $buffer .= $indent . '                moremenu(document.querySelector(\'#moremenu-topbar\'));
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c827be5fa54a657aa0465d293985af1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <nav class="moremenu navigation">
            <ul id="moremenu-topbar" role="{{#istablist}}tablist{{/istablist}}{{^istablist}}menubar{{/istablist}}" class="nav more-nav">
                {{{.}}}
                <li role="none" class="dropdown dropdownmoremenu morebutton d-none" data-region="morebutton">
                    <a class="btn btn-icon btn--more {{#isactive}}active{{/isactive}}" href="#" id="moremenu-dropdown-topbar" role="{{#istablist}}tab{{/istablist}}{{^istablist}}menuitem{{/istablist}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z"></path>
                            <path fill="currentColor" d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"></path>
                            <path fill="currentColor" d="M13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16Z"></path>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-topbar" role="menu">
                    </ul>
                </li>
            </ul>
        </nav>
        {{#js}}
            require([\'core/moremenu\'], function(moremenu) {
                moremenu(document.querySelector(\'#moremenu-topbar\'));
            });
        {{/js}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <nav class="moremenu navigation">
';
                $buffer .= $indent . '            <ul id="moremenu-topbar" role="';
                $value = $context->find('istablist');
                $buffer .= $this->sectionE8d02550eef8dd78cfe22b730ceb5426($context, $indent, $value);
                $value = $context->find('istablist');
                if (empty($value)) {
                    
                    $buffer .= 'menubar';
                }
                $buffer .= '" class="nav more-nav">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <li role="none" class="dropdown dropdownmoremenu morebutton d-none" data-region="morebutton">
';
                $buffer .= $indent . '                    <a class="btn btn-icon btn--more ';
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="#" id="moremenu-dropdown-topbar" role="';
                $value = $context->find('istablist');
                $buffer .= $this->sectionC225dbeabea012d1739058de23648ffe($context, $indent, $value);
                $value = $context->find('istablist');
                if (empty($value)) {
                    
                    $buffer .= 'menuitem';
                }
                $buffer .= '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
';
                $buffer .= $indent . '                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                            <path fill="currentColor" d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z"></path>
';
                $buffer .= $indent . '                            <path fill="currentColor" d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"></path>
';
                $buffer .= $indent . '                            <path fill="currentColor" d="M13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16Z"></path>
';
                $buffer .= $indent . '                        </svg>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-topbar" role="menu">
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </nav>
';
                $value = $context->find('js');
                $buffer .= $this->section3c6563651a74cecb20df7d24915a8244($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73b1ce855110fcf7781584cb6d9e243b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="rui-topbar-customfield ml-auto d-none d-md-flex">{{{.}}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="rui-topbar-customfield ml-auto d-none d-md-flex">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section304d75b2869532e070e963d03b998c6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>{{{ output.render_lang_menu }}}</li>
            <li class="rui-icon-menu-admin ml-2">{{{output.adminheaderlinkhs}}}</li>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li>';
                $value = $this->resolveValue($context->findDot('output.render_lang_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $buffer .= $indent . '            <li class="rui-icon-menu-admin ml-2">';
                $value = $this->resolveValue($context->findDot('output.adminheaderlinkhs'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7aee81b9d74e0967e16ea922f7f35e37(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{ output.edit_switch }}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
