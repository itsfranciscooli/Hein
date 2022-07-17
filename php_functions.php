<?php
    function search_bar () {
    return <<<HTML
        <form action="search.php" method="GET">
            <i class="fa fa-search" style="color: white"></i>
            <input
                name="search_box"
                class="search-subtitles-b"
                type="text"
                placeholder="Looking for a subtitle"
            />
        </form>
HTML;
    }
?>