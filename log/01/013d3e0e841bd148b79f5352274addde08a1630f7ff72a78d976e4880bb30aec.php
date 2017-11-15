<?php

/* meet/detail.html */
class __TwigTemplate_9f706e25f0547a5bbf9c93786e16a9abae28733bd8bb52da0f6c7d3316e5821c extends Twig_Template
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
        $this->loadTemplate("header.html", "meet/detail.html", 1)->display($context);
        // line 2
        $this->displayBlock('css', $context, $blocks);
        // line 6
        echo "
  <!-- banner start -->
  <div class=\"container-fluid detail-box\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-5\">
          <div class=\"row\">
            <div class=\"col-md-11 video-div\">
              <video class=\"video-box\" controls>
                  <source src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "usersInfo", array()), "video_path", array()), "html", null, true);
        echo "\" type=\"video/mp4\">
              </video>
            </div>
            <div class=\"col-md-11 info-div\">
              <div class=\"info-title\">个人资料</div>
              <ul class=\"list-unstyled info-ul\">
                <li><i class=\"fa fa-camera-retro\"></i> 身高：";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "usersInfo", array()), "stature", array()), "html", null, true);
        echo "CM</li>
                <li><i class=\"fa fa-camera-retro\"></i> 体重：";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "usersInfo", array()), "weight", array()), "html", null, true);
        echo "Kg</li>
                <li><i class=\"fa fa-camera-retro\"></i> 职业：";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "usersInfo", array()), "occupation", array()), "html", null, true);
        echo "</li>
                <li><i class=\"fa fa-camera-retro\"></i> 个人标签：";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "users", array()), "i_label", array()), "html", null, true);
        echo "</li>
                <li><i class=\"fa fa-camera-retro\"></i> 魅力部位：";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "usersInfo", array()), "charm_part", array()), "html", null, true);
        echo "</li>
                <li><i class=\"fa fa-camera-retro\"></i> 兴趣爱好：";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "usersInfo", array()), "interests", array()), "html", null, true);
        echo "</li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"col-md-7 service-div\">
          <ul class=\"nav nav-pills\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "sData", array()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 34
            echo "            <li role=\"presentation\" ";
            if ((($context["scid"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "scData", array()), "id", array()))) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"/meet/detail/uid/";
            echo twig_escape_filter($this->env, ($context["uid"] ?? null), "html", null, true);
            echo "/scid/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "scData", array()), "id", array()), "html", null, true);
            echo "/sid/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "scData", array()), "cname", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "          </ul>
          <div class=\"row service-info\">
            <blockquote>
              <p>服务基础信息</p>
            </blockquote>
            <div class=\"col-md-8\">
              <p><i class=\"fa fa-camera-retro\"></i> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "i_label", array()), "html", null, true);
        echo "</p>
              <p><i class=\"fa fa-camera-retro\"></i> 接单数：";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "or_quantity", array()), "html", null, true);
        echo "</p>
              <p>
                <i class=\"fa fa-camera-retro\"></i> 语音：
                <audio controls>
                  <source src=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "voice", array()), "html", null, true);
        echo "\" type=\"audio/mpeg\">
                </audio>
              </p>
            </div>
            <div class=\"col-md-4\">
              <p><span class=\"service-price\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "price", array()), "html", null, true);
        echo "</span>元／";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "units", array()), "html", null, true);
        echo "</p>
              <div>
              ";
        // line 54
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "users", array()), "status", array()) == 1) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "users", array()), "id", array()) != twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "id", array())))) {
            // line 55
            echo "                <button type=\"button\" class=\"btn btn-danger\" onclick=\"indent(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "id", array()), "html", null, true);
            echo ");\">下单约TA</button>
              ";
        }
        // line 57
        echo "              </div>
            </div>
          </div>
          <div class=\"row introduce-box\">
            <blockquote>
              <p>介绍</p>
            </blockquote>
            <div class=\"col-md-12\">
              <div class=\"introduce-content\">
                ";
        // line 67
        echo "                  ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "describe", array());
        echo "
                ";
        // line 69
        echo "              </div>
            </div>
          </div>
          <div class=\"row evaluate-box\">
            <blockquote>
              <p>评论</p>
            </blockquote>
            <div class=\"col-md-12\">
              ";
        // line 77
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "comment", array())) {
            // line 78
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "comment", array()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 79
                echo "              <div class=\"media\">
                <div class=\"media-left media-middle\">
                  <a href=\"javascript:;\">
                    <img class=\"media-object evaluate-img\" src=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "avatar", array()), "html", null, true);
                echo "\">
                  </a>
                </div>
                <div class=\"media-body\">
                  <h4 class=\"media-heading\">";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "nickname", array()), "html", null, true);
                echo "（";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d"), "html", null, true);
                echo "）
                    <span class=\"evaluate-i\">
                    ";
                // line 88
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 0)) {
                    echo "好评";
                }
                // line 89
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    echo "中评";
                }
                // line 90
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 2)) {
                    echo "差评";
                }
                // line 91
                echo "                    </span>
                  </h4>
                  ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "content", array()), "html", null, true);
                echo "
                </div>
              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "              ";
        } else {
            // line 98
            echo "                <p>暂无评论 ～</p>
              ";
        }
        // line 100
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

