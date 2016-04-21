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
    <div class="container--mobile-full container">
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
                    <?php include 'member-right.php'; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="grid grid--full">
            <div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(1, $members)) :
                        $member = $team_member{1};
                ?>
                    <?php include 'member-left.php'; ?>
                <?php endif; ?>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(2, $members)) :
                        $member = $team_member{2};
                ?>
                    <?php include 'member-left.php'; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="grid grid--full grid--center">
            <div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(3, $members)) :
                        $member = $team_member{3};
                ?>
                    <?php include 'member-left.php'; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
