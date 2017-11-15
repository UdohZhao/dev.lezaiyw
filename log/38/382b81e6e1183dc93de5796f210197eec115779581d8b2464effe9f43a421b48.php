<?php

/* ucenter/index.html */
class __TwigTemplate_b7ec687249f6d27e6fad29cdf3a03cffaecac7b7ef3af3071c06b3083f604cad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("header.html", "ucenter/index.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('css', $context, $blocks);
        // line 6
        echo "

  \t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/ucenter\">
\t  \t<div class=\"weui-cell__hd\"><img src=\"/apps/wap/views/index/img/avatar.png\"></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>长伴左手</p>
\t      <p class=\"uid\" >UID:1067796</p>
\t    </div>
\t    <div class=\"weui-cell__ft\">
\t    </div>
\t  </a>
  \t</div>
 \t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/record\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>交易记录</p>
\t    </div>
\t  </a>
\t</div>
\t<div class=\"ywGlod\">
\t  <div class=\"ywGlod_left \">
\t  \t<p>0.00</p>
\t  \t<p>约玩币</p>
\t  </div>
\t  <div class=\"separator\"></div>
\t  <div class=\"ywGlod_right\">
\t  \t<p>0</p>
\t  \t<p>约玩值</p>
\t  </div>
\t</div>
\t<!-- 会员中心 / 设置 -->
\t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/realname\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i class=\"icon_3\"></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>实名认证</p>
\t    </div>
\t    <div class=\"weui-cell__ft\"></div>
\t  </a>
\t</div>
\t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/application\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i class=\"icon_4\"></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>申请入驻</p>
\t    </div>
\t    <div class=\"weui-cell__ft\"></div>
\t  </a>
\t</div>
\t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=88888888&site=qq&menu=yes\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i class=\"icon_5\"></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>联系客服</p>
\t    </div>
\t    <div class=\"weui-cell__ft\"></div>
\t  </a>
\t</div>
";
        // line 66
        $this->loadTemplate("footer.html", "ucenter/index.html", 66)->display($context);
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"/apps/wap/views/ucenter/css/ucenter.css\">
";
    }

    public function getTemplateName()
    {
        return "ucenter/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 4,  93 => 3,  89 => 66,  27 => 6,  25 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.html' %}

{% block css %}
<link rel=\"stylesheet\" href=\"/apps/wap/views/ucenter/css/ucenter.css\">
{% endblock %}


  \t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/ucenter\">
\t  \t<div class=\"weui-cell__hd\"><img src=\"/apps/wap/views/index/img/avatar.png\"></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>长伴左手</p>
\t      <p class=\"uid\" >UID:1067796</p>
\t    </div>
\t    <div class=\"weui-cell__ft\">
\t    </div>
\t  </a>
  \t</div>
 \t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/record\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>交易记录</p>
\t    </div>
\t  </a>
\t</div>
\t<div class=\"ywGlod\">
\t  <div class=\"ywGlod_left \">
\t  \t<p>0.00</p>
\t  \t<p>约玩币</p>
\t  </div>
\t  <div class=\"separator\"></div>
\t  <div class=\"ywGlod_right\">
\t  \t<p>0</p>
\t  \t<p>约玩值</p>
\t  </div>
\t</div>
\t<!-- 会员中心 / 设置 -->
\t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/realname\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i class=\"icon_3\"></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>实名认证</p>
\t    </div>
\t    <div class=\"weui-cell__ft\"></div>
\t  </a>
\t</div>
\t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" href=\"/wap/ucenter/application\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i class=\"icon_4\"></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>申请入驻</p>
\t    </div>
\t    <div class=\"weui-cell__ft\"></div>
\t  </a>
\t</div>
\t<div class=\"weui-cells\">
\t  <a class=\"weui-cell weui-cell_access\" target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=88888888&site=qq&menu=yes\">
\t  \t<div class=\"weui-cell__hd mg_money\"><i class=\"icon_5\"></i></div>
\t    <div class=\"weui-cell__bd\">
\t      <p>联系客服</p>
\t    </div>
\t    <div class=\"weui-cell__ft\"></div>
\t  </a>
\t</div>
{% include 'footer.html' %}", "ucenter/index.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/wap/views/ucenter/index.html");
    }
}
