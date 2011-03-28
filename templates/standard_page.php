<!DOCTYPE html>
<head>
  <?=($is_mobile ? '<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />' : null)?>
  <title>0xf.nl &raquo; Midijunkies gonna fuck you up.</title>
  <link rel="stylesheet" href="/css_lib/reset.css" type="text/css"/>
  <link rel="stylesheet" href="/css_lib/grid.css" type="text/css"/> 
  <link rel="stylesheet" href="/css_lib/fileuploader.css" type="text/css">
  <link rel="stylesheet" href="/css_lib/subverse.css" type="text/css"/> 
  <link rel="stylesheet" href="/css/main.css" type="text/css"/> 
  <script src="/js_lib/jquery.js" type="text/javascript"></script>
  <script src="/js_lib/jquery-ui.js" type="text/javascript"></script>
  <script src="/js_lib/common.js" type="text/javascript"></script>
  <link rel="canonical" href="http://trouble.0xf.nl/<?=$canonical?>" />
  <meta name="Description" content="0xf.nl, Midijunkies will fuck you up. Questioning the powers that be is one of our main responsibility as inhabitants of this planet.">
</head>
<body>
<div class="container_12">
<header class="grid_12"><h1 id="midi"><a href="/">Midijunkies gonna fuck you up.</a></h1></header>
<div class="grid_8" id="content">  
<article>
<?=$content?>
</article>

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = '0xf'; // required: replace example with your forum shortname

    // The following are highly recommended additional parameters. Remove the slashes in front to use.
    var disqus_identifier = '<?=$canonical?>';
    var disqus_url = 'http://0xf.nl/<?=$canonical?>';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<p><a href="http://nginx.org/"><img src="/button_nginx.png" alt="Powered by Nginx" /></a>&nbsp;<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a></p>
</div>
</body>
