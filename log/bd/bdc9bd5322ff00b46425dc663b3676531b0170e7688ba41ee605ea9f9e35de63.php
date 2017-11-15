<?php

/* index/index.html */
class __TwigTemplate_70cceff6e8a232a2de9232655bd62038cddbb578d280bb53e8b1fbcbed3f3ced extends Twig_Template
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
        $this->loadTemplate("header.html", "index/index.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('css', $context, $blocks);
        // line 6
        echo "
<!-- banner start -->
  <div class=\" banner-box\">
    <div class=\"container\">
       <div class=\"swiper-container \" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\">
        <div class=\"swiper-wrapper swiper-b-h\">
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "bData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 13
            echo "            <div class=\"swiper-slide\"><img class=\"swiper-b-img\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "path", array()), "html", null, true);
            echo "\"></div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- search start -->
  <!-- <div class=\"input-group col-md-3 indexSearch\">
      <i></i>
      <input type=\"text\" class=\"form-control\" placeholder=\"搜索昵称\" / >
 </div> -->
  <!-- search end -->

  <!-- nav start -->
  <!-- 容器 -->
<div class=\"weui-tab index_back\">
  <div class=\"weui-navbar\">
    <a class=\"weui-navbar__item weui-bar__item--on\" href=\"#tab1\">
      线上游戏
    </a>
    <a class=\"weui-navbar__item\" href=\"#tab2\">
      线上娱乐
    </a>
    <a class=\"weui-navbar__item\" href=\"#tab3\">
      线下娱乐
    </a>
  </div>
  <div class=\"weui-tab__bd \">
    <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
      <div class=\"weui-grids\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "scData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 47
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 0)) {
                // line 48
                echo "        <a href=\"/wap/index/item/scid/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "icon_path", array()), "html", null, true);
                echo "\">
          </div>
          <p class=\"weui-grid__label\">
            ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "
          </p>
        </a>
        ";
            }
            // line 57
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "      </div>
    </div>
    <div id=\"tab2\" class=\"weui-tab__bd-item\">
      <div class=\"weui-grids\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "scData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 63
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1)) {
                // line 64
                echo "        <a href=\"/wap/index/item/scid/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "icon_path", array()), "html", null, true);
                echo "\">
          </div>
          <p class=\"weui-grid__label\">
            ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "
          </p>
        </a>
        ";
            }
            // line 73
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "      </div>
    </div>
    <div id=\"tab3\" class=\"weui-tab__bd-item\">
      <div class=\"weui-grids\">
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "scData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 79
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 2)) {
                // line 80
                echo "        <a href=\"/wap/index/item/scid/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "icon_path", array()), "html", null, true);
                echo "\">
          </div>
          <p class=\"weui-grid__label\">
            ";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "
          </p>
        </a>
        ";
            }
            // line 89
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "      </div>
  </div>
</div>
</div>
<!-- nav end -->

<!-- 主体内容 -->
<!-- 热门推荐 -->
<div class=\"oneBox\">
<div class=\"container index_container\">
  <h4 style=\"position: relative;\">热门推荐<!-- <a href=\"javascript:;\" class=\"more lt\">+MORE</a> --></h4>
  <div class=\"oneBox\">
    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "sData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 103
            echo "    <div class=\"oneBox_list\">
      <a href=\"/wap/meet/index/uid/";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uid", array()), "html", null, true);
            echo "/scid/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "scid", array()), "html", null, true);
            echo "/sid/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
            echo "\">
          <div class=\"list\">
            <img class=\"cover-img\" src=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cover_path", array()), "html", null, true);
            echo "\">
          </div>
          <div class=\"label label1\">
            ";
            // line 109
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "istatus", array()) == 1)) {
                // line 110
                echo "              真人认证
            ";
            }
            // line 112
            echo "          </div>
          <div class=\"label2 label1\">
            ";
            // line 114
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "status", array()) == 0)) {
                echo "离线";
            }
            // line 115
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "status", array()) == 1)) {
                echo "在线";
            }
            // line 116
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "status", array()) == 2)) {
                echo "冻结";
            }
            // line 117
            echo "          </div>
          <p class=\"u-nickname\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "nickname", array()), "html", null, true);
            echo "</p>
          <p class=\"userName\" >￥<span >";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "price", array()), "html", null, true);
            echo "</span>元/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "units", array()), "html", null, true);
            echo "</p>
      </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "  </div>
