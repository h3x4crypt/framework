@extends('templates.default')

@section('content')
             
              <br />
<span class="lead"><h3>March 8<sup>th</sup>, 2018</h3></span>
<div class="container">
PHP training and code examples are lisetd in bellow div <code>.page-parts</code>:
<p class="text-primary">Create a {$_GLOBAL} empty page layout & structure: </p>
<pre class="content-block highlight codebox">
<span class="" ></span>
<span class="code">Code Syntax:</span>
<span class="comment1"><</span><span class="comment1">!-- Single Block start --> </span>
<span class="var"><</span><span class="var">section </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"block"</span><span class="var">></span>
<span class="var"><</span><span class="var">div </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"content-block-inner"</span><span class="var">></span>
<span class="var"> <</span><span class="var">span </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"lead"</span><span class="var">></span><span class="var"><</span><span class="var">h3><span class="txt"><span class="h3">h3 text</span></span><</span></span><span class="var">/h3></span><span class="var"><</span><span class="var">/span</span><span class="var">></span>
<span class="var"> <</span><span class="var">div </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"container content-block-inner"</span><span class="var">></span>
<span class="var">  <</span><span class="var">blockquote </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"blockquote"</span><span class="var">></span>
<span class="var">  <</span><span class="var">p </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"text-primary"</span><span class="var">></span><span class="comment1"><</span><span class="comment1">!-- some text goes here... --></span><span class="var"><</span><span class="var">/p></span>
<span class="var">   <</span><span class="var">pre </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"content-block highlighter codebox"</span><span class="var">></span>
<span class="var">   <</span><span class="var">span </span><span class="str">class</span> <span class="o">=</span> <span class="s2">""</span><span class="var">><span class="var"><</span><span class="var">/span</span><span class="var">></span>
    <span class="txt">###Code box classes cheatsheet###</span>
    <span class="p">class <span class="code">.o</span> <span class="o">//comment</span>
    <span class="p">class</span> <span class="code">.comment1</span> <span class="comment1"><</span><span class="comment1">!-- comment1 --></span>
    <span class="p">class <span class="code">.highlight</span> <span class="highlight">highlight</span>
    <span class="p">class <span class="code">.highlighter</span> <span class="highlighter">highlighter</span>
    <span class="p">class</span> <span class="code">.glo</span> <span class="glo">$_GLOBALS</span>
    <span class="p">class</span> <span class="code">.str</span> <span class="str">$string</span>
    <span class="p">class</span> <span class="code">.var</span> <span class="var">%variable</span>
    <span class="p">class</span> <span class="code">.fun</span> <span class="fun">!function</span>
    <span class="p">class</span> <span class="code">.val</span> <span class="val">@values</span>
    <span class="p">class</span> <span class="code">.txt</span> <span class="txt">_text</span>
    <span class="p">class</span> <span class="code">.dxt</span> <span class="dxt">_text</span>
    <span class="txt">###Global official classes colors cheatsheet###</span>
    <span class="p">class</span> <span class="code">.ps</span> <span class="ps">#note</span>
    <span class="p">class</span> <span class="code">.neat</span> <span class="neat">#NEAT</span>
    <span class="p">class</span> <span class="code">.magic</span> <span class="magic">#magic</span>
    <span class="p">class</span> <span class="code">.blood</span> <span class="blood">#blood</span>
    <span class="p">class</span> <span class="code">.primary</span> <span class="primary">#primary</span>
    <span class="p">class</span> <span class="code">.secondary</span> <span class="secondary">#secondary</span>
    <span class="p">class</span> <span class="code">.success</span> <span class="success">#success</span>
    <span class="p">class</span> <span class="code">.info</span> <span class="info">#info</span>
    <span class="p">class</span> <span class="code">.warning</span> <span class="warning">#warning</span>
    <span class="p">class</span> <span class="code">.danger</span> <span class="danger">#danger</span></span>
<span class="var">   <</span><span class="var">div </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"content-block"</span><span class="var">></span>
<span class="var">   <</span><span class="var">pre </span><span class="str">class</span> <span class="o">=</span> <span class="s2">"content-block"</span><span class="var">></span>
<span class="comment1"> <</span><span class="comment1">!-- Results goes here --></span>
<span class="var">  <</span><span class="var">/div></span>
<span class="var">  <</span><span class="var">/div></span>
<span class="var"> <</span><span class="var">/pre></span>
<span class="var"> <</span><span class="var">/pre></span>
<span class="var"><</span><span class="var">/blockquote></span>
<span class="var"><</span><span class="var">/section></span>
<div class="content-block">"Results":
<pre class="content-block">
<span class="" ><</span>!-- Results goes here -->
</div>
<footer>&copy; 2018 e-Complex</footer></pre></pre>

@stop


