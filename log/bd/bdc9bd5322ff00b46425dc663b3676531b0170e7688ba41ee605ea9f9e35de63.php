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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "bData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 14
            echo "            <div class=\"swiper-slide\"><img class=\"swiper-b-img\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "path", array()), "html", null, true);
            echo "\"></div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "scData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 48
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 0)) {
                // line 49
                echo "        <a href=\"/wap/index/item/scid/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "icon_path", array()), "html", null, true);
                echo "\">
          </div>
          <p class=\"weui-grid__label\">
            ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "
          </p>
        </a>
        ";
            }
            // line 58
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      </div>
    </div>
    <div id=\"tab2\" class=\"weui-tab__bd-item\">
      <div class=\"weui-grids\">
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "scData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 64
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1)) {
                // line 65
                echo "        <a href=\"/wap/index/item/scid/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "icon_path", array()), "html", null, true);
                echo "\">
          </div>
          <p class=\"weui-grid__label\">
            ";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "
          </p>
        </a>
        ";
            }
            // line 74
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </div>
    </div>
    <div id=\"tab3\" class=\"weui-tab__bd-item\">
      <div class=\"weui-grids\">
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "scData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 80
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 2)) {
                // line 81
                echo "        <a href=\"/wap/index/item/scid/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\" class=\"weui-grid js_grid\">
          <div class=\"weui-grid__icon\">
            <img src=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "icon_path", array()), "html", null, true);
                echo "\">
          </div>
          <p class=\"weui-grid__label\">
            ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "
          </p>
        </a>
        ";
            }
            // line 90
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "sData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 105
            echo "      <div class=\"oneBox_list\">
        <a href=\"/wap/meet/index/uid/";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uid", array()), "html", null, true);
            echo "/scid/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "scid", array()), "html", null, true);
            echo "/sid/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
            echo "\">
            <div class=\"list\">
              <img class=\"cover-img\" src=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cover_path", array()), "html", null, true);
            echo "\">
            </div>
            <div class=\"label label1\">
              ";
            // line 111
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "istatus", array()) == 1)) {
                // line 112
                echo "                真人认证
              ";
            }
            // line 114
            echo "            </div>
            <div class=\"label2 label1\">
              ";
            // line 116
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "status", array()) == 0)) {
                echo "离线";
            }
            // line 117
            echo "              ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "status", array()) == 1)) {
                echo "在线";
            }
            // line 118
            echo "              ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "status", array()) == 2)) {
                echo "冻结";
            }
            // line 119
            echo "            </div>
            <p class=\"u-nickname\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "uData", array()), "nickname", array()), "html", null, true);
            echo "</p>
            <p class=\"userName\" >￥<span >";
            // line 121
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
        // line 125
        echo "    </div>
  </div>
</div>
";
        // line 128
        $this->loadTemplate("footer.html", "index/index.html", 128)->display($context);
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
        return array (  282 => 4,  279 => 3,  275 => 128,  270 => 125,  258 => 121,  254 => 120,  251 => 119,  246 => 118,  241 => 117,  237 => 116,  233 => 114,  229 => 112,  227 => 111,  221 => 108,  212 => 106,  209 => 105,  205 => 104,  190 => 91,  184 => 90,  177 => 86,  171 => 83,  165 => 81,  162 => 80,  158 => 79,  152 => 75,  146 => 74,  139 => 70,  133 => 67,  127 => 65,  124 => 64,  120 => 63,  114 => 59,  108 => 58,  101 => 54,  95 => 51,  89 => 49,  86 => 48,  82 => 47,  49 => 16,  40 => 14,  36 => 13,  27 => 6,  25 => 3,  22 => 2,  20 => 1,);
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
</div>
{% include 'footer.html' %}", "index/index.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/wap/views/index/index.html");
    }
}
