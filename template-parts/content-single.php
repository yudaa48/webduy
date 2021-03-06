<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<article class="blog--article">
			<h1><?php the_title(); ?></h1>
			<p class="mb-5"><?php the_date(); ?></p>
			
				<?php the_content(); ?>
		</article>
        <p> Share this post on</p>  
		<div class="row mb-5">
			<div class="col-lg-8">
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>" target="_blank" class="social-media-blog">
					<img src="<?php echo get_theme_file_uri( 'assets/images/social-icon--facebook1.webp' ); ?>" alt="">
				</a>
				<a href="https://www.linkedin.com/cws/share?url=<?php echo the_permalink()?>" target="_blank" class="social-media-blog"> 
					<img src="<?php echo get_theme_file_uri( 'assets/images/social-icon--linkedin1.webp' ); ?>" alt="">
				</a>
				<a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?php echo the_permalink() ?>" title="Share by Email" class="social-media-blog"> 
					<img src="<?php echo get_theme_file_uri( 'assets/images/social-icon--email1.webp' ); ?>" alt="">
				</a>
			</div>
		</div>   
		<h2 class="text-center text-color--dark-blue mb-5">Related Article</h2>
		<div class="row mb-5 pb-5">
	        <div class="col-6">
	            <?php $greenres_prev_post = get_previous_post();
	            if($greenres_prev_post):
	                ?>
	                <h4 class="text-center">
	                	<a href="<?php echo get_the_permalink($greenres_prev_post);
	                    ?>" target="_blank" class="text-color--dark-blue">
	                    	<?php echo get_the_title($greenres_prev_post); ?>
	                    </a>
	                </h4>
	                <!-- <?php //echo get_the_excerpt($greenres_prev_post); ?> -->
	            <?php endif; ?>
	        </div>
	        <div class="col-6">
	            <?php $greenres_next_post = get_next_post();
	            if($greenres_next_post): ?>
	            	<h4 class="text-center">
	            		<a href="<?php echo get_the_permalink($greenres_next_post);
	                	?>" target="_blank" class="text-color--dark-blue">
	                		<?php echo get_the_title($greenres_next_post); ?>
	                	</a>
	            	</h4>
	            	<!-- <?php //echo get_the_excerpt($greenres_next_post); ?> -->
	            <?php endif; ?>
			</div>
		</div>
	</div>
</div>
    <?php $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Submit Comments',
        // change the title of the reply section
        'title_reply'=>'Leave a Reply',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_form_top' => 'ds',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '
        <div class="row mt-3">
        	<div class="col-lg-6 mb-3">
        		<p class="comment-form-author">Name</p>
        		<input id="author" class="blog-form-input" placeholder="Full Name" name="author" type="text" required="" value="' . esc_attr( $commenter['comment_author'] ) .'" size=""' . $aria_req . ' />
        	</div>
        	<div class="col-lg-6 mb-3">
        		<p class="comment-form-author">Email</p>
        		<input id="email" class="blog-form-input" placeholder="Your Email" name="email" type="text" required="" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size=""' . $aria_req . ' />
        	</div>
        </div>
        <div class="row">
        	<div class="col-lg-6 mb-3">
        		<p class ="comment-form-comment">Comments</p>
        		<textarea id="comment" name="comment" placeholder="Write your comment here..." aria-required="true" required=""></textarea>
        	</div>
        </div>
        ',
        'fields' => apply_filters( 'comment_form_default_fields', array(
	    )
	  ),
	);

comment_form($comments_args);?> 

<?php foreach (get_comments(array('status' => 'approve','order' => 'ASC', 'post_id' => $post->ID)) as $comment): ?>
	<div class="container comment-show mb-5">
		<div class="row">
			<div class="col-lg-1 col-md-1">
				<p><?php      
					$current_user = wp_get_current_user();
			     		if ( ($current_user instanceof WP_User) ) {
			        	echo get_avatar( $current_user->user_email, 32 );
			    		}?>
			    </p>	
			</div>
			<div class="col-lg-11 col-md-11">
				<div class="row">
					<h4 class="comment-author"><?php echo $comment->comment_author; ?> said:</h4> 
				</div>
				<div class="row">
					<p class="comment-content">" <?php echo $comment->comment_content; ?> "</p> 
				</div>								
			</div>	
		</div>
	</div>
<?php endforeach; ?>