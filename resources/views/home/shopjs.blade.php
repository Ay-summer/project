<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="/static/res/css/public.css" type="text/css" rel="stylesheet"/>
    <link href="/static/res/css/order.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="/static/res/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/static/res/js/slide.js"></script>
</head>
<script>
    $(function(){
        $('.nav ul li').hover(function(){
            $(this).children(".details").show();
        },function(){
            $(this).children(".details").hide();
        });
        $('#my').hover(function(){
            $(this).find("div").show();
        },function(){
            $(this).find("div").hide();
        });
    });
</script>
<!-- <style type="text/css">
   .b_address .operate form a{color:#cfb2f6;}
</style> -->
<body>
<!------------顶部---------------->
<div class="top">
    <div class="wt1080">
        <div class="fl">
           
        </div>
        <div class="fr">
            <ul>
                <li style="position: relative;" id="my">
                    <a href="my_order.html">个人中心 <img src="image/sanjiao.png"></a>
                    <div class="personal">
                        <dl>
                            <dt><a href="my_order.html">我的订单</a></dt>
                            <dd><a href="my_youhuijuan.html">我的优惠卷</a></dd>
                            <dd><a href="my_jifen.html">我的积分</a></dd>
                        </dl>
                    </div>
                </li>
                <li><span class="shop"><a href="gouwuche.html"></a></span></li>
               
                <li><span><a href="about">关于Ehua</a></span></li>
                <li><span><a href="article.html">帮助中心</a></span></li>
                <li><span class="phone2">028-6133 8882</span></li>
            </ul>
        </div>
    </div>
</div>
<!--------------logo搜索------------->
<div class="wt1080 header">
    <div class="search fl"><a href="/index"><img src="/static/res/static/img/logo.png"></a></div>
    <div class="search fl">
        <div>
            
        </div>
        
    </div>
    <a class="my_shop fr" style="background:#cfb2f6" href="/shopcart">我的购物车<span style="background:#ff9900">2</span></a>
    <div class="clear"></div>
</div>
<!--------------导航------------------>
<div class="nav" style="border-bottom-color:#cfb2f6 ">
    <div class="wt1080">
        <ul>
            <li>
                <a href="/index" class="current"><span>首页</span></a>
            </li>
            <li>
                <a href="lanmu.html"><span>母婴专区</span></a>
                    <div class="details">

                                    <div class="item">
                                        <p class="title"><a href="lanmu.html">奶粉</a></p>
                                        <div class="ctgnamebox">
                                            <a href="liebiao.html" class="current">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <p class="title"><a href="#">奶粉</a></p>
                                        <div class="ctgnamebox">
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <p class="title"><a href="lanmu.html">奶粉</a></p>
                                        <div class="ctgnamebox">
                                            <a href="liebiao.html" class="current">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <p class="title"><a href="lanmu.html">奶粉</a></p>
                                        <div class="ctgnamebox">
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                            <a href="liebiao.html">爱他美</a>
                                        </div>
                                    </div>
                    </div>
            </li>
            <li><a href="lanmu.html"><span>美妆护肤</span></a></li>
            <li><a href="lanmu.html"><span>家具生活</span></a></li>
            <li><a href="lanmu.html"><span>食品营养</span></a></li>
            <li><a href="lanmu.html"><span>全球直邮</span></a></li>
            <li><a href="lanmu.html"><span>合作申请</span></a></li>
        </ul>
        <div style="clear:both"></div>
    </div>
</div>
<!---------------------导航完--------------------->
<div class="wt1080">
    <!--------------标题----------->
    <div class="my_order">
        <h1>提交订单</h1>
        <div class="place">
            <ul>
                <li class="current" ><span>1</span><p>我的购物车</p></li>
                <li class="current"><span>2</span><p>提交订单</p></li>
                <li><span>3</span><p>选择支付方式</p></li>
            </ul>
            <span class="heng"></span>
            <span class="a_heng"></span>
        </div>
    </div>
    <!-------------收货地址-------------->
    <div class="address">
        <div class="roo">收货地址<span style="background-color:#cfb2f6"></span></div>
        <div class="b_address">
            <ul>
                @foreach($add as $val)
                <li class="current" style="border-color:#cfb2f6">
                    <h1>{{$val->name}}</h1>
                    <p>地址：{{$val->huo}}-{{$val->adds}}</p>
                    <p>联系方式：{{substr_replace($val->phone,'****',3,4)}}</p>
                    <div class="operate">
                        <a href="/shopjs/{{$val->id}}/edit" class="edit" style="border-color:#cfb2f6;color:#cfb2f6">编辑</a>
                        <form action="/shopjs/{{$val->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a class="del" style="border-color:#cfb2f6;color:#cfb2f6"><input type="submit" style="border-style: none;background:transparent;line-height:27px;color:#cfb2f6" value="删除"></a>
                        </form>


                       

                    </div>
                    <div class="check"></div>
                </li>
                @endforeach
              
            </ul>
            <div class="add_address" style="border-color:#cfb2f6;"><a href="/shopjs/create" style="color:#cfb2f6">添加地址</a></div>
            <div class="clear"></div>
        </div>
    </div>
    <!---------------订单信息-------------->
    <div class="order_details">
        <div class="roo">订单信息<span style="background-color:#cfb2f6"></span></div>
        <div class="tt">
            <table>
                <tr>
                    <th width="50%">商品</th>
                    <th width="16%">单价</th>
                    <th width="16%">数量</th>
                    <th width="18%">小计</th>
                </tr>
                <tr>
                    <td>
                        <div class="pic"><img src="image/p2.jpg"></div>
                        <p class="one"><a href="#">几乎都是电视剧的好卡萨当时的萨克的哈萨</a></p>
                        <p class="two">韩国一号仓发货</p>
                    </td>
                    <td><span class="e">￥318.00</span></td>
                    <td>1</td>
                    <td><span class="u">￥318.00</span></td>
                </tr>

                <tr>
                    <td>
                        <div class="pic"><img src="image/p2.jpg"></div>
                        <p class="one"><a href="#">几乎都是电视剧的好卡萨当时的萨克的哈萨</a></p>
                        <p class="two">韩国一号仓发货</p>
                    </td>
                    <td><span class="e">￥318.00</span></td>
                    <td>1</td>
                    <td><span class="u">￥318.00</span></td>
                </tr>
            </table>
        </div>
    </div>
    <!------------------优惠卷--------------->
    <div class="coupon">
        <div class="roo">优惠卷<span style="background-color:#cfb2f6"></span></div>
        <div class="rr">
            <p>此订单暂无可用的优惠卷。您可以<a href="#">查看所有的优惠卷</a>了解使用限制。<a href="#">[了解京东优惠卷规则]</a></p>
            <div class="ff">
                <ul>
                    <li>
                        <div class="check"><img src="image/k1.png"></div>
                        <span style="color: #ff5500">200-40</span>
                        <span>全品类（除特价商品外）</span>
                        <span>有效期至2016-01-23</span>
                    </li>
                    <li>
                        <div class="check"><img src="image/k1.png"></div>
                        <span style="color: #ff5500">99-10</span>
                        <span>全品类（除特价商品外）</span>
                        <span>有效期至2016-01-23</span>
                    </li>
                </ul>
            </div>
            <p style="border-bottom: none;">共使用了<font>0</font>张优惠卷 <span>可以优惠<font>0.00</font>元</span></p>
        </div>
        <div class="kk">
            <table>
                <tr>
                    <td>2件商品，商品总金额：</td>
                    <td>￥436.00</td>
                </tr>
                <tr>
                    <td>+运费：</td>
                    <td>￥0.00</td>
                </tr>
                <tr>
                    <td>+关税：</td>
                    <td>￥0.00</td>
                </tr>
                <tr>
                    <td>-商品优惠：</td>
                    <td>￥0.00</td>
                </tr>
            </table>
            <p class="money">应付余额：<span>￥<font>436.00</font></span></p>
        </div>
        <div class='clear'></div>
        <!---------------委托下的版本---------------->
        <div class="ll">
            <div class="bb">
                <h1>个人委托申报协议</h1>
                <p>本人承诺所购买商品系个人合理自用，现委托商家代理申报，代缴税款等通关事宜，本人保证遵守《海关法》和国家相关法律法规，保证所提供的身份信息和收货信息真是完整，无侵犯他人权益的行为，以上委托关系如实填写，本人愿意接受海关，检查检疫机构及其他监管部门的监管，并承担相应法律责任。</p>
            </div>
            <div class="ss">
                <p class="bg">寄送至：{{$val->huo}}-{{$val->adds}}</p>
                <p class="bg">收货人：{{$val->name}}</p>
                 <p>联系方式：{{substr_replace($val->phone,'****',3,4)}}</p>
            </div>
            <div class="gg">
                <p>应付余额：<span>￥<font>436.00</font></span></p>
            </div>
            <a href="/zhifu"><input type="submit" value="确认提交订单" ></a>
            <div class="clear"></div>
        </div>
    </div>




</div>







<!---------------------保障------------------->
<div class="baozhang" style="background:#cfb2f6">
    <div class="wt1080">
        <ul>
            <li>
                <img src="image/c1.png">
                <p>全球正品货源</p>
            </li>
            <li>
                <img src="image/c2.png">
                <p>一件代发</p>
            </li>
            <li>
                <img src="image/c3.png">
                <p>全球直邮</p>
            </li>
            <li>
                <img src="image/c5.png">
                <p>售后无忧</p>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<!---------------底部--------------->
<div class="footer">
    <div class="wt1080" style="position: relative">
        <div class="a_footer">
            <div class="left">
                <a href="#"><img src="image/logo.png"></a>
                <p class="lianxi">
                    <a href="#"><img src="image/weixin.png"></a>
                    <a href="#"><img src="image/weibo.png"></a>
                    <a href="#"><img src="image/QQ.png"></a>
                    <span>028-6133 8882</span>
                </p>
            </div>
            <div class="right">
                <ul>
                    <li>
                        <dl>
                            <dt><a href="#">新手指南</a></dt>
                            <dd><a href="#">购物流程</a></dd>
                            <dd><a href="#">支付方式</a></dd>
                            <dd><a href="#">通关关税</a></dd>
                            <dd><a href="#">常见问题</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="#">新手指南</a></dt>
                            <dd><a href="#">购物流程</a></dd>
                            <dd><a href="#">支付方式</a></dd>
                            <dd><a href="#">通关关税</a></dd>
                            <dd><a href="#">常见问题</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="#">新手指南</a></dt>
                            <dd><a href="#">购物流程</a></dd>
                            <dd><a href="#">支付方式</a></dd>
                            <dd><a href="#">通关关税</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><a href="#">新手指南</a></dt>
                            <dd><a href="#">购物流程</a></dd>
                            <dd><a href="#">支付方式</a></dd>
                            <dd><a href="#">通关关税</a></dd>
                            <dd><a href="#">常见问题</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="weixin"><img src="image/weixin1.png"><p>扫描二维码下载APP</p></div>
        <!------------------------>
        <p class="beian">Copyright © 2016 洋店网.版权所有.备案号：京ICP证35124521号.技术支持：西部网络</p>
    </div>
</div>
</body>
</html>
