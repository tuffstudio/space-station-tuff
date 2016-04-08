<nav class="nav__secondary">
    show:
    <ul class="view-nav">
        <li class="view-nav__item">
            <a href="#" class="active">
                All Areas
            </a>
        </li><!--
        --><li class="view-nav__item">
            <a href="#">
                Bermondsey
            </a>
        </li><!--
        --><li class="view-nav__item">
            <a href="#">
                Shoreditch
            </a>
        </li>
    </ul>
</nav>

<section class="business-directory__list">
    <div class="grid grid--full">
        <?php
            $i = 0;
            while ($i < 9) :
        ?><!--

        --><div class="grid__item tablet-small--one-half tablet--one-third">
            <div class="business-directory__item">
                <a href="#" class="animation--zoom">
                    <img src="http://lorempicsum.com/up/300/230/<?php echo(rand(1,6)); ?>" alt="" class="img--resposive">
                </a>
                <p class="section__category">
                    Commercial:
                    <span>
                        Rent
                    </span>
                </p>
                <a href="#" class="link--standard">
                    <h3 class="headline--small">
                        CAMDEN ROAD, e17
                    </h3>
                </a>

                <p class="paragraph__address">
                    <span>
                        +44 208 962 8666
                    </span>
                    <span>
                        318 Kensal Road, W10
                    </span>
                    <span>
                        <a href="#">
                            www.website.com
                        </a>
                    </span>
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dictum, quam id facilisis ornare.
                </p>
            </div>
        </div><!--

        --><?php
                $i++;
            endwhile;
        ?>
    </div>
</section>
