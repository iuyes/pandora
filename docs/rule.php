<?php $page = "rule" ?>
<?php $title="代码规范"?>
<?php $description = "本项目基于cnBootstrap开源项目创建，致力于前端快捷开发！" ?>
<?php include("./common/meta.php"); ?>
</head>
<body>
<?php include("./common/header.php"); ?>

<div class="wrap">
    <div class="sidebar">
        <ul class="nav none">
            <li><a href="#overview">概述</a></li>
            <li><a href="#document">文档结构</a></li>
            <li><a href="#naming">命名规范</a></li>
            <li><a href="#html">HTML 书写规范</a></li>
            <li><a href="#css">CSS 编码规范</a></li>
            <li><a href="#javascript">JavaScript 编码风格</a></li>
            <li><a href="#json">JSON 格式规范</a></li>
            <li><a href="#readme">说明文档书写规范</a></li>
            <li><a href="#edm">EDM 制作规范</a></li>
        </ul>
    </div> <!-- // div.sidebar -->
    <div class="main">
        <section id="overview">
            <h1>规范说明 <small></small></h1>
            <blockquote>
                <p>写在规则前面的话——项目的可维护性第一。</p>
                <small>阿当</small>
            </blockquote>
            <p><p>此规范为参考规范，不全是硬性要求，部分硬性约定见 <a href="rule.php#document">文档结构</a> &amp; <a href="rule#">书写规范</a>,统一团队编码规范和风格。</p>
            <p>目标是让所有代码都是有规可循的，并且能够得到沉淀，减少重复劳动。</p>
            <div class="tips"><strong>大家一起完善。 </strong> 也可以参考引自：<a href="https://github.com/aralejs/aralejs.org/wiki">开发规范</a>来完善。</div>
        </section>
        
        
        
        <section id="document">
        <h1>文档结构</h1>
<pre class="prettyprint linenums">

</pre>

        <h2>目录、文档结构</h2>
        <ol>
            <li>文件和目录名只能包含 [a-z\d-]，并以英文字母开头</li>
            <li>首选合适的英文单词 </li>
            <li>data api 命名为小写并用连字符，如 data-trigger-type</li>
            <li>事件名为驼峰，如 .trigger('itemSelected')</li>
            <li>符合规范
                <ul>
                    <li>常量全大写 UPPERCASE_WORD</li>
                    <li>变量驼峰 camelName</li>
                    <li>类名驼峰，并且首字母要大写 CamelName</li>
                </ul>
            </li>
        </ol>
        </section>
        
        
        
        <section id="naming">
            <h1>命名规范</h1>
            <ol>
                <li>文件和目录名只能包含 [a-z\d-]，并以英文字母开头</li>
                <li>首选合适的英文单词 </li>
                <li>data api 命名为小写并用连字符，如 data-trigger-type</li>
                <li>事件名为驼峰，如 .trigger('itemSelected')</li>
                <li>符合规范
                    <ul>
                        <li>常量全大写 UPPERCASE_WORD</li>
                        <li>变量驼峰 camelName</li>
                        <li>类名驼峰，并且首字母要大写 CamelName</li>
                    </ul>
                </li>
            </ol>
            <h3>常用词命名统一表</h3>
            <h5>规则：</h5>
            
            
        </section>
        
        
        
        <section id="html">
            <h1>HTML书写规范</h1>
            
            <h4>* 第一行统一使用HTML5标准：&lt;!DOCTYPE html&gt;</h4>
            <p>HTML5 头部声明简单有效，故在每个HTML页面强制执行此标准模式。</p>
