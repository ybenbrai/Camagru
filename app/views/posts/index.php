<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="posts_container">
    <?php foreach ($data['posts'] as $post) : ?>

        <div class="profile block">
            <!-- <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a> -->
            <div class="post_profile_pic">
                <a href="<?php echo URLROOT; ?>/posts/snitch/<?php echo $post->user_id; ?>"><img alt="Anne Hathaway picture" src="http://upload.wikimedia.org/wikipedia/commons/e/e1/Anne_Hathaway_Face.jpg"></a> </div>
            <!-- poste image -->
            <div class="profile_name_posts">

                <a href="<?php echo URLROOT; ?>/posts/snitch/<?php echo $post->user_id; ?>"><?php echo $post->display_name; ?></a>

            </div>
            <div class="post_title">
                <p><?php echo $post->title; ?></p>
            </div>
            <div class="post_img">
                <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>"><img href alt="Anne Hathaway picture" src="<?php echo $post->image; ?>"></a>
            </div>
            <div class="blabla">
                <form action="" method="post">
                    <textarea name="blabla" id="commntarea" cols="50" rows="2"></textarea>
                    <button class="publish" type="submit">Publish</button>
                </form>
            </div>
            <div class="reaction">
                        <div class="user__comment__reaction">
                            <i class="icon ion-md-thumbs-up"></i> <small>34</small>
                            <i class="icon ion-md-thumbs-down"></i> <small>04</small>
                        </div>
                    </div>
                </div>
                    <form action="<?php echo URLROOT; ?>/posts/like/<?php echo $post->postId; ?>" method="POST">
                        <button class="likes" type="submit"><a><?php echo $post->like_count; ?> </a></button>
                        <!-- <input type="submit" value="<?php echo $post->like_count; ?>"/> -->
                    </form>

                    <a href=""><?php echo $post->like_count; ?></a>
            </div>
            <div class="posts_info">
                <p>
                    Written by <?php echo $post->display_name; ?> on <?php echo $post->created_at; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>