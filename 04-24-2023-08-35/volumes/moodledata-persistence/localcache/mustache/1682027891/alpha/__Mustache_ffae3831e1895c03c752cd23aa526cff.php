<?php

class __Mustache_ffae3831e1895c03c752cd23aa526cff extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_alpha/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="container-fluid drawers ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section2f9abbbc7cfc8a578df65e02c2f006ff($context, $indent, $value);
        $buffer .= ' drag-container">
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <div id="topofscroll" class="main-inner">
';
        $buffer .= $indent . '            <div id="page-content" class="page-content wrapper-page">
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/navbar-secondary')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.breadcrumbs'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('coursepageinformationbanners'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div id="region-main-box" class="region-main-wrapper">
';
        $buffer .= $indent . '                    <section id="region-main" class="region-main-content ';
        $value = $context->find('hasblocks');
        $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <div class="rui-blocks-wrapper">
';
        $buffer .= $indent . '                            <div class="wrapper-course">
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.simple_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '    
';
        $buffer .= $indent . '
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionBf0818eee6c3fb77fa31c60b8439b559($context, $indent, $value);
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </div>
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/hasblocks-tmpl')) {
            $buffer .= $partial->renderInternal($context, $indent . '                            ');
        }
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_alpha/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        
';
        $buffer .= $indent . '    </div>       
';
        $buffer .= $indent . '
';
        $value = $context->find('hiddensidebar');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('theme_alpha/nav-drawer')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section09daaf8e33769cc14188cc2d52971dd8($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'if(document.getElementsByTagName("body")[0].id.match(/page-admin-setting-themesettingalpha/)) {
';
        $buffer .= $indent . '    for (let i = 1; i <= 23; i++) {
';
        $buffer .= $indent . '        var tempID = \'id_s_theme_alpha_displayblock\' + i; // Checkboxes
';
        $buffer .= $indent . '        var tempItemID = \'[data-settings-name="theme_alpha_block\' + i +\'"]\'; // Navigation items
';
        $buffer .= $indent . '        var tempFCBID = \'admin-block\' + i; // Content Builder Items
';
        $buffer .= $indent . '        var checkBox = document.getElementById(tempID);
';
        $buffer .= $indent . '        var navItem = document.querySelector(tempItemID);
';
        $buffer .= $indent . '        var fcbItem = document.getElementById(tempFCBID);
';
        $buffer .= $indent . '        if (checkBox.checked == true){
';
        $buffer .= $indent . '            navItem.classList.add("rui--turnedon");
';
        $buffer .= $indent . '            fcbItem.classList.add("rui--turnedon");
';
        $buffer .= $indent . '        } else {
';
        $buffer .= $indent . '            navItem.style.opacity = "0.3";
';
        $buffer .= $indent . '            fcbItem.style.opacity = "0.3";;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section428c43aa9fbd99ee7f8c69add836fcb6($context, $indent, $value);

        return $buffer;
    }

    private function section2f9abbbc7cfc8a578df65e02c2f006ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-hidden-drawer';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-hidden-drawer';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf0818eee6c3fb77fa31c60b8439b559(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="region_main_settings_menu_proxy"></div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09daaf8e33769cc14188cc2d52971dd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    $(document).ready(function(){
        $("#page-admin-setting-themesettingalpha .tab-pane .rui-setting-heading-wrapper").nextUntil("#page-admin-setting-themesettingalpha .tab-pane .rui-setting-heading-wrapper").addClass("hidden");
    });
    $("#page-admin-setting-themesettingalpha .tab-pane .rui-setting-heading-wrapper").click(function() {
        $(this).nextUntil("#page-admin-setting-themesettingalpha .rui-setting-heading-wrapper").toggleClass("hidden");
        $(this).toggleClass("active");
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    $(document).ready(function(){
';
                $buffer .= $indent . '        $("#page-admin-setting-themesettingalpha .tab-pane .rui-setting-heading-wrapper").nextUntil("#page-admin-setting-themesettingalpha .tab-pane .rui-setting-heading-wrapper").addClass("hidden");
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $("#page-admin-setting-themesettingalpha .tab-pane .rui-setting-heading-wrapper").click(function() {
';
                $buffer .= $indent . '        $(this).nextUntil("#page-admin-setting-themesettingalpha .rui-setting-heading-wrapper").toggleClass("hidden");
';
                $buffer .= $indent . '        $(this).toggleClass("active");
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section428c43aa9fbd99ee7f8c69add836fcb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_alpha/loader\');
require([\'theme_alpha/loader\', \'theme_alpha/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_alpha/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_alpha/loader\');
';
                $buffer .= $indent . 'require([\'theme_alpha/loader\', \'theme_alpha/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_alpha/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