<!-- 下单 modal -->
<div id=\"iModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog i-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">听娱神游约玩</h4>
      </div>
      <div class=\"modal-body\">
        <blockquote>
          <p>订单信息</p>
        </blockquote>
          <div class=\"row indent-row\">
            <div class=\"col-md-2\">
              <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "users", array()), "avatar", array()), "html", null, true);
        echo "\" class=\"img-responsive avatar-img\">
            </div>
            <div class=\"col-md-5\">
              <p class=\"nickname-text\">昵称：";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "users", array()), "nickname", array()), "html", null, true);
        echo "</p>
              <p>服务：";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onscCname", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-5\">
              <p class=\"service-price-p\">总价：<span class=\"service-price-indent\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "price", array()), "html", null, true);
        echo "</span>元／";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "units", array()), "html", null, true);
        echo "</p>
              <p>单价：<sapn class=\"unit-price\">";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "price", array()), "html", null, true);
        echo "</sapn> x <span id=\"numSpan\">1</span>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "units", array()), "html", null, true);
        echo "</p>
              <p>您当前约玩币：";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "balance", array()), "html", null, true);
        echo "</p>
            </div>
          </div>
        <blockquote>
          <p>下单时间</p>
        </blockquote>
          <div class=\"row indent-row\">
            <div class=\"col-md-5\">
              <div class=\"form-inline\">
                <div class=\"form-group\">
                  <label for=\"exampleInputName2\">日期</label>
                  <input type=\"text\" class=\"form-control\" id=\"datetimepickerDade\" name=\"startDate\" readonly=\"readonly\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "currentDate", array()), "html", null, true);
        echo "\">
                </div>
              </div>
            </div>
            <div class=\"col-md-5\">
              <div class=\"form-inline\">
                <div class=\"form-group\">
                  <label for=\"exampleInputName2\">时间</label>
                  <input type=\"text\" class=\"form-control\" id=\"datetimepickerTime\" name=\"startTime\" readonly=\"readonly\" placeholder=\"请选择服务开始时间\">
                </div>
              </div>
            </div>
            <div class=\"col-md-2 num-md\">
              <input class=\"alignment num-select\" value=\"1\" data-step=\"1\" data-min=\"1\" data-max=\"23\" data-digit=\"0\" name=\"num\" />
            </div>
          </div>
        <blockquote>
          <p class=\"pay-tips\">* 支付成功后将短信通知陪玩导师，请保持电话畅通。</p>
        </blockquote>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"iPay(";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "users", array()), "id", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "id", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "id", array()), "html", null, true);
        echo ",0,'";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "phone", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "users", array()), "phone", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onsData", array()), "price", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "units", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "balance", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "onscCname", array()), "html", null, true);
        echo "');\">立即支付</button>
      </div>
    </div>
  </div>
</div>

