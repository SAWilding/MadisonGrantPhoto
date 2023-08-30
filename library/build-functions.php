<?php 
function buildPortfolio() {
    $dv = "";
    for ($i = 0; $i < 5; $i++) {
        $dv .= '<div class="portfolio-card image-container">';
        $dv .= '<img src="http://via.placeholder.com/400x600" alt="Portfolio img" class="clickable-image"/>';
        $dv .= "<div class='overlay' id='overlay$i'>";
        $dv .= '<img src="" alt="Enlarged Image" class="enlarged-image">';
        $dv .= "<span class='close' id='close-button$i'>&times;</span>";
        $dv .= '</div>';
        $dv .= '</div>';
    } 
    return $dv;
}
?>