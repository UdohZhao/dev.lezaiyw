<?php

/* ucenter/ucenter.html */
class __TwigTemplate_976d6721bb3ee7a6db32ca7d8970c577ec5971f7bb1f09a538f24886cf0c0f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("header.html", "ucenter/ucenter.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('css', $context, $blocks);
        // line 6
        echo "
<div class=\"row myMsg\">
\t<div class=\"col-xs-1\"></div>
\t<div class=\"col-xs-11 \">
\t\t<h4>个人资料</h4>
\t</div>
</div>\t

<div class=\"container\">
\t<form action=\"javascript:;\" class=\"form\">
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__bd\"><label class=\"weui-label\">头像</label></div>
\t\t    <div class=\"weui-cell__ft\">
\t\t      <div class=\"weui-cell__ft avatarImg\">
\t\t\t      <div id=\"preview0\">
\t\t\t            \t<img id=\"imghead0\" src=\"/apps/wap/views/index/img/avatar.png\" class=\"img-responsive breviary-img\" onclick=\"\$('#previewImg0').click();\" alt=\"点击上传图像\" title=\"点击上传头像\" >
\t\t\t        </div>
\t\t\t        <form id=\"idcardForm\" action=\"/certificationInfo/add\" method=\"post\" enctype=\"multipart/form-data\">
\t            \t<input type=\"file\" id=\"previewImg0\" name=\"front_path\" class=\"cover-file\" onchange=\"previewImage(this,'preview0','imghead0','previewImg0')\" accept=\"image/*\">
\t          \t\t</form>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__hd\"><label class=\"weui-label\">昵称</label></div>
\t\t    <div class=\"weui-cell__bd\">
\t\t      <input type=\"\" name=\"\" class=\"weui-input\" placeholder=\"请输入昵称\">
\t\t    </div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__hd\"><label class=\"weui-label\">QQ</label></div>
\t\t    <div class=\"weui-cell__bd\">
\t\t      <input type=\"\" name=\"\" class=\"weui-input\" placeholder=\"请输入QQ\">
\t\t    </div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__hd\"><label class=\"weui-label\">手机</label></div>
\t\t    <div class=\"weui-cell__bd\">
\t\t      <input type=\"\" name=\"\" class=\"weui-input\" placeholder=\"请输入手机号码\">
\t\t    </div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t\t<button class=\"weui-btn weui-btn_primary\">提交</button>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t\t<a href=\"javascript:history.go(-1)\">返回上一页</a>
\t\t</div>
\t</form>
</div>\t


";
        // line 57
        $this->loadTemplate("footer_js.html", "ucenter/ucenter.html", 57)->display($context);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('js', $context, $blocks);
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"/apps/wap/views/ucenter/css/ucenter.css\">
";
    }

    // line 59
    public function block_js($context, array $blocks = array())
    {
        // line 60
        echo "
 <script src=\"/apps/wap/views/ucenter/js/ucenter_s.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "ucenter/ucenter.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 60,  98 => 59,  93 => 4,  90 => 3,  86 => 59,  83 => 58,  81 => 57,  28 => 6,  26 => 3,  23 => 2,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.html' %}

{% block css %}
<link rel=\"stylesheet\" href=\"/apps/wap/views/ucenter/css/ucenter.css\">
{% endblock %}

<div class=\"row myMsg\">
\t<div class=\"col-xs-1\"></div>
\t<div class=\"col-xs-11 \">
\t\t<h4>个人资料</h4>
\t</div>
</div>\t

<div class=\"container\">
\t<form action=\"javascript:;\" class=\"form\">
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__bd\"><label class=\"weui-label\">头像</label></div>
\t\t    <div class=\"weui-cell__ft\">
\t\t      <div class=\"weui-cell__ft avatarImg\">
\t\t\t      <div id=\"preview0\">
\t\t\t            \t<img id=\"imghead0\" src=\"/apps/wap/views/index/img/avatar.png\" class=\"img-responsive breviary-img\" onclick=\"\$('#previewImg0').click();\" alt=\"点击上传图像\" title=\"点击上传头像\" >
\t\t\t        </div>
\t\t\t        <form id=\"idcardForm\" action=\"/certificationInfo/add\" method=\"post\" enctype=\"multipart/form-data\">
\t            \t<input type=\"file\" id=\"previewImg0\" name=\"front_path\" class=\"cover-file\" onchange=\"previewImage(this,'preview0','imghead0','previewImg0')\" accept=\"image/*\">
\t          \t\t</form>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__hd\"><label class=\"weui-label\">昵称</label></div>
\t\t    <div class=\"weui-cell__bd\">
\t\t      <input type=\"\" name=\"\" class=\"weui-input\" placeholder=\"请输入昵称\">
\t\t    </div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__hd\"><label class=\"weui-label\">QQ</label></div>
\t\t    <div class=\"weui-cell__bd\">
\t\t      <input type=\"\" name=\"\" class=\"weui-input\" placeholder=\"请输入QQ\">
\t\t    </div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t    <div class=\"weui-cell__hd\"><label class=\"weui-label\">手机</label></div>
\t\t    <div class=\"weui-cell__bd\">
\t\t      <input type=\"\" name=\"\" class=\"weui-input\" placeholder=\"请输入手机号码\">
\t\t    </div>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t\t<button class=\"weui-btn weui-btn_primary\">提交</button>
\t\t</div>
\t\t<div class=\"weui-cell\">
\t\t\t<a href=\"javascript:history.go(-1)\">返回上一页</a>
\t\t</div>
\t</form>
</div>\t


{% include 'footer_js.html' %}

{% block js %}

 <script src=\"/apps/wap/views/ucenter/js/ucenter_s.js\"></script>

{% endblock %}", "ucenter/ucenter.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/wap/views/ucenter/ucenter.html");
    }
}