";
        // line 170
        $this->loadTemplate("footer.html", "meet/detail.html", 170)->display($context);
        // line 171
        $this->displayBlock('js', $context, $blocks);
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/meet/css/detail.css\">
<link rel=\"stylesheet\" href=\"/public/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css\">
";
    }

    // line 171
    public function block_js($context, array $blocks = array())
    {
        // line 172
        echo "<script src=\"/public/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js\"></script>
<script src=\"/public/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.zh-CN.js\"></script>
<script type=\"text/javascript\" src=\"/public/jQuery-num-alignment/js/num-alignment.js\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/meet/js/detail.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "meet/detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 175,  363 => 172,  360 => 171,  352 => 3,  349 => 2,  345 => 171,  343 => 170,  318 => 164,  293 => 142,  279 => 131,  273 => 130,  267 => 129,  261 => 126,  257 => 125,  251 => 122,  227 => 100,  223 => 98,  220 => 97,  210 => 93,  206 => 91,  201 => 90,  196 => 89,  192 => 88,  185 => 86,  178 => 82,  173 => 79,  168 => 78,  166 => 77,  156 => 69,  151 => 67,  140 => 57,  134 => 55,  132 => 54,  125 => 52,  117 => 47,  110 => 43,  106 => 42,  98 => 36,  79 => 34,  75 => 33,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  49 => 22,  45 => 21,  36 => 15,  25 => 6,  23 => 2,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.html' %}
{% block css %}
<link rel=\"stylesheet\" href=\"{{src}}/meet/css/detail.css\">
<link rel=\"stylesheet\" href=\"/public/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css\">
{% endblock %}

  <!-- banner start -->
  <div class=\"container-fluid detail-box\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-5\">
          <div class=\"row\">
            <div class=\"col-md-11 video-div\">
              <video class=\"video-box\" controls>
                  <source src=\"{{data.usersInfo.video_path}}\" type=\"video/mp4\">
              </video>
            </div>
            <div class=\"col-md-11 info-div\">
              <div class=\"info-title\">个人资料</div>
              <ul class=\"list-unstyled info-ul\">
                <li><i class=\"fa fa-camera-retro\"></i> 身高：{{data.usersInfo.stature}}CM</li>
                <li><i class=\"fa fa-camera-retro\"></i> 体重：{{data.usersInfo.weight}}Kg</li>
                <li><i class=\"fa fa-camera-retro\"></i> 职业：{{data.usersInfo.occupation}}</li>
                <li><i class=\"fa fa-camera-retro\"></i> 个人标签：{{data.users.i_label}}</li>
                <li><i class=\"fa fa-camera-retro\"></i> 魅力部位：{{data.usersInfo.charm_part}}</li>
                <li><i class=\"fa fa-camera-retro\"></i> 兴趣爱好：{{data.usersInfo.interests}}</li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"col-md-7 service-div\">
          <ul class=\"nav nav-pills\">
            {% for k,v in data.sData %}
            <li role=\"presentation\" {% if scid == v.scData.id %} class=\"active\" {% endif %}><a href=\"/meet/detail/uid/{{uid}}/scid/{{v.scData.id}}/sid/{{v.id}}\">{{v.scData.cname}}</a></li>
            {% endfor %}
          </ul>
          <div class=\"row service-info\">
            <blockquote>
              <p>服务基础信息</p>
            </blockquote>
            <div class=\"col-md-8\">
              <p><i class=\"fa fa-camera-retro\"></i> {{data.onsData.i_label}}</p>
              <p><i class=\"fa fa-camera-retro\"></i> 接单数：{{data.onsData.or_quantity}}</p>
              <p>
                <i class=\"fa fa-camera-retro\"></i> 语音：
                <audio controls>
                  <source src=\"{{data.onsData.voice}}\" type=\"audio/mpeg\">
                </audio>
              </p>
            </div>
            <div class=\"col-md-4\">
              <p><span class=\"service-price\">{{data.onsData.price}}</span>元／{{data.units}}</p>
              <div>
              {% if data.users.status == 1 and data.users.id != u.id %}
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"indent({{u.id}});\">下单约TA</button>
              {% endif %}
              </div>
            </div>
          </div>
          <div class=\"row introduce-box\">
            <blockquote>
              <p>介绍</p>
            </blockquote>
            <div class=\"col-md-12\">
              <div class=\"introduce-content\">
                {% autoescape false %}
                  {{data.onsData.describe}}
                {% endautoescape %}
              </div>
            </div>
          </div>
          <div class=\"row evaluate-box\">
            <blockquote>
              <p>评论</p>
            </blockquote>
            <div class=\"col-md-12\">
              {% if data.onsData.comment %}
              {% for k,v in data.onsData.comment %}
              <div class=\"media\">
                <div class=\"media-left media-middle\">
                  <a href=\"javascript:;\">
                    <img class=\"media-object evaluate-img\" src=\"{{v.avatar}}\">
                  </a>
                </div>
                <div class=\"media-body\">
                  <h4 class=\"media-heading\">{{v.nickname}}（{{v.ctime|date('Y-m-d')}}）
                    <span class=\"evaluate-i\">
                    {% if v.status == 0 %}好评{% endif %}
                    {% if v.status == 1 %}中评{% endif %}
                    {% if v.status == 2 %}差评{% endif %}
                    </span>
                  </h4>
                  {{v.content}}
                </div>
              </div>
              {% endfor %}
              {% else %}
                <p>暂无评论 ～</p>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

<!-- 下单 modal -->
<div id=\"iModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog i-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">听娱神游约玩</h4>
      </div>
      <div class=\"modal-body\">
        <blockquote>
          <p>订单信息</p>
        </blockquote>
          <div class=\"row indent-row\">
            <div class=\"col-md-2\">
              <img src=\"{{data.users.avatar}}\" class=\"img-responsive avatar-img\">
            </div>
            <div class=\"col-md-5\">
              <p class=\"nickname-text\">昵称：{{data.users.nickname}}</p>
              <p>服务：{{data.onscCname}}</p>
            </div>
            <div class=\"col-md-5\">
              <p class=\"service-price-p\">总价：<span class=\"service-price-indent\">{{data.onsData.price}}</span>元／{{data.units}}</p>
              <p>单价：<sapn class=\"unit-price\">{{data.onsData.price}}</sapn> x <span id=\"numSpan\">1</span>{{data.units}}</p>
              <p>您当前约玩币：{{u.balance}}</p>
            </div>
          </div>
        <blockquote>
          <p>下单时间</p>
        </blockquote>
          <div class=\"row indent-row\">
            <div class=\"col-md-5\">
              <div class=\"form-inline\">
                <div class=\"form-group\">
                  <label for=\"exampleInputName2\">日期</label>
                  <input type=\"text\" class=\"form-control\" id=\"datetimepickerDade\" name=\"startDate\" readonly=\"readonly\" value=\"{{data.currentDate}}\">
                </div>
              </div>
            </div>
            <div class=\"col-md-5\">
              <div class=\"form-inline\">
                <div class=\"form-group\">
                  <label for=\"exampleInputName2\">时间</label>
                  <input type=\"text\" class=\"form-control\" id=\"datetimepickerTime\" name=\"startTime\" readonly=\"readonly\" placeholder=\"请选择服务开始时间\">
                </div>
              </div>
            </div>
            <div class=\"col-md-2 num-md\">
              <input class=\"alignment num-select\" value=\"1\" data-step=\"1\" data-min=\"1\" data-max=\"23\" data-digit=\"0\" name=\"num\" />
            </div>
          </div>
        <blockquote>
          <p class=\"pay-tips\">* 支付成功后将短信通知陪玩导师，请保持电话畅通。</p>
        </blockquote>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"iPay({{data.users.id}},{{u.id}},{{data.onsData.id}},0,'{{u.phone}}','{{data.users.phone}}','{{data.onsData.price}}','{{data.units}}','{{u.balance}}','{{data.onscCname}}');\">立即支付</button>
      </div>
    </div>
  </div>
</div>

{% include 'footer.html' %}
{% block js %}
<script src=\"/public/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js\"></script>
<script src=\"/public/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.zh-CN.js\"></script>
<script type=\"text/javascript\" src=\"/public/jQuery-num-alignment/js/num-alignment.js\"></script>
<script src=\"{{src}}/meet/js/detail.js\"></script>
{% endblock %}", "meet/detail.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/home/views/meet/detail.html");
    }
}
