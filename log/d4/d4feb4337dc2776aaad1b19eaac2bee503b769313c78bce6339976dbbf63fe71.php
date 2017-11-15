<?php

/* header.html */
class __TwigTemplate_152ab452fbda68c85b8fb984e9f6346c9706aca4b1d681af6f4947aab5ac0e60 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["websiteName"] ?? null), "html", null, true);
        echo "</title>

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- 引入字体图标 css -->
    <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- 引入SweetAlert css -->
    <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

    <!-- 引入公共样式 layouts.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/css/layouts.css\">

    ";
        // line 22
        $this->displayBlock('css', $context, $blocks);
        // line 25
        echo "
  </head>
  <body>
    <!-- 头部 start -->
    <div class=\"container-fluid header-box\">
      <nav class=\"navbar navbar-default navbar-fixed-top navbar-box\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-5\">
              <a href=\"/\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/img/logo.png\" class=\"img-responsive logo-img\"></a>
            </div>
            <div class=\"col-md-5\">
              <ul class=\"nav nav-pills nav-box\">
                <li role=\"presentation\" ";
        // line 38
        if ((($context["active"] ?? null) == "index")) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/\">首页</a></li>
                <li role=\"presentation\" ";
        // line 39
        if ((($context["active"] ?? null) == "meet")) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/meet/index\" target=\"_blank\">约陪玩</a></li>
                <li role=\"presentation\" ";
        // line 40
        if ((($context["active"] ?? null) == "recharge")) {
            echo "class=\"active\"";
        }
        echo " >
                  ";
        // line 41
        if (($context["u"] ?? null)) {
            // line 42
            echo "                    <a href=\"/recharge/index\" target=\"_blank\">充值</a>
                  ";
        } else {
            // line 44
            echo "                    <a href=\"JavaScript:;\" onclick=\"JavaScript:swal('提示','请先您登录 :(','error');\">充值</a>
                  ";
        }
        // line 46
        echo "                </li>
                <li role=\"presentation\">
                  ";
        // line 48
        if (($context["u"] ?? null)) {
            // line 49
            echo "                    <a href=\"/enter/add\" target=\"_blank\">申请入驻</a>
                  ";
        } else {
            // line 51
            echo "                    <a href=\"JavaScript:;\" onclick=\"JavaScript:swal('提示','请先您登录 :(','error');\">申请入驻</a>
                  ";
        }
        // line 53
        echo "                </li>
              </ul>
            </div>
            <div class=\"col-md-2\">
              ";
        // line 57
        if (($context["u"] ?? null)) {
            // line 58
            echo "                <div class=\"media u-box\">
                  <div class=\"media-left media-middle\">
                    <a href=\"/indent/index\" target=\"_blank\">
                      <img class=\"media-object u-avatar\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "avatar", array()), "html", null, true);
            echo "\">
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading u-nickname\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "nickname", array()), "html", null, true);
            echo "</h4>
                    UID：";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "id", array()), "html", null, true);
            echo "
                  </div>
                </div>
              ";
        } else {
            // line 70
            echo "                <ul class=\"nav nav-pills nav-box\">
                  <li role=\"presentation\"><a href=\"JavaScript:;\" onclick=\"login();\">登录</a></li>
                </ul>
              ";
        }
        // line 74
        echo "            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- 头部 end -->";
    }

    // line 22
    public function block_css($context, array $blocks = array())
    {
        // line 23
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 23,  157 => 22,  148 => 74,  142 => 70,  135 => 66,  131 => 65,  124 => 61,  119 => 58,  117 => 57,  111 => 53,  107 => 51,  103 => 49,  101 => 48,  97 => 46,  93 => 44,  89 => 42,  87 => 41,  81 => 40,  75 => 39,  69 => 38,  62 => 34,  51 => 25,  49 => 22,  44 => 20,  29 => 8,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>{{ websiteName }}</title>

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- 引入字体图标 css -->
    <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- 引入SweetAlert css -->
    <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

    <!-- 引入公共样式 layouts.css -->
    <link rel=\"stylesheet\" href=\"{{src}}/layouts/css/layouts.css\">

    {% block css %}

    {% endblock %}

  </head>
  <body>
    <!-- 头部 start -->
    <div class=\"container-fluid header-box\">
      <nav class=\"navbar navbar-default navbar-fixed-top navbar-box\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-5\">
              <a href=\"/\"><img src=\"{{src}}/layouts/img/logo.png\" class=\"img-responsive logo-img\"></a>
            </div>
            <div class=\"col-md-5\">
              <ul class=\"nav nav-pills nav-box\">
                <li role=\"presentation\" {% if active == 'index' %}class=\"active\"{% endif %} ><a href=\"/\">首页</a></li>
                <li role=\"presentation\" {% if active == 'meet' %}class=\"active\"{% endif %} ><a href=\"/meet/index\" target=\"_blank\">约陪玩</a></li>
                <li role=\"presentation\" {% if active == 'recharge' %}class=\"active\"{% endif %} >
                  {% if u %}
                    <a href=\"/recharge/index\" target=\"_blank\">充值</a>
                  {% else %}
                    <a href=\"JavaScript:;\" onclick=\"JavaScript:swal('提示','请先您登录 :(','error');\">充值</a>
                  {% endif %}
                </li>
                <li role=\"presentation\">
                  {% if u %}
                    <a href=\"/enter/add\" target=\"_blank\">申请入驻</a>
                  {% else %}
                    <a href=\"JavaScript:;\" onclick=\"JavaScript:swal('提示','请先您登录 :(','error');\">申请入驻</a>
                  {% endif %}
                </li>
              </ul>
            </div>
            <div class=\"col-md-2\">
              {% if u %}
                <div class=\"media u-box\">
                  <div class=\"media-left media-middle\">
                    <a href=\"/indent/index\" target=\"_blank\">
                      <img class=\"media-object u-avatar\" src=\"{{u.avatar}}\">
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <h4 class=\"media-heading u-nickname\">{{u.nickname}}</h4>
                    UID：{{u.id}}
                  </div>
                </div>
              {% else %}
                <ul class=\"nav nav-pills nav-box\">
                  <li role=\"presentation\"><a href=\"JavaScript:;\" onclick=\"login();\">登录</a></li>
                </ul>
              {% endif %}
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- 头部 end -->", "header.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/home/views/header.html");
    }
}