<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8" /&gt;
&lt;title&gt;your title&lt;/title&gt;
&lt;link rel="stylesheet" href="css_example_url" /&gt;
&lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
...
&lt;/body&gt;
&lt;/html&gt;
</pre>
            
            <h4>Meta 的使用：（需根据具体项目选择）参考 <a href="https://github.com/webcoding/cool-head">cool-head</a> </h4>
            <ul>
                <li> <code>&lt;img&gt;</code> 标签默认缺省格式：<code>&lt;img src="xxx.png" alt="缺省时文字" /&gt;</code> 避免出现 <a href="http://js8.in/555.html" title="src=&quot;&quot; 问题"> src="" 问题</a> </li>
                <li> <code>&lt;a&gt;</code> 标签缺省格式：<code>&lt;a href="###" title="链接名称"&gt;xxx&lt;/&gt;</code> 注：<code>target="_blank"</code> 根据需求决定 </li>
                <li><a>标签预留链接占位符使用 <code>###</code>，参见：</a> <a href="http://www.v2ex.com/t/48511/" title="a标签占位符问题">a标签占位符问题</a></li>
                <li>所有标签需要符合XHTML标准闭合</li>
                <li>一律统一标签结尾斜杠的书写形式：<code>&lt;br /&gt;</code> <code>&lt;hr /&gt;</code> 注意之间空格</li>
                <li>避免使用已过时标签，如：<code>&lt;b&gt;</code> <code>&lt;u&gt;</code> <code>&lt;i&gt;</code> 而用 <code>&lt;strong&gt;</code> <code>&lt;em&gt;</code> 等代替</li>
                <li>使用 <code>data-xxx</code> 来添加自定义数据，如：<code>&lt;input data-xxx="yyy"/&gt;</code> </li>
                <li>避免使用 <code>style="xxx:xxx;"</code> 的内联样式表</li>
                <li>特殊符号使用参考 <a href="http://www.w3school.com.cn/html/html_entities.asp">HTML 符号实体</a> </li>
            </ul>
            <h3>HTML 书写规范</h3>
            <ul>
                <li>无特殊说明，编码统一为utf-8；</li>
            </ul>
            <h4>HTML 细化规范</h4>
            <ul>
                <li>HTML <code>head</code> 部分的结构参看：<a href="https://github.com/webcoding/cool-head">cool-head</a> (摘取必要内容即可)</li>
                <li> <code>css</code> 文件置于都 <strong>头部</strong> </li>
                <li> <code>jQuery</code> 及 <code>Google Analytics</code> 引用置于 <strong>头部</strong> </li>
                <li>其他效果 <code>js</code> 及 <code>统计代码</code> 文件置于 <strong>尾部</strong> </li>
                <li>HTML 代码尽量过一遍 <a href="http://html5.validator.nu/">HTML5 验证</a> </li>
                <li>HTML 占位图片使用 <a href="http://temp.im/">temp.im</a> &amp; <a href="http://placehold.us/">placehold.us</a> 图片服务</li>
            </ul>
            
            <h4>书写规范</h4>
            <ul>
                <li>使用四个空格的 soft-tabs 缩进</li>
                <li> <code>body</code> 里应每层嵌套元素缩进一次（4个空格）</li>
                <li>请务必实用双引号，而非单引号</li>
                <li>不要自闭元素包括一个斜线</li>
            </ul>
            
            <h3>实用大于语义</h3>
            <p>努力保持HTML的标准和语义，但不要牺牲实用性。用最少的复杂度尽可能少的标签实现需求。</p>
            
            <h3>属性顺序</h3>
            <p>HTML 属性应该遵循特定的顺序，以便能更易阅读代码。</p>
            <ul>
                <li>class</li>
                <li>id</li>
                <li>data-*</li>
                <li>for|type|href</li>
            </ul>
            <p>比如你的代码看起来应该像这样:</p>
<pre class="prettyprint linenums">
&lt;a class="" id="" data-modal="" href=""&gt;链接示例&lt;/a&gt;
</pre>
        </section>
        
        
        
        <section id="css">
            <h2>CSS 书写规范</h2>
            <p>外部CSS引用，必须使用如下格式( rel 在前，href 在后，无 type="text/css" 及 charset )：</p>
            <pre class="prettyprint linenums">&lt;link rel="stylesheet" href="http://pic.lvmama.com/styles/v3/combo.css" &gt;</pre>
            <h3>CSS 注意事项</h3>
            <ul>
                <li>无特殊说明，编码统一为utf-8；</li>
                <li>防止文件合并及编码转换时造成问题，请将样式中文字体名字改成对应的英文名字（unicode码），如：宋体（ \5b8b\4f53）微软雅黑（”Microsoft YaHei”,”\5FAE\8F6F\96C5\9ED1″）；</li>
                <li>书写代码前，考虑并提高样式重复使用率；</li>
                <li>禁止使用 <code>expression</code> 表达式；</li>
                <li>禁止滥用 <code>!important</code>；</li>
                <li>能缩写的尽量缩写，如 <code>padding:5px 0 0 5px;</code>；</li>
                <li>层级(z-index)必须清晰明确，适当划分组件层级范围，禁止层级间盲目攀比；</li>
                <li>为方便组件模块化和提高弹性，正常情况下，为避免外边界冲突，组件不应设置外边界，外边界用组合css方式实现，如：m10{margin:10px}mt10{margin-top:10px}等；</li>
                <li>必须为大区块&amp;重要模块的样式添加注释，小区块适量注释；</li>
                <li>正式发布前应进行压缩，压缩后文件的命名应添加”.min”后缀；</li>
                <li>代码缩进与格式：请参照以下 CSS 书写规范；</li>
            </ul>
        
            <h3>CSS 书写规范</h3>
            <p>以下书写规范针对组件开发使用，非组件书写格式建议使用单行式排版。</p>
            <ul>
                <li>使用四个空格的 soft-tabs 缩进</li>
                <li>写组选择器时，保持选择器各占一行</li>
                <li>在属性块的左 “{” 前应该有一个空格</li>
                <li>关闭属性块的右 “}” 要新起一行</li>
                <li>每个属性的 “:” 后包含一个空格</li>
                <li>每个属性应该自己独占一行</li>
                <li>分割选择器的 “,” 后应该包含一个空格</li>
                <li>Don't include spaces after commas in RGB or RGBa colors, and don't preface values with a leading zero</li>
                <li>小写所有16进制值, 例如, <code>#fff</code> 而非 <code>#FFF</code></li>
                <li>使用简写16进制值, 例如, <code>#fff</code> 而非 <code>#ffffff</code></li>
                <li>选择器中引用属性值, 例如, <code>input[type="text"]</code>
                </li>
                <li>避免0值设置单位, 例如, <code>margin: 0;</code> 而非 <code>margin: 0px;</code></li>
            </ul>
            <h4>为方便调试，css底部必须书写此css名称以及功能描述，如下：</h4>
