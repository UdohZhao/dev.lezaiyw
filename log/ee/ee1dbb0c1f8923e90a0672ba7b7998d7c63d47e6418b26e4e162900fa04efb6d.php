<?php

/* footer.html */
class __TwigTemplate_55eb8d13918b43af4a06114dcd9faf9bb974f31347263fbe4f454e3d1f1e78be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  <!-- 底部 start -->
  <div class=\"container-fluid footer-box\" >
      <div class=\"container\">
        <div class=\"row tips-box\">
            <ul class=\"list-inline tips-list\">
              <li>
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/img/tips-1.png\" class=\"img-responsive\">
              </li>
              <li>
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/img/tips-2.png\" class=\"img-responsive\">
              </li>
              <li>
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/img/tips-3.png\" class=\"img-responsive\">
              </li>
              <li>
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/img/tips-4.png\" class=\"img-responsive\">
              </li>
            </ul>
        </div>
      </div>
      <div class=\"row tips-line\"></div>
      <div class=\"container\">
        <div class=\"row info-box\">
          <div class=\"col-md-6 info-service-box\">
            <div class=\"row\">
              <div class=\"col-md-2 service-img\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/img/service-1.png\" class=\"img-responsive\">
              </div>
              <div class=\"col-md-10 service-msg\">客服电话：023-19972003     咨询时间：9:00 - 20:00</div>
            </div>
          </div>
        </div>
        <div class=\"row info-box\">
          <div class=\"col-md-6 info-service-box\">
            <div class=\"row\">
              <a href=\"tencent://message/?uin=800814441&Site=&Menu=yes\" style=\"color: #efefef;\">
                <div class=\"col-md-2 service-img\">
                  <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/img/qq-1.png\" class=\"img-responsive\">
                </div>
                <div class=\"col-md-10 service-msg\">客服QQ：800814441     咨询时间：9:00 - 20:00</div>
              </a>
            </div>
          </div>
          <div class=\"col-md-6\">
            <ul class=\"list-inline help-box\">
              <li>
                <a href=\"JavaScript:;\">帮助中心</a>
              </li>
              <li>
                <a href=\"JavaScript:;\">陪玩守则</a>
              </li>
              <li>
                <a href=\"JavaScript:;\">服务保障</a></li>
            </ul>
          </div>
        </div>
        <div class=\"row copyright-box\">
          <div class=\"col-md-12\">
              Copyright 苏ICP备17037285号-1 2017-2020 TINGYU Corporation,All Rights Reserved
          </div>
        </div>
      </div>
  </div>
  <!-- 底部 end -->

  <!-- 登录 Modal -->
  <div id=\"loginModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"gridSystemModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\" id=\"gridSystemModalLabel\">听娱神游约玩</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"row login-box\">
            <div class=\"col-sm-12\">
              <form id=\"loginForm\" class=\"form-horizontal\" action=\"/login/add/type/0\" method=\"post\">
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">手机号码</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"请输入手机号码\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">动态密码</label>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" class=\"form-control\" name=\"codeMsg\" placeholder=\"请输入动态密码\">
                  </div>
                  <div class=\"col-sm-4\">
                    <input class=\"btn btn-primary\" type=\"button\" value=\"获取短信动态密码\" onclick=\"sendCode(this);\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-12 login-btn-box\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\">登 录</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-primary\">微信登录</button>
          <button type=\"button\" class=\"btn btn-primary\">QQ登录</button>
        </div> -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    <!-- 引入SweetAlert js -->
    <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
    <!-- 引入 jquery.validate.min.js -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

    <!-- 引入公共页面 layouts.js -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["src"] ?? null), "html", null, true);
        echo "/layouts/js/layouts.js\"></script>

    ";
        // line 125
        $this->displayBlock('js', $context, $blocks);
        // line 128
        echo "
  </body>
