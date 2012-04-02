<aside class="sidebar gu2 fR cf">
    <div class = "latest-graphic">
        <div class="sidebar-header">
            <h3>LATEST DESIGN</h3>
        </div>
        <div class="sidebar-content">
            <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('design'); ?>
                              <?php endif; ?>
        </div>
    </div>
    <div id="twitterfeed">
        <div class="sidebar-header">
            <h3>@fleetCREATURE</h3>
        </div>
        <div class="sidebar-content">
                    <ul style="list-style:none" id="twitter_update_list"></ul>
                        <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
                        <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/fleetcreature.json?callback=twitterCallback2&count=3"></script>
        </div>
    </div>
</aside>