<pre class="prettyprint linenums">
/* 
 @名称: channel.css
 @功能: 各大频道页样式 //注意适当的隔行划分
 */

/* 频道全局样式 */
.col-w { width: 780px; float: right;}
.aside { width: 200px; float: left;}


/* 频道侧边栏 */
.side-box { margin-bottom: 15px;}


/* 频道主内容区域 */
.ctitle { }


/* 特色酒店 */
.pro-search { }


/* 火车票 */
.ticket-search { }
</pre>

            <h4>错误示例：</h4>
<pre class="prettyprint linenums">
.selector, .selector-secondary, .selector[type=text] {
    padding:15px;
    margin:0px 0px 15px;
    background-color:rgba(0, 0, 0, 0.5);
    box-shadow:0 1px 2px #CCC,inset 0 1px 0 #FFFFFF
}
</pre>

            <h4>正确示例：</h4>
<pre class="prettyprint linenums">
.selector,
.selector-secondary,
.selector[type="text"] {
    padding: 15px;
    margin: 0 0 15px;
    background-color: rgba(0,0,0,.5);
    box-shadow: 0 1px 2px #ccc, inset 0 1px 0 #fff;
}
</pre>


            <p>常见的CSS术语，请参见 <a href="http://en.wikipedia.org/wiki/Cascading_Style_Sheets#Syntax">syntax section of the Cascading Style Sheets article</a> on Wikipedia.</p>
            
            <h3>属性顺序</h3>
<pre class="prettyprint linenums">
.declaration-order {
    /* Positioning 定位 */
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 100;
    
    /* Box-model 盒模型 */
    display: block;
    float: right;
    width: 100px;
    height: 100px;
    
    /* Typography 排版 */
    font: normal 13px "Helvetica Neue", sans-serif;
    line-height: 1.5
    color: #333;
    text-align: center;
    
    /* Visual 视觉 */
    background-color: #f5f5f5;
    border: 1px solid #e5e5e5;
    border-radius: 3px;
    
    /* Misc 其他 */
    opacity: 1;
}
</pre>

            <p>相关属性应放在一起，将定位与盒模型属性写在最前面，其次是排版和视觉效果的属性。</p>
            <p>关于属性顺序的完整列表，请参考 <a href="http://twitter.github.com/recess">Recess</a>.</p>
            
            <h3>格式化例外</h3>
            <p>某些情况下，这是有道理的，稍微偏离默认的 <a href="#css-syntax">语法</a>.</p>
            
            <h4>前缀属性</h4>
            <p>当使用供应商前缀的属性时，每个属性缩进到vlaue值垂直对齐的位置，方便多行编辑。</p>

<pre class="prettyprint linenums">
/* Corner radius-圆角 */
.selector {
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}
</pre>

            <p>注：<code>-khtml-border-radius: 3px;</code> 是苹果的那个浏览器的，现在使用 <code>-webkit-</code></p>
            <p>在 Textmate、Sublime Text 2 以及 notepad++等工具中, 都支持多行编辑。</p>
            
            <h4>单一属性的书写规则</h4>
            <p>在有些情况下，每个样式只有一个属性，考虑到可读性及更快地编辑删除等，保持同一行书写。</p>

<pre class="prettyprint linenums">
.span1 { width: 60px; }
.span2 { width: 140px; }
.span3 { width: 220px; }

.sprite {
    display: inline-block;
    width: 16px;
    height: 15px;
    background-image: url(../img/sprite.png);
}
.icon           { background-position: 0 0; }
.icon-home      { background-position: 0 -20px; }
.icon-account   { background-position: 0 -40px; }
</pre>

            <h3>可读性</h3>
            <p>代码是由人来书写和维护的。确保你的代码有很好的注释描述，以便他人使用。</p>
            
            <h4>注释</h4>
            <p>好的代码都有一个良好的代码注释而不仅仅是一个类名</p>

<h4>Bad example:</h4>
<pre class="prettyprint linenums">
/* Modal header */
.modal-header {
  ...
}
</pre>

<h4>Good example:</h4>
<pre class="prettyprint linenums">
/* Wrapping element for .modal-title and .modal-close */
.modal-header {
  ...
}
</pre>

            <h4>类名与命名</h4>
            <ul>
                <li>保持类名使用小写字母或连接符 (不要使用下划线或驼峰命名法)</li>
                <li>避免使用随意的首字符命名法</li>
                <li>保持命名尽可能短并简洁</li>
                <li>使用有意义的命名；使用结构化或目的性的意义名称</li>
                <li>根据最近的父组件基类作为命名前缀</li>
                <li>为JavaScript预留钩子的命名，请以 JS_ 起始，比如：JS_ui-tab, JS_slidebox；或者使用 data-* 挂钩JS功能</li>
            </ul>

<h4>Bad example:</h4>
<pre class="prettyprint linenums">
.t { ... }
.red { ... }
.header { ... }
</pre>

<h4>Good example:</h4>
<pre class="prettyprint linenums">
.tweet { ... }
.important { ... }
.tweet-header { ... }
</pre>

            <h4>选择器</h4>
            <ul>
                <li>在通用的元素标签中使用类</li>
                <li>要保持尽量简短，并限制每个选择器最多三个class</li>
                <li>必要时使用最近的父类 (如，在不使用前缀类时)</li>
            </ul>

