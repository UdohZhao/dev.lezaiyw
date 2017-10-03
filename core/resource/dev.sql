# 后台用户表
CREATE TABLE `admin_user`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '后台用户表主键id',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>超级管理员，1>普通管理员，2>服务审核管理员，3>实名认证管理员，4>提现管理员，5>信息发布管理员',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>正常，1>禁用',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;
# 用户信息表
CREATE TABLE `users`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户信息表主键id',
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `avatar` varchar(255) NOT NULL COMMENT '头像',
  `sex` tinyint(1) UNSIGNED NOT NULL COMMENT '性别？0>女，1>男',
  `birthday` int(10) UNSIGNED NOT NULL COMMENT '生日',
  `age` tinyint(2) UNSIGNED NOT NULL COMMENT '年龄',
  `phone` char(11) NOT NULL COMMENT '手机号码',
  `qq` varchar(20) NOT NULL COMMENT 'QQ号码',
  `city` varchar(50) NOT NULL COMMENT '所在城市',
  `i_label` varchar(255) NOT NULL COMMENT '个性标签',
  `i_signature` varchar(255) NOT NULL COMMENT '个性签名',
  `balance` int(10) UNSIGNED NOT NULL COMMENT '余额',
  `royalties` decimal(14,2) UNSIGNED NOT NULL COMMENT '提成总额',
  `contribution` int(10) UNSIGNED NOT NULL COMMENT '贡献值',
  `charm` int(10) UNSIGNED NOT NULL COMMENT '魅力值',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>未实名认证，1>已实名认证',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>离线，1>在线，2>冻结',
  `istatus` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>默认，1>真人认证',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 用户详细信息表
CREATE TABLE `users_info`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户详细信息表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `stature` tinyint(3) UNSIGNED NOT NULL COMMENT '身高CM',
  `weight` tinyint(3) UNSIGNED NOT NULL COMMENT '体重KG',
  `occupation` varchar(50) NOT NULL COMMENT '职业',
  `interests` varchar(255) NOT NULL COMMENT '兴趣爱好',
  `charm_part` varchar(255) NOT NULL COMMENT '魅力部位（序列化数组）',
  `video_path` varchar(255) NOT NULL COMMENT '个人视频路径（10M之内）',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 实名认证资料表
CREATE TABLE `certification_info`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '实名认证表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `front_path` varchar(255) NOT NULL COMMENT '身份证正面路径',
  `back_path` varchar(255) NOT NULL COMMENT '身份证背面路径',
  `hand_path` varchar(255) NOT NULL COMMENT '手持身份证路径',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 用户授权表
CREATE TABLE `user_auths`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户授权表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `login_type` tinyint(1) UNSIGNED NOT NULL COMMENT '登录类型？0>手机号码，1>微信，2>QQ',
  `identifier` varchar(50) NOT NULL COMMENT '标识',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 网咖表
CREATE TABLE `internet_bar`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '网咖表主键id',
  `city` varchar(50) NOT NULL COMMENT '所在城市',
  `cname` varchar(50) NOT NULL COMMENT '名称',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 关注拉黑表
CREATE TABLE `attention_blacklist`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '关注表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `abuid` int(11) UNSIGNED NOT NULL COMMENT '被关注/拉黑者的uid',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>关注，1>拉黑',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 站内信表
CREATE TABLE `message`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '站内信表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 公告表
CREATE TABLE `notice`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '公告表主键id',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未读，1>已读',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 充值提现记录表
CREATE TABLE `cash_value`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '充值提现记录表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `inumber` varchar(50) NOT NULL COMMENT '订单编号',
  `money` decimal(14,2) UNSIGNED NOT NULL COMMENT '金额',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>充值，1>提现',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>默认，1>失败，2>成功',
  PRIMARY KEY (`id`),
  KEY (`uid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 服务类别表
CREATE TABLE `service_category`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '服务类别表主键id',
  `cname` varchar(50) NOT NULL COMMENT '名称',
  `units` tinyint(1) UNSIGNED NOT NULL COMMENT '单位？0>时，1>局，2>首，3>次',
  `sort` tinyint(3) UNSIGNED NOT NULL COMMENT '排序',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>线上游戏，1>线上娱乐，2>线下娱乐',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>启用，1>禁用',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 服务表
CREATE TABLE `service`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '服务表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `scid` int(11) UNSIGNED NOT NULL COMMENT '关联服务类别表主键id',
  `cover_path` varchar(255) NOT NULL COMMENT '封面路径',
  `describe` varchar(5000) NOT NULL COMMENT '描述',
  `voice` varchar(255) DEFAULT '' COMMENT '语音路径',
  `price` decimal(14,2) UNSIGNED NOT NULL COMMENT '价格',
  `or_quantity` int(10) UNSIGNED NOT NULL COMMENT '接单数',
  `i_label` varchar(50) NOT NULL COMMENT '个性标签',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>待审核，1>审核未通过，2>审核通过',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>下架，1>上架',
  PRIMARY KEY (`id`),
  KEY (`uid`),
  KEY (`scid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 订单表
CREATE TABLE `indent`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '订单表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `sid` int(11) UNSIGNED NOT NULL COMMENT '关联服务表主键id',
  `ibid` int(11) UNSIGNED NOT NULL COMMENT '关联网咖表主键id',
  `inumber` varchar(50) NOT NULL COMMENT '订单编号',
  `price` decimal(14,2) UNSIGNED NOT NULL COMMENT '价格',
  `showinfo` varchar(20) NOT NULL COMMENT '展示信息（1小时；1局；1首；1次）',
  `from_phone` char(11) NOT NULL COMMENT '来自下单用户的电话号码',
  `to_phone` char(11) NOT NULL COMMENT '去往陪陪的电话号码',
  `creation_time` int(10) UNSIGNED NOT NULL COMMENT '创建时间',
  `maa_start_time` int(10) UNSIGNED NOT NULL COMMENT '预约开始时间',
  `maa_end_time` int(10) UNSIGNED NOT NULL COMMENT '预约结束时间',
  `accept_time` int(10) UNSIGNED NOT NULL COMMENT '接单时间',
  `start_time` int(10) UNSIGNED NOT NULL COMMENT '开始时间',
  `end_time` int(10) UNSIGNED NOT NULL COMMENT '结束时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>待确定，1>已接单，2>进行中，3>结束',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>默认，1>取消，2>超时取消，3>待评价，4>已评价',
  PRIMARY KEY (`id`),
  KEY (`uid`),
  KEY (`sid`),
  KEY (`ibid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
# 订单提成表
CREATE TABLE `indent_royalties`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '提成表主键id',
  `uid` int(11) UNSIGNED NOT NULL COMMENT '关联用户信息表主键id',
  `iid` int(11) UNSIGNED NOT NULL COMMENT '关联订单表主键id',
  `iprice` decimal(14,2) UNSIGNED NOT NULL COMMENT '订单价格',
  `user_rprice` decimal(14,2) UNSIGNED NOT NULL COMMENT '用户提成价格',
  `platform_rprice` decimal(14,2) UNSIGNED NOT NULL COMMENT '平台提成价格',
  `ctime` int(10) UNSIGNED NOT NULL COMMENT '时间',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>正常，1>退款',
  `status` tinyint(1) UNSIGNED NOT NULL COMMENT '状态？0>未提成，1>已提成',
  PRIMARY KEY (`id`),
  KEY (`uid`),
  KEY (`iid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
