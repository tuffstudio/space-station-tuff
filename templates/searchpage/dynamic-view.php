

<?php 

$i = 0; 
$number_or_listings = $xmlResult->numberOfListings;

while($i < $xmlResult->numberOfListings): ?> 
<div class="grid grid--full">
    <div class="grid__item tablet--one-half">
        <div class="grid__item">
            <?php if($i == 0 || ($i % 7) == 0){ 
                 $item = $xmlResult->listings->listing[$i];   
                 include 'dynamic-small-left.php';  
                 $i++; 
                 if($i >= $number_or_listings){ break; }
             }?>
        </div><!--
        --><div class="grid__item">
            <div class="grid__item one-half"></div><!--
            --><div class="grid__item one-half">
                <a href="#" class="masonry__link">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile-link masonry__tile-link--brown">
                            <span>Book a valuation</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div><!--
    --><div class="grid__item tablet--one-half">
        <div class="grid__item masonry__image">
            <?php if($i == 1 || (($i-1) % 7) == 0 ){ 
                $item = $xmlResult->listings->listing[$i];
                include 'dynamic-big.php'; 
                $i++; 
                if($i >= $number_or_listings){ break; }
            }?>
        </div>
    </div>
</div>
<div class="grid grid--full">
    <div class="grid__item tablet--one-half">
        <div class="grid__item masonry__image">
            <?php if($i == 2 || (($i-2) % 7) == 0 ){
                $item = $xmlResult->listings->listing[$i];
                include 'dynamic-big.php';  
                $i++;
                if($i >= $number_or_listings){ break; }
            }?>
        </div>
    </div><!--
    --><div class="grid__item tablet--one-half">
        <div class="grid__item phone--hide tablet--show">
            <div class="masonry__item masonry__item--rectangular"></div>
        </div><!--
        --><div class="grid__item">
            <?php if($i == 3 || (($i-3) % 7) == 0 ){ 
                $item = $xmlResult->listings->listing[$i];
                include 'dynamic-small-right.php'; 
                $i++;
                if($i >= $number_or_listings){ break; }
            }?>
        </div>
    </div>
</div>
<div class="grid grid--full">
    <div class="grid__item tablet--one-half">
        <div class="grid__item">
            <?php if($i == 4 || (($i-4) % 7) == 0 ){ 
                $item = $xmlResult->listings->listing[$i];
                include 'dynamic-small-left.php'; 
                $i++;
                if($i >= $number_or_listings){ break; }
            }?>
        </div><!--
        --><div class="grid__item phone--hide tablet--show">
            <div class="masonry__item masonry__item--rectangular"></div>
        </div><!--
        --><div class="grid__item">
            <?php if($i == 5 || (($i-5) % 7) == 0 ){ 
                $item = $xmlResult->listings->listing[$i];
                include 'dynamic-small-left.php'; 
                $i++;
                if($i >= $number_or_listings){ break; }
            }?>
        </div>
    </div><!--
    --><div class="grid__item tablet--one-half">
        <div class="grid__item one-half">
            <a href="#newsletter" class="masonry__link">
                <div class="masonry__item masonry__item--square">
                    <div class="masonry__tile masonry__tile-link masonry__tile-link--purple">
                        <span>Sign up for new property alerts</span>
                    </div>
                </div>
            </a>
        </div><!--
        --><div class="grid__item masonry__image">
            <?php if($i == 6 || (($i-6) % 7) == 0 ){ 
                $item = $xmlResult->listings->listing[$i];
                include 'dynamic-big.php'; 
                $i++;
                if($i >= $number_or_listings){ break; }
            }?>
        </div>
    </div>
</div>
<div class="grid grid--full">
    <div class="grid__item tablet--one-half phone--hide tablet--show"></div><!--
    --><div class="grid__item tablet--one-half">
        <?php include dirname(__FILE__) . '/../components/blackbook-block.php'; ?>
    </div>
</div>

<?php endwhile; ?>