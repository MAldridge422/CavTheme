<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
  die ('Please do not load this page directly. Thanks!');
}

if(post_password_required() ) {
  echo "<p class='no comments'>This post is password protected. Enter the password to view comments.</p>";
  return;
}
?>
      <!--Comments-->
      <div class='comments'>
  <?php if (is_user_logged_in()) { ?>
      <h2><?php comments_number('No Comments', '1 Comment', '% Comments' ); ?></h2>
  <?php if ( have_comments() ) { ?>
      <ol class="comments list">
          <?php wp_list_comments(array(
            'callback' => 'ct_comment',
            'end-callback' => 'ct_comment_end'
        )); ?>
    </ol>

    <?php if ($wp_query->max_num_pages > 1) { ?>
        <div class="pagination">
          <ul>
            <li class="older"><?php previous_comments_link('Older') ?></li>
            <li class="newer"><?php next_comments_link('Newer') ?></li>
          </ul>
        </div>
    <?php
    }
  }
?>
<?php if (comments_open() && is_user_logged_in()) { ?>
      <div id="respond">
        <h2>Leave a response</h2>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
          <fieldset>
            <textarea name="comment" id="comment" rows="10" cols="80"></textarea>
            <input type="submit" class="commentsubmit" value="Submit Comment" />
            <?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
          </fieldset>
        </form>
        <p>Submit links like this [[http://www.carobotics.org]]</p>
        <p>Submit images like this ~~http://www.carobotics.org/wp-content/themes/cavtheme/images/Logo.png~~</p>
        <p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?></p>
      </div>
<?php } else { ?>
      <h2>Comments are now closed</h2>
<?php } 
} else {
  $redirect = set_url_scheme( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
  $login_url = wp_login_url($redirect, true);
  echo "      <h2>Please <a class='underline' href='".$login_url."'>log in</a> to view comments on this post.</h2>";
}
?>
    </div><!--end comments-->