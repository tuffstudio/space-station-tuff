<?php
    $facebook_url = get_option('facebook_url');
    $twitter_url = get_option('twitter_url');
    $instagram_url = get_option('instagram_url');
    $linkedin_url = get_option('linkedin_url');
?>

<section class="section--free-space join-us">
    <div class="container">
        <div class="grid grid--full">
            <div class="grid__item tablet--one-half u--align-center">
                <h3 class="join-us__title u--text-uppercase">join us</h3>
            </div><!--
            --><div class="grid__item tablet--one-half u--align-center">
                <ul class="join-us__socials">
                    <li class="join-us__social">
                        <a href="<?= $facebook_url; ?>" target="_blank" class="join-us__social-link">
                            <span class="icon icon-facebook"></span>
                        </a>
                    </li>
                    <li class="join-us__social">
                        <a href="<?= $twitter_url; ?>" target="_blank" class="join-us__social-link">
                            <span class="icon icon-twitter"></span>
                        </a>
                    </li>
                    <li class="join-us__social">
                        <a href="<?= $instagram_url; ?>" target="_blank" class="join-us__social-link">
                            <span class="icon icon-instagram"></span>
                        </a>
                    </li>
                    <li class="join-us__social">
                        <a href="<?= $linkedin_url; ?>" target="_blank" class="join-us__social-link">
                            <span class="icon icon-linkedin"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
