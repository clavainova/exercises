<?php

function includePage($str)
{
    if (!include constant($str)) { ?>
        <div class="container-fluid bg-1">
            <h1>404 Page Not Found</h1>
        </div>
<?php
    } else {
        include constant($str);
    }
}
