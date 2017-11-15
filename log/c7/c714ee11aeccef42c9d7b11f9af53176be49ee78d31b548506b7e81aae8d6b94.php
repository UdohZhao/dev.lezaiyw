<?php

/* footer_js.html */
class __TwigTemplate_4d6b837c26d65cb683cd3c722ca7901ccc29a4185ca67f8a69ce288b7868318a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <!-- 引入 jquery.validate.min.js -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>
    <script src=\"/public/jquery-weui-build/dist/js/jquery-weui.min.js\"></script>
    <script src='/public/jquery-weui-build/dist/js/swiper.js' charset='utf-8'></script>
    <script src='/public/jquery-weui-build/dist/lib/fastclick.js' charset='utf-8'></script>
    <script src='/public/jquery-weui-build/dist/js/city-picker.min.js' charset='utf-8'></script>
   
    <script type=\"text/javascript\">
         \$(function(){
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            speed: 1000,
            loop: true,
            observer:true,
            observeParents:true,
            autoplayDisableOnInteraction : false,
            autoplay:1500
        });
    })
        var swiper_nav = new Swiper('.swiper-container_nav');
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "footer_js.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <!-- 引入 jquery.validate.min.js -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>
    <script src=\"/public/jquery-weui-build/dist/js/jquery-weui.min.js\"></script>
    <script src='/public/jquery-weui-build/dist/js/swiper.js' charset='utf-8'></script>
    <script src='/public/jquery-weui-build/dist/lib/fastclick.js' charset='utf-8'></script>
    <script src='/public/jquery-weui-build/dist/js/city-picker.min.js' charset='utf-8'></script>
   
    <script type=\"text/javascript\">
         \$(function(){
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            speed: 1000,
            loop: true,
            observer:true,
            observeParents:true,
            autoplayDisableOnInteraction : false,
            autoplay:1500
        });
    })
        var swiper_nav = new Swiper('.swiper-container_nav');
    </script>
    ", "footer_js.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/wap/views/footer_js.html");
    }
}