<h4>Bad example:</h4>
<pre class="prettyprint linenums">
span { ... }
.page-container #stream .stream-item .tweet .tweet-header .username { ... }
.avatar { ... }
</pre>

<h4>Good example:</h4>
<pre class="prettyprint linenums">
.avatar { ... }
.tweet-header .username { ... }
.tweet .avatar { ... }
</pre>

            <h3>组织</h3>
            <ul>
                <li>组织代码段的组成部分</li>
                <li>指定一个一致的注释层次结构</li>
                <li>如果使用多个css文件，则按组件进行划分</li>
            </ul> 
            
            
            <p>更多详情常见：CSS目录下 readme.md 文件</p>
        </section>
        
        
        
        <section id="javascript">
            <h1>JavaScript 编码风格</h1>
            <h3>1.1 缩进层级</h3>
          <p>每一行的层级由4个空格组成，避免使用制表符（Tab）进行缩进</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
if (true) {
doSomething();
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
if (true) {
    doSomething();
}
</pre>
          <h3>1.2 行的长度</h3>
          <p>每行长度不应该超过80个字符。如果一行多于80个字符，应当在一个运算符（逗号，加号等）后换行。下一行应当增加两级缩进（8个字符）</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
doSomething(argument1, argument2, argument3, argument4,
    argument5);

doSomething(argument1, argument2, argument3, argument4
        ,argument5);
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
doSomething(argument1, argument2, argument3, argument4,
        argument5);
</pre>
          <h3>1.3 原始值</h3>
          <p>字符串应当始终使用双引号（避免使用单引号）且保持一行。避免在字符串中使用斜线另起一行。（如果一行放不下请用+连接）。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
//不好的写法：单引号
var name = 'John.Chen';

//不好的写法：字符串结束之前换行
var longString = "Here's the story, of a man\
named Brady";
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var name = "John.Chen";

var longString = "Here's the story, of a man"+
                 "named Brady";
</pre>
          <p>数字应当使用十进制整数，科学计数法标示整数，十六进制整数，或者十进制浮点小数，小数点前后应当至少保留一位数字。避免使用八进制直接量。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
//不好的写法：十进制数字以小数点结尾
var price = 10.;

//不好的写法：十进制数字以小数点开头
var price = .1;

//不好的写法：八进制（base 8）写法已废弃
var num = 010;
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var count = 10;

var price = 10.0;
var price = 10.00;

var num = 0xA2;

var num = le23;
</pre>
          <p>特殊值 null 除了下述情况下应当避免使用</p>
          <ul>
            <li>用来初始化一个变量，这个变量可能被赋值为一个对象。</li>
            <li>用来和一个已经初始化的变量比较，这个变量可以是也可以不是一个对象。</li>
            <li>当函数的参数期望是对象时，被用作参数传入。</li>
            <li>当函数的返回值期望是对象时，被用作返回值传出</li>
          </ul>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
//不好的写法：和一个未被初始化的变量比较
var person;
if(person != null){
    doSomenthing();
}

//不好的写法：通过测试判断某个参数是否被传递
function doSomething(arg1, arg2, arg3, arg4){
    if (arg4 != null) {
        doSomethingElse();
    }
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var person = null;

function getPerson(){
    if (condition) {
        return new Person("John.Chen");
    }else{
        return null;
    }
}

var person = getPerson();
if (person !== null) {
    doSomething();
}
</pre>
          <p>避免使用特殊值 undefined。判断一个变量是否定义应当使用 typeof 操作符。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
//不好的写法： 使用了undefined直接量
if (variable == undefined){
    doSomething();
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
if (typeof variable === "undefined"){
    doSomething();
}
</pre>
          <h3>1.4 运算符间距</h3>
          <p>二元运算符前后必须使用一个空格来保持表达式的整洁。操作符包括赋值运算符合逻辑运算符。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
//不好的写法： 丢失了空格
var found =(values[i]===item);

if (found&&(count>10)){
    doSomething();
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var found = (values[i] === item);

if (found && (count > 10)){
    doSomething();
}
</pre>
          <h3>1.5 括号间距</h3>
          <p>当使用括号时，紧接左括号之后和紧接右括号之前不应该有空格</p>
          <h4>Bad example:</h4>
<pre class="prettyprint linenums">
var found = ( values[i] === item );

if ( found && ( count > 10 ) ){
    doSomething();
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var found = (values[i] === item);

if (found && (count > 10)){
    doSomething();
}
</pre>
          <h3>1.6 对象直接量</h3>
          <p>对象直接应当使用如下格式</p>
          <ul>
              <li>起始做花括号应当同表达式保持一行</li>
              <li>每个属性的名值对应当保持一个缩进，第一个属性应当在做花括号后另起一行。</li>
              <li>每个属性的名值对应当使用不含引号的属性名，其后紧跟一个冒号（之前不好空格），而后是值。</li>
              <li>倘若属性值是函数类型，函数体应当在属性名之下另起一行，而且其后均应保留一个空行。</li>
              <li>一组相关的属性前后可以插入空行提升代码的可读性</li>
              <li>结束的右花括号应当独占一行</li>
          </ul>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
//不好的写法：不恰当的缩进
var object = {
                key1:value1,
                key2:value2
}

//不好的写法：函数体周围缺少空行
var object ={
    key1: value1,
    key2: value2,
    func: function() {
        doSomething()
    },
    key3:value3
};
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var object = {
    
    key1: value1,
    key2: value2,
    
    func: function() {
        doSomething();
    },
    
    key3: value3
};
</pre>
            <p>当对象字面量作为函数参数时，如果值是变量，起始花括号应当同函数名在同一行。所有其余先前列出的规则同样适用。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
//不好的写法：所有代码在一行上
doSomething({ key1: value1, key2: value2});
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
doSomething({
    key1: value1,
    key2: value2
});
</pre>
            <h3>1.7 注释</h3>
            <p>频繁地使用注释有助于他人理解你的代码。如下情况应当使用注释。</p>
            <ul>
                <li>代码晦涩难懂。</li>
                <li>可能被误认认为错误的代码。</li>
                <li>必要但并不明显的针对特定浏览器的代码。</li>
                <li>对于对象、方法或者属性，生成文档是必要的（使用恰当的文档注释）。</li>
            </ul>
            <h4>1.7.1 单行注释</h4>
            <p>单行注释应当用来说明一行代码或者一组相关的代码。单行注释可能有三种使用方式。</p>
            <ul>
                <li>独占一行的注释，用来解释下一行代码。</li>
                <li>在代码行的尾部的注释，用来解释它之前的代码。</li>
                <li>多行，用来注释掉一个代码块。</li>
            </ul>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：注释之前没有空行
if (true) {
    // 如果代码执行到这里，则表明通过了所以的安全性检查
    allowed();
}

// 不好的写法：错误的缩进
if (true) {

// 如果代码执行到这里，则表明通过了所以的安全性检查
    allowed();
}

// 不好的写法：这里应当用多行注释
// 接下来的这段代码非常难，那么，让我详细解释下
// 这段代码的作用是首先判断条件是否为真
// 只有为真时才会执行。这里的条件是通过
// 多个函数计算出来的，在整个会话生命周期内
// 这个值是可以被修改的
if (true) {
    // 如果代码执行到这里，则表明通过了所以的安全性检查
    allowed();
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
if (true) {
    
    // 如果代码执行到这里，则表明通过了所以的安全性检查
    allowed();
}
</pre>
            <p>对于代码行尾单行注释的情况，应确保代码结尾同注释之间至少一个缩进。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：代码和注释间没有足够的空格
var result = something + somethingElse;// somethingElse will never be null;
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var result = something + somethingElse; // somethingElse will never be null;
</pre>
            <p>注释一个代码块时在连续多行使用单行注释是唯一可以接受的情况。多行注释不应当在这种情况下使用。</p>
<pre class="prettyprint linenums">
// if (true) {
//     doSomething();
// }
</pre>
            <h4>1.7.2 多行注释</h4>
            <p>多行注释应当在代码需要更多文字去解释的时候使用。每个多行注释都至少有如下三行</p>
            <ul>
                <li>首行仅仅包括/*注释开始。该行不应当有其他文字。</li>
                <li>接下来的行以*开头并保持左对齐。这些行可以有文字描述。</li>
                <li>最后一行以*/开头并同先前行保持对齐。也不应当有其他文字。</li>
            </ul>
            <p>多行注释的首行应当保持同其它描述代码的相同层次的缩进。后续的每行应当有同样层次的缩进并附加一个空格（为了适当保持*字符的对齐）。每一个
            多行代码之前应当预留一个空行。
            </p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：注释之前无空行
if (true) {
    /*
     * 如果代码执行到这里
     * 说明通过了所有的安全性检测
     */
     allowed();
}

// 不好的写法：星号后没有空格
if (true) {

    /*
     *如果代码执行到这里
     *说明通过了所有的安全性检测
     */
     allowed();
}

// 不好的写法：错误的缩进
if (true) {

/*
 * 如果代码执行到这里
 * 说明通过了所有的安全性检测
 */
     allowed();
}

// 不好的写法：代码尾部注释不要用多行注释格式
var result = something + somethingElse; /* somethingElse will never be null */;
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
if (true) {

    /*
     * 如果代码执行到这里
     * 说明通过了所有的安全性检测
     */
     allowed();
}
</pre>
            <h4>1.7.3 注释声明</h4>
            <p>注释有时候也可以用来给一段代码声明额外的信息。这些声明的格式以单个单词打头并紧跟一个冒号。可使用的声明如下</p>
            <h6>TODO</h6>
            <p>说明代码还未完成。应当包含下一步要做的事情。</p>
            <h6>HACK</h6>
            <p>表示代码实现走了一个捷径。应当包含为何使用 hack 的原因。这也可能表明该问题可能会有更好的解决方法。</p>
            <h6>XXX</h6>
            <p>说明代码是有问题的并应当尽快修复。</p>
            <h6>FIXME</h6>
            <p>说明代码是有问题的并应当尽快修复。重要性略次于 XXX。</p>
            <h6>REVIEW</h6>
            <p>说明代码任何可能的改动都需要评审。</p>
            <p>注：这些声明可能在一行或多行注释中使用，并且应当遵循同一般注释类型相同的格式规则。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：注释声明空格不正确
// TODO： 我希望找到一种更快的方式
doSomething();

//不好的写法：代码和注释应当保持同样的缩进
    // REVIEW：有更好的方法吗？
if (document.all) {
    doSomething();
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
// TODO：我希望找到一种更快的方式
doSomething();

/*
 * HACK：不得不针对 IE 做的特殊处理。我计划后续有时间
 * 重写这部分。这些代码可能需要在 v1.2 版本之前替换掉
 */
if (document.all) {
    doSomething();
}

// REVIEW：有更好的方法吗？
if (document.all) {
    doSomething();
}
</pre>
            
            <h4>1.7.4 变量声明</h4>
            <p>所有的变量在使用前都应当事先定义。变量定义应当放在函数开头，使用一个var表达式每行一个变量。除了首行，所有行都应当多一次缩进以使变量名能够垂直
               方向对齐。变量定义时应当初始化，并且赋值操作符应当保持一致的缩进。初始化的变量应当在未初始化变量之前。
            </p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：不恰当的初始化赋值
var count = 10,
   name= "John.Chen",
    empty;
    
// 不好的写法：错误的缩进
var count = 10,
name= "John.Chen",
empty;

// 不好的写法：多个定义写在一行
var count = 10, name= "John.Chen",
    empty;
    
// 不好的写法：未初始化的变量放在最前面
var empty,
    count = 10,
    name= "John.Chen";
    
// 不好的写法：多个var表达式
var count = 10,
    name= "John.Chen";
var empty;
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var count = 10,
    name = "John.Chen",
    empty;
</pre>

            <h4>1.7.5 函数声明</h4>
            <p>函数应当在使用提前定义。一个不是作为方法的函数（也就是说没有作为一个对象的属性）应当使用函数定义的格式（不是函数表达式和 Function 构造器格式）。
               函数名和圆括号之间不应当有空格。结束的圆括号和右边的花括号之间应该留一个空格。右侧的花括号应同 function 关键字保持同一行。开水喝结束括号之间不应该有空格
               。参数名之间应当在逗号之保留一个空格。函数体应当保持一级缩进。
            </p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：第一行不恰当的空格
function doSomething (arg1, arg2) {
    return arg1 + arg2;
}

// 不好的写法：函数表达式
var doSomething = function(arg1, arg2) {
    return arg1 + arg2;
}

// 不好的写法： 左侧的花括号位置不对
function doSomething(arg1, arg2)
{
    return arg1 + arg2;
}

//错误的写法：使用了 Function 构造器
var doSomething = new Function("arg1", "arg2", "return arg1 + arg2;");
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
function doSomething(arg1, arg2) {
    return arg1 + arg2;
}
</pre>
            <p>其他函数内部定义的函数应当在 var 语句后立即定义。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：inner 函数的定义先于变量
function outer() {
    function inner() {
        //code
    }
    var count = 10,
        name = "John.Chen";
    //调用 inner() 代码
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
function outer() {
    var count = 10,
        name = "John.Chen";
    function inner() {
        //code
    }
    //调用 inner() 代码
}
</pre>
            <p>匿名函数可能作为方法赋值给对象，或者作为其他函数的参数。function 关键字同开始括号之间不应有空格。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：不正确的空格
object.method = function () {
    //  code
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
object.method = function() {
    //  code
}
</pre>
            <p>立即被调用的函数应当在函数调用的外层圆括号包裹。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：函数调用外层没有用圆括号包裹
var value = function() {
    //function body
    
    return {
        message: "Hi"
    };
}

// 不好的写法：圆括号位置不当
var value = (function() {
    //function body
    
    return {
        message: "Hi"
    };
})();
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var value = (function() {
    //function body
    
    return {
        message: "Hi"
    };
}());
</pre>
            
            <h4>1.7.6 命名</h4>
            <p>变量和函数在命名时应当小心。命名应仅限于数字字母字符，某些情况下也可以使用下划线。最好不要在任何命名中使用美元符号（$）或者反斜杠（\）。</p>
            <p>变量命名应当采用驼峰命名格式，首字母小写，每个单词首字母大写。变量名的第一个单词应当是一个名词（而非动词）以避免同函数混淆。不要在变量命名中使用下划线。</p>
            <h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：大写字母开头
var AccountNumber = "8401-1";

//不好的写法：动词开头
var getAccountNumber = "8401-1";

//不好的写法：使用下划线
var account_number = "8401-1";
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var accountNumber = "8401-1";
</pre>
            <p>函数命名也应当采用驼峰命名格式。函数名的第一个单词应当是动词（而非名词）来避免同变量混淆。函数名中最好不要使用下划线。</p>
<pre class="prettyprint linenums">
// 不好的写法：大写字母开头
function DoSomething() {
    //code
}

// 不好的写法：名词开头
function car() {
    //code
}

// 不好的写法：使用下划线
function do_something() {
    //code
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
function doSomething() {
    //code
}
</pre>
            <p>构造函数——通过 new 运算符创建新对象的函数——也应当以驼峰格式命名并且首字符大写。构造函数名词应当以非动词开头，因为 new 代表着创建一个对象实例的操作。</p>
<pre class="prettyprint linenums">
// 不好的写法：小写字母开头
function myObject() {
    //code
}

// 不好的写法：使用下划线
function My_Object() {
    //code
}

// 不好的写法： 动词开头
function getMyObject() {
    //code
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
function MyObject() {
    //code
}
</pre>
            <p>常量（值不会被改变的变量）的命名应当是所有字母大写，不同单词之间用单个下划线隔开。</p>
<pre class="prettyprint linenums">
// 不好的写法：驼峰形式
var totalCount = 10;

// 不好的写法：混合形式
var total_COUNT = 10;
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var TOTAL_COUNT = 10;
</pre>
            <p>对象的属性同变量的命名规则相同。对象的方法同函数的命名规则相同。如果属性或者方法是私有的，应当在之前加一个下划线。</p>
<pre class="prettyprint linenums">
var object = {
    _count: 10,
    
    _getCount: function() {
        return this._count;
    }
}
</pre>
            <h4>1.7.7 严格模式</h4>
            <p>严格模式应当仅限在函数内部使用，千万不要在全局使用。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：全局使用严格模式
"use strict"

function doSomething() {
    //code
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
function doSomething() {
    "use strict"
    
    //code
}
</pre>
            <p>如果你期望在多个函数中使用严格模式而不需要多次声明 "use strict" ，可以使用立即被调用的函数。</p>
<pre class="prettyprint linenums">
(function() {
    "use strict"
    
    function doSomething(){
        //code
    }
}());
</pre>
            <h4>1.7.8 赋值</h4>
            <p>当给变量赋值时，如果右侧是含有比较语句的表达式，需要用圆括号包裹。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：遗漏圆括号
var same = i < count;
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var same = (i < count);
</pre>
            <h4>1.7.9 符号运算符</h4>
            <p>使用 === （严格相等） 和 ！== （严格不相等）代替 == （相等）和 ！= （不等）来避免弱类型转换错误。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：使用 == 
var same = (a == b);
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var same = (a === b);
</pre>
            <h4>1.7.10 三元操作符</h4>
            <p>三元运算符应当仅仅用在条件赋值语句中， 而不要作为 if 语句的替代品</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：没有赋值，应当使用 if 表达式
condition ? doSomething() : doSomethingElse();
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var value = condition ? value1 : value2;
</pre>
            
            <h4>1.7.11 语句</h4>
            <h6>简单语句</h6>
            <p>没一行最多只包含一条语句。所有简单的语句都应该以分号（;）结束。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法： 多个表达式写在一行
count++; a = b;
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
count++;
a = b;
</pre>
            <h6>返回语句</h6>
            <p>返回语句当返回一个值的时候不应当使用圆括号包裹，除非在某些情况下这么做可以让返回值更容易理解。</p>
<pre class="prettyprint linenums">
return;

return collection.size();

return (size > 0 ? size : defaultSize);
</pre>
            <h6>复合语句</h6>
            <p>复合语句是大括号括起来的语句列表。</p>
            <ul>
                <li>括起来的语句应当较复合语句多缩进一个层次。</li>
                <li>开始的大括号应当在复合语句所在行的末尾；结束的大括号应当独占一行且同复合语句的开始保持同样的缩进。</li>
                <li>当语句是控制结构的一部分时，诸如if或者for语句，所有语句都需要大括号起来，也包括单个语句。这个约定使得我们更方便地添加语句而不用担心忘记加括号而引起bug。</li>
                <li>想if一样的语句开始的关键词，其后应该紧跟一个空格，起始大括号应当在空格之后。</li>
            </ul>
            <h6>if 语句</h6>
            <p>if语句应当是下面的格式</p>
<pre class="prettyprint linenums">
if (true) {
    doSomething();
}

if (true) {
    doSomething();
} else {
    doSomething();
}

if (true) {
    doSomething();
} else if (true) {
    doSomething();
} else {
    doSomething();
}
</pre>
            <p>绝不允许在if语句省略花括号。</p>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法： 不恰当的空格
if(true){
    doSomething();
}

// 不好的写法：遗漏花括号
if (true)
    doSomething();
    
// 不好的写法：所有代码写在一行
if (true) { doSomething(); }

// 不好的写法：所有代码卸载一行且没有花括号
if (true) doSomething(); 
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
if (true) {
    doSomething(); 
}
</pre>
            <h6>for 语句</h6>
            <p>for 类型的语句应当是下面的格式</p>
<pre class="prettyprint linenums">
for (initialization; condition; update) {
    statements;
}

for (variable in object) {
    statements;
}
</pre>
            <P>for 语句的初始化不应当有变量声明</P>
<h4>Bad example:</h4>
<pre class="prettyprint linenums">
// 不好的写法：初始化时候声明变量
for (var i = 0, len = 10; i < len; i++) {
    //code    
}

// 不好的写法：初始化时候声明变量
for (var prop in object) {
    //code
}
</pre>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
var i,
    len;
for (i = 0, len = 10; i < len; i++) {
    //code
}
</pre>
            <p>注：当使用 for-in 语句时，记得使用 hasOwnProperty() 进行双重检查来过滤出对象的成员</p>
            <h6>while 语句</h6>
            <p>while 类的语句应当是下面的格式。</p>
<pre class="prettyprint linenums">
while (true) {
    //code
}
</pre>
            <h6>do 语句</h6>
            <p>do 类的语句应当是下面的格式。</p>
<pre class="prettyprint linenums">
do {
    //code
} while (true)
</pre>
            <h6>switch 语句</h6>
            <p>switch 类的语句应当是如下格式。</p>
<pre class="prettyprint linenums">
switch (expression) {
    case expression:
        //code
    default:
        //code
}
</pre>
            <p>注：switch 下的每一个 case 都应当保持一个缩进。除第一个之外包括 default 在内的每一个 case 都应当在之前保持一个空行。每一组语句（除了 default）都应当以 break、return、throw 结尾，或者用一行注释表示跳过、</p>
<h4>Good example:</h4>
<pre class="prettyprint linenums">
switch (value) {
    case 1:
        /* falls through */
    
    case 2:
        doSomething();
        break;
    
    case 3:
        return true;
        
    default:
        throw new Error("This shouldn't happen.");
}
</pre>
            <p>如果一个 switch 语句不包含 default 情况， 应当用一行注释代替。</p>
<pre class="prettyprint linenums">
switch (value) {
    case 1:
        /* falls through */
    
    case 2:
        doSomething();
        break;
    
    case 3:
        return true;
        
    //没有 default
}
</pre>
            <h6>try 语句</h6>
            <p>try 类的语句应当格式如下。</p>
<pre class="prettyprint linenums">
try {
    //code
} catch (variable) {
    //code
}

try {
    //code
} catch (variable) {
    //code
} finally {
    //code
}
</pre>
            <h4>1.7.12 留白</h4>
            <p>在逻辑相关的代码块之间添加空行可以提高代码的可读性。</p>
            <p>两行空行仅限在如下情况中使用。</p>
            <ul>
                <li>在不同的源代码文件之间。</li>
                <li>在类和接口定义之间。</li>
            </ul>
            <p>单行空行仅限在如下情况中使用。</p>
            <ul>
                <li>方法之间。</li>
                <li>方法中局部变量和第一行语句之间。</li>
                <li>多行或者单行注释之前。</li>
                <li>方法中逻辑代码块之间以提升代码的可读性。</li>
            </ul>
            <p>空格应当在如果下情况中使用。</p>
            <ul>
                <li>关键词后跟括号的情况应当使用空格隔开。</li>
                <li>参数列表中逗号之后应当保留一个空格。</li>
                <li>所有的除了点（.）之外的二元运算符，其操作数都应当用空格隔开。单目运算符的操作数之间不应该用空白隔开，诸如一元减号，递增(++),递减（--）.</li>
                <li>for 语句中的表达式之间应当用空格隔开。</li>
            </ul>
            <h4>1.7.13 需要避免的</h4>
            <ul>
                <li>切勿使用string一类的原始包装类型创建新的对象。</li>
                <li>避免使用eval()。</li>
                <li>避免使用with语句，该语句在严格模式中不复存在，可能在未来的ECMAScript标准中也将去除。</li>
            </ul>
        </section>
        
        
        
        <section id="json">
            <h1>JSON格式规范</h1>
            <p>参考<a href="https://github.com/webcoding/google-styleguide/blob/master/JSONStyleGuide.md">JSON Style Guide翻译</a>，原版：<a href="http://google-styleguide.googlecode.com/svn/trunk/jsoncstyleguide.xml">Google JSON Style Guide</a></p>
        </section>
        
        
        
        <section id="readme">
            <h1>说明文档书写规范</h1>
            
        </section>
        
        
        
        <section id="edm">
            <h1>EDM 制作规范</h1>
            <ul>
                <li> <code>CSS</code> 只可使用 <strong>内联样式表</strong> ，如：<code>style="margin:0;"</code> </li>
                <li>设计之初遵循： <strong>图上无文本，文本后无底纹</strong> 的规则</li>
                <li>使用 <code>MailChimp HTML Email CSS Fix</code> 参看下文链接</li>
                <li>引入 <code>CSS Reset for HTML Email</code> 参看下文链接</li>
                <li>使用 <code>Table</code> 布局而非 <code>DIV</code> </li>
                <li>所有图片使用 <code>IMG</code> 标签，如：<code>&lt;img style="style="display:block" "src="" /&gt;</code> </li>
                <li>可以适当使用占位符 <code>spacer.gif</code> </li>
                <li>多用 <code>&lt;br /&gt;</code> 换行而非 <code>&lt;p&gt;</code> </li>
                <li>整体最佳宽度为：<code>550-600px</code> </li>
                <li>不使用 <code>Javascript</code> </li>
                <li>正式发送给用户之前，多次测试</li>
            </ul>
            <p>更多细节参考下面链接：<br><a href="http://www.web-ed.com.au/2011/05/coding-html-newsletters-edms-quick-guide/">12 Killer Tips and Tricks for Building HTML Email</a></p>
        </section>
        
        
        
        <?php include("common/comment.html");?>
    </div> <!-- // div.main -->
</div>

<?php include("common/footer.html");?>
</body>
</html>