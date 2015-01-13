<div id='bump'>
<?php theme_include('header'); ?>

    <section class="article" id="article-<?php echo article_id(); ?>">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', '"/blog/themes/balzac/img/typewriter.jpg'); ?>);"></div>

      <article class="wrap post">
        <header class="post-header">
          <hgroup>
            <h1 class="blog-title"><?php echo article_title(); ?></h1>
            <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('F jS, Y', article_time()); ?></time></p>
          </hgroup>
        </header>
    
        <?php echo article_markdown(); ?>
      <div class="share">
           <ul>
              <li>
                <a class="icon-twitter" href="http://twitter.com/share?url=<?php echo (full_url() . substr( article_url(), 1)); ?>&text=<?php echo article_title().": ".article_description();?>&via=<?php echo twitter_account(); ?>&hashtags=<?php echo article_custom_field('hashtags', '') ?>"
                    onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
                </a>
              </li>

            <li>
                <a class="icon-facebook-2" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo (full_url() . substr( article_url(), 1)); ?>?>"
                    onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
                </a>
            <li><a class="icon-mail-alt" href="mailto:?cc=info@apsolute-tt.com&amp;subject=Have a look at this blog post&amp;body=<?php echo " ". article_title()." : ".article_description();?><?php echo " via ". twitter_account(); ?><?php echo " ". (full_url() . substr( article_url(), 1));?>"></a></li>
          </ul>
      </div>
      <div class="clear"></div>
      <div class="author">
        <div class="image"><img src="<?php echo theme_url('/img/img.jpg'); ?>"></div>
        <div class="text">
          <h6>Witter by</h6>
          <h5>Denzil Doyle</h5>
          <p>Hello there. I'm a young and passionate web and mobile application developer/designer and entrepreneur - CTO and Founder of <a href="http://www.apsolute-tt.com/">Apsolute.</a> I'm highly self-motivated, goal-oriented, always up for a challenge and not afraid to think outside the box.</p>
           <ul>
            <li><a href="https://twitter.com/DenzilDoyle">Twitter</a></li>
            <li><a href="https://www.facebook.com/Doyley3">Facebook</a></li>
            <li><a href="http://www.behance.net/DenzilDoyle">Behance</a></li>
            <li><a href="http://dribbble.com/DenzilDoyle">Dribbble</a></li>
            <li><a href="http://www.linkedin.com/in/denzildoyle">Linkedin</a></li>
            <li><a href="mailto:doyle.d@apsolute-tt.com">Email</a></li>
           <!--  <li><a href="">Subscribe</a></li> -->
          </ul>
        </div>
      </div> 
      <div id="disqus_thread"></div>
      <center><p>© 2013 <a href="http://blog.apsolute-tt.com/">blog.apsolute-tt.</a> all rights reserved.</p></center>
      <script type="text/javascript">
          /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
          var disqus_shortname = 'blog-apsolute'; // required: replace example with your forum shortname

          /* * * DON'T EDIT BELOW THIS LINE * * */
          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
      </article>
    </section>
</div>

<?php theme_include('footer'); ?>
