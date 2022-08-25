<?php
function display_error_bucket($error_bucket)
{
    echo '<div class="alert alert-warning mt-3 shadow" role="alert">';
    echo "<p class='fw-bold'>AN ERROR OCCURRED PLACING YOUR ORDER</p>";
    if (count($error_bucket) > 0) {
        echo "<ul>";
        foreach ($error_bucket as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul></div>";
    }
}
