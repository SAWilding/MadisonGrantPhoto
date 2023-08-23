<?php 
function buildPortfolio() {
    $dv = "";
    for ($i = 0; $i < 5; $i++) {
        $dv .= '<div class="portfolio-card">';
        $dv .= '<img src="http://via.placeholder.com/400x600" alt="Portfolio img"/>';
        $dv .= '</div>';
    } 
    return $dv;
}
?>