<li>
    <div class="comment">
        <div class="comment-content">
            <h5 class="comment-author-name"><a href="#"><strong><?php print $comment->name ?></strong></a></h5>
            <span class="comment-date"><?php print _date_format($comment->created, 'd M, y') ?><span class="dot">.</span>at <?php print _date_format($comment->created, 'h:i A') ?></span>
            <div class="row">
                <div class="comment-text col-sm-9 col-md-10">
                    <p><?php print render($content); ?></p>
                </div>
                <div class="col-sm-3 col-md-2 text-right">
                </div>
            </div>
        </div>
    </div>
</li>
