<?php

/* footer.html */
class __TwigTemplate_93850764d0ab24b0613372e59082c28b8d8cefcb050e2d9c5d1ef00176ebf40f extends Twig_Template
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
        echo "

<!-- 固定底部 -->
  <div class=\"weui-tabbar\">
    <a href=\"/wap\" class=\"weui-tabbar__item weui-bar__item--on\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_1\"></i>
      </div>
      <p class=\"weui-tabbar__label\">首页</p>
    </a>
    <a href=\"/wap/indent/index\" class=\"weui-tabbar__item\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_2\"></i>
      </div>
      <p class=\"weui-tabbar__label\">订单</p>
    </a>
    <a href=\"/wap/pay/pay\" class=\"weui-tabbar__item\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_3\"></i>
      </div>
      <p class=\"weui-tabbar__label\">充值</p>
    </a>
    <a href=\"/wap/ucenter/index\" class=\"weui-tabbar__item\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_4\"></i>
      </div>
      <p class=\"weui-tabbar__label\">我的</p>
    </a>
  </div>
</div>

  <div style=\"width:100%;height: 50px;\"></div>

";
        // line 34
        $this->loadTemplate("footer_js.html", "footer.html", 34)->display($context);
        // line 35
        echo "</head>
<body>";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 35,  54 => 34,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!-- 固定底部 -->
  <div class=\"weui-tabbar\">
    <a href=\"/wap\" class=\"weui-tabbar__item weui-bar__item--on\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_1\"></i>
      </div>
      <p class=\"weui-tabbar__label\">首页</p>
    </a>
    <a href=\"/wap/indent/index\" class=\"weui-tabbar__item\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_2\"></i>
      </div>
      <p class=\"weui-tabbar__label\">订单</p>
    </a>
    <a href=\"/wap/pay/pay\" class=\"weui-tabbar__item\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_3\"></i>
      </div>
      <p class=\"weui-tabbar__label\">充值</p>
    </a>
    <a href=\"/wap/ucenter/index\" class=\"weui-tabbar__item\">
      <div class=\"weui-tabbar__icon\">
        <i class=\"footer_icon footer_icon_4\"></i>
      </div>
      <p class=\"weui-tabbar__label\">我的</p>
    </a>
  </div>
</div>

  <div style=\"width:100%;height: 50px;\"></div>

{% include 'footer_js.html' %}
</head>
<body>", "footer.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/wap/views/footer.html");
    }
}