</html>";
    }

    // line 125
    public function block_js($context, array $blocks = array())
    {
        // line 126
        echo "
    ";
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
        return array (  178 => 126,  175 => 125,  169 => 128,  167 => 125,  162 => 123,  74 => 38,  60 => 27,  46 => 16,  40 => 13,  34 => 10,  28 => 7,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <!-- 底部 start -->
  <div class=\"container-fluid footer-box\" >
      <div class=\"container\">
        <div class=\"row tips-box\">
            <ul class=\"list-inline tips-list\">
              <li>
                <img src=\"{{src}}/layouts/img/tips-1.png\" class=\"img-responsive\">
              </li>
              <li>
                <img src=\"{{src}}/layouts/img/tips-2.png\" class=\"img-responsive\">
              </li>
              <li>
                <img src=\"{{src}}/layouts/img/tips-3.png\" class=\"img-responsive\">
              </li>
              <li>
                <img src=\"{{src}}/layouts/img/tips-4.png\" class=\"img-responsive\">
              </li>
            </ul>
        </div>
      </div>
      <div class=\"row tips-line\"></div>
      <div class=\"container\">
        <div class=\"row info-box\">
          <div class=\"col-md-6 info-service-box\">
            <div class=\"row\">
              <div class=\"col-md-2 service-img\">
                <img src=\"{{src}}/layouts/img/service-1.png\" class=\"img-responsive\">
              </div>
              <div class=\"col-md-10 service-msg\">客服电话：023-19972003     咨询时间：9:00 - 20:00</div>
            </div>
          </div>
        </div>
        <div class=\"row info-box\">
          <div class=\"col-md-6 info-service-box\">
            <div class=\"row\">
              <a href=\"tencent://message/?uin=800814441&Site=&Menu=yes\" style=\"color: #efefef;\">
                <div class=\"col-md-2 service-img\">
                  <img src=\"{{src}}/layouts/img/qq-1.png\" class=\"img-responsive\">
                </div>
                <div class=\"col-md-10 service-msg\">客服QQ：800814441     咨询时间：9:00 - 20:00</div>
              </a>
            </div>
          </div>
          <div class=\"col-md-6\">
            <ul class=\"list-inline help-box\">
              <li>
                <a href=\"JavaScript:;\">帮助中心</a>
              </li>
              <li>
                <a href=\"JavaScript:;\">陪玩守则</a>
              </li>
              <li>
                <a href=\"JavaScript:;\">服务保障</a></li>
            </ul>
          </div>
        </div>
        <div class=\"row copyright-box\">
          <div class=\"col-md-12\">
              Copyright 苏ICP备17037285号-1 2017-2020 TINGYU Corporation,All Rights Reserved
          </div>
        </div>
      </div>
  </div>
  <!-- 底部 end -->

  <!-- 登录 Modal -->
  <div id=\"loginModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"gridSystemModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\" id=\"gridSystemModalLabel\">听娱神游约玩</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"row login-box\">
            <div class=\"col-sm-12\">
              <form id=\"loginForm\" class=\"form-horizontal\" action=\"/login/add/type/0\" method=\"post\">
                <div class=\"form-group\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">手机号码</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"请输入手机号码\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">动态密码</label>
                  <div class=\"col-sm-6\">
                    <input type=\"text\" class=\"form-control\" name=\"codeMsg\" placeholder=\"请输入动态密码\">
                  </div>
                  <div class=\"col-sm-4\">
                    <input class=\"btn btn-primary\" type=\"button\" value=\"获取短信动态密码\" onclick=\"sendCode(this);\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-12 login-btn-box\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block login-button\">登 录</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-primary\">微信登录</button>
          <button type=\"button\" class=\"btn btn-primary\">QQ登录</button>
        </div> -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js\"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    <!-- 引入SweetAlert js -->
    <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
    <!-- 引入 jquery.validate.min.js -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

    <!-- 引入公共页面 layouts.js -->
    <script src=\"{{src}}/layouts/js/layouts.js\"></script>

    {% block js %}

    {% endblock %}

  </body>
</html>", "footer.html", "/home/wwwroot/dev.lezaiyw.vag/wwwroot/apps/home/views/footer.html");
    }
}
