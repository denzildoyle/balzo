  <div class="push"></div>
  <footer class="hidden">
    
  </footer>
  	    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	    <script type="text/javascript" src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
	    <script>
	        $('pre code').each(function(index, element) {
	            var lang = null;

	            if(element.innerHTML.match("^:::"))
	            {
	                var html = element.innerHTML.split("\n");
	                lang = html[0].replace(":::", "");
	                element.className += lang;
	                html.splice(0, 1);
	                element.innerHTML = html.join("\n");
	            }

	            hljs.highlightBlock(element);
	        });
	    </script>
  </body>
</html>