</div>
";
        // line 125
        $this->loadTemplate("footer.html", "index/index.html", 125)->display($context);
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"/apps/wap/views/index/css/indexTow.css\">
";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 4,  276 => 3,  272 => 125,  268 => 123,  256 => 119,  252 => 118,  249 => 117,  244 => 116,  239 => 115,  235 => 114,  231 => 112,  227 => 110,  225 => 109,  219 => 106,  210 => 104,  207 => 103,  203 => 102,  189 => 90,  183 => 89,  176 => 85,  170 => 82,  164 => 80,  161 => 79,  157 => 78,  151 => 74,  145 => 73,  138 => 69,  132 => 66,  126 => 64,  123 => 63,  119 => 62,  113 => 58,  107 => 57,  100 => 53,  94 => 50,  88 => 48,  85 => 47,  81 => 46,  48 => 15,  39 => 13,  35 => 12,  27 => 6,  25 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.html' %}

{% block css %}
<link rel=\"stylesheet\" href=\"/apps/wap/views/index/css/indexTow.css\">
{% endblock %}

<!-- banner start -->
  <div class=\" banner-box\">
    <div class=\"container\">
       <div class=\"swiper-container \" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\">
        <div class=\"swiper-wrapper swiper-b-h\">
          {% for k,v in data.bData %}
            <div class=\"swiper-slide\"><img class=\"swiper-b-img\" src=\"{{v.path}}\"></div>
          {% endfor %}
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- search start -->
  <!-- <div class=\"input-group col-md-3 indexSearch\">
      <i></i>
      <input type=\"text\" class=\"form-control\" placeholder=\"搜索昵称\" / >
 </div> -->
  <!-- search end -->

  <!-- nav start -->
  <!-- 容器 -->
<div class=\"weui-tab index_back\">
  <div class=\"weui-navbar\">
    <a class=\"weui-navbar__item weui-bar__item--on\" href=\"#tab1\">
      线上游戏
    </a>
    <a class=\"weui-navbar__item\" href=\"#tab2\">
      线上娱乐
    </a>
    <a class=\"weui-navbar__item\" href=\"#tab3\">
      线下娱乐
    </a>
  </div>
  <div class=\"weui-tab__bd \">
    <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
      <div class=\"weui-grids\">
        {% for k,v in data.scData %}
        {% if v.type == 0 %}
        <a href=\"/wap/index/item/scid/{{v.id}}\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"{{v.icon_path}}\">
          </div>
          <p class=\"weui-grid__label\">
            {{v.cname}}
          </p>
        </a>
        {% endif %}
        {% endfor %}
      </div>
    </div>
    <div id=\"tab2\" class=\"weui-tab__bd-item\">
      <div class=\"weui-grids\">
        {% for k,v in data.scData %}
        {% if v.type == 1 %}
        <a href=\"/wap/index/item/scid/{{v.id}}\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"{{v.icon_path}}\">
          </div>
          <p class=\"weui-grid__label\">
            {{v.cname}}
          </p>
        </a>
        {% endif %}
        {% endfor %}
      </div>
    </div>
    <div id=\"tab3\" class=\"weui-tab__bd-item\">
      <div class=\"weui-grids\">
        {% for k,v in data.scData %}
        {% if v.type == 2 %}
        <a href=\"/wap/index/item/scid/{{v.id}}\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"{{v.icon_path}}\">
          </div>
          <p class=\"weui-grid__label\">
            {{v.cname}}
          </p>
        </a>
        {% endif %}
        {% endfor %}
      </div>
  </div>
</div>
</div>
<!-- nav end -->

<!-- 主体内容 -->
<!-- 热门推荐 -->
<div class=\"oneBox\">
<div class=\"container index_container\">
  <h4 style=\"position: relative;\">热门推荐<!-- <a href=\"javascript:;\" class=\"more lt\">+MORE</a> --></h4>
  <div class=\"oneBox\">
    {% for k,v in data.sData %}
    <div class=\"oneBox_list\">
      <a href=\"/wap/meet/index/uid/{{v.uid}}/scid/{{v.scid}}/sid/{{v.id}}\">
          <div class=\"list\">
            <img class=\"cover-img\" src=\"{{v.cover_path}}\">
          </div>
          <div class=\"label label1\">
            {% if v.uData.istatus == 1 %}
              真人认证
            {% endif %}
          </div>
          <div class=\"label2 label1\">
            {% if v.uData.status == 0 %}离线{% endif %}
            {% if v.uData.status == 1 %}在线{% endif %}
            {% if v.uData.status == 2 %}冻结{% endif %}
          </div>
          <p class=\"u-nickname\">{{v.uData.nickname}}</p>
          <p class=\"userName\" >￥<span >{{v.price}}</span>元/{{v.units}}</p>
      </a>
    </div>
    {% endfor %}
  </div>
</div>
{% include 'footer.html' %}", "index/index.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/wap/views/index/index.html");
    }
}
