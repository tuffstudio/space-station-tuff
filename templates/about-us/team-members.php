<?php use Roots\Sage\MagazinePost; ?>

<section class="section team-members is-hidden js-section-reveal section--background-space section--background">
    <?php
        $page_fields = CFS()->get(false, $post->ID);
        $title  = $page_fields['ss_section_title'];
        $description = $page_fields['ss_section_description'];
        $members = $page_fields['ss_team_members'];

        foreach ($members as $index => $member_id) {
            $team_member{$index} = new MagazinePost\TeamMember($member_id);
        }
    ?>
    <div class="container">
        <h2 class="section__title about__members-title">
            <?= $title; ?>
        </h2>
        <div class="grid grid--full">
            <div class="grid__item tablet--one-half">
                <div class="masonry__item masonry__item--rectangular">
                    <div class="masonry__tile--center">
                        <p class="text-description text-description--letter"><?= $description; ?></p>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(0, $members)) :
                        $member = $team_member{0};
                ?>
                    <div class="masonry__link">
                        <div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                    <div class="masonry__tile-border"></div>
                                    <div class="masonry__tile-info">
                                        <h3 class="masonry__tile-title"><?= $member->get_title() ?></h3>
                                        <p class="masonry__tile-desc masonry__tile-desc--small"><?= $member->get_excerpt(80); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--
                        --><div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square masonry__image">
                                <?= $member->get_image('square_small'); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="grid grid--full">
            <div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(1, $members)) :
                        $member = $team_member{1};
                ?>
                    <div class="masonry__link">
                        <div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__item masonry__item--square masonry__image">
                                    <?= $member->get_image('square_small'); ?>
                                </div>
                            </div>
                        </div><!--
                        --><div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                    <div class="masonry__tile-border"></div>
                                    <div class="masonry__tile-info">
                                        <h3 class="masonry__tile-title"><?= $member->get_title() ?></h3>
                                        <p class="masonry__tile-desc masonry__tile-desc--small"><?= $member->get_excerpt(80); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(2, $members)) :
                        $member = $team_member{2};
                ?>
                    <div class="masonry__link">
                        <div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__item masonry__item--square masonry__image">
                                    <?= $member->get_image('square_small'); ?>
                                </div>
                            </div>
                        </div><!--
                        --><div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                    <div class="masonry__tile-border"></div>
                                    <div class="masonry__tile-info">
                                        <h3 class="masonry__tile-title"><?= $member->get_title() ?></h3>
                                        <p class="masonry__tile-desc masonry__tile-desc--small"><?= $member->get_excerpt(80); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="grid grid--full grid--center">
            <div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(3, $members)) :
                        $member = $team_member{3};
                ?>
                    <div class="masonry__link">
                        <div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__item masonry__item--square masonry__image">
                                    <?= $member->get_image('square_small'); ?>
                                </div>
                            </div>
                        </div><!--
                        --><div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                    <div class="masonry__tile-border"></div>
                                    <div class="masonry__tile-info">
                                        <h3 class="masonry__tile-title"><?= $member->get_title() ?></h3>
                                        <p class="masonry__tile-desc masonry__tile-desc--small"><?= $member->get_excerpt(80); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
