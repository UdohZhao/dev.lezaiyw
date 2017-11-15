<?php

/* index/item.html */
class __TwigTemplate_6f27a6870cb0815d688b89590a0868ec4a5c9ad060de90ff6d9698dbc6caf992 extends Twig_Template
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
        $this->loadTemplate("header.html", "index/item.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('css', $context, $blocks);
        // line 8
        echo "  
<!-- 搜索框 -->
<div class=\"weui-search-bar\" id=\"searchBar\">
  <form class=\"weui-search-bar__form\">
    <div class=\"weui-search-bar__box\">
      <i class=\"weui-icon-search\"></i>
      <input type=\"search\" class=\"weui-search-bar__input\" id=\"searchInput\" placeholder=\"搜索\" required=\"\">
      <a href=\"javascript:\" class=\"weui-icon-clear\" id=\"searchClear\"></a>
    </div>
    <label class=\"weui-search-bar__label\" id=\"searchText\">
      <i class=\"weui-icon-search\"></i>
      <span>搜索</span>
    </label>
  </form>
  <a href=\"javascript:\" class=\"weui-search-bar__cancel-btn\" id=\"searchCancel\">取消</a>
</div>

<!-- 容器 -->
<div class=\"weui-tab\">
  <div class=\"weui-navbar\">
    <a class=\"weui-navbar__item weui-bar__item--on\" href=\"#tab1\">推荐</a>
    <a class=\"weui-navbar__item\" href=\"#tab2\">热门</a>
\t  <a class=\"weui-navbar__item\" href=\"#tab3\">新人</a>
    <a href=\"\"></a>
  </div>

  <div class=\"weui-tab__bd\">
    <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
      <div class=\"oneBox\">
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
      </div>
    </div>
    <div id=\"tab2\" class=\"weui-tab__bd-item\">
      <h1>页面二</h1>
    </div>
    <div id=\"tab3\" class=\"weui-tab__bd-item\">
      <h1>页面三</h1>
    </div>
  </div>
</div>



";
        // line 102
        $this->loadTemplate("footer_js.html", "index/item.html", 102)->display($context);
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "
<link rel=\"stylesheet\" href=\"/apps/wap/views/index/css/index.css\">

";
    }

    public function getTemplateName()
    {
        return "index/item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 4,  127 => 3,  123 => 102,  27 => 8,  25 => 3,  22 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.html' %}

{% block css %}

<link rel=\"stylesheet\" href=\"/apps/wap/views/index/css/index.css\">

{% endblock %}
  
<!-- 搜索框 -->
<div class=\"weui-search-bar\" id=\"searchBar\">
  <form class=\"weui-search-bar__form\">
    <div class=\"weui-search-bar__box\">
      <i class=\"weui-icon-search\"></i>
      <input type=\"search\" class=\"weui-search-bar__input\" id=\"searchInput\" placeholder=\"搜索\" required=\"\">
      <a href=\"javascript:\" class=\"weui-icon-clear\" id=\"searchClear\"></a>
    </div>
    <label class=\"weui-search-bar__label\" id=\"searchText\">
      <i class=\"weui-icon-search\"></i>
      <span>搜索</span>
    </label>
  </form>
  <a href=\"javascript:\" class=\"weui-search-bar__cancel-btn\" id=\"searchCancel\">取消</a>
</div>

<!-- 容器 -->
<div class=\"weui-tab\">
  <div class=\"weui-navbar\">
    <a class=\"weui-navbar__item weui-bar__item--on\" href=\"#tab1\">推荐</a>
    <a class=\"weui-navbar__item\" href=\"#tab2\">热门</a>
\t  <a class=\"weui-navbar__item\" href=\"#tab3\">新人</a>
    <a href=\"\"></a>
  </div>

  <div class=\"weui-tab__bd\">
    <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
      <div class=\"oneBox\">
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
          <div class=\"item_list\">
            <a href=\"/wap/meet/index\">
                <div class=\"list posiR\">
                  <img src=\"/apps/wap/views/index/img/hot-3.jpeg\">
                  <div class=\"label1 item_label\">真人认证</div>
                  <div class=\"label2 label1\">在线</div>
                </div>
                <div class=\"item_bd\">
                  <span class=\"userName\">蔡妹妹</span>
                  <span class=\"userName\" style=\"color: #F92246;\">￥<b >233</b>元/局</span>
                </div>
            </a>
          </div>
      </div>
    </div>
    <div id=\"tab2\" class=\"weui-tab__bd-item\">
      <h1>页面二</h1>
    </div>
    <div id=\"tab3\" class=\"weui-tab__bd-item\">
      <h1>页面三</h1>
    </div>
  </div>
</div>



{% include 'footer_js.html' %}", "index/item.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/wap/views/index/item.html");
    }
}
