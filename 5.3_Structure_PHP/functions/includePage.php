<?php
function includePage($page)
{
    if (!include $page) {
        checkStatus($page);
?>
        <div class="container-fluid bg-1">
            <h1>404 Page Not Found</h1>
        </div>
<?php
    } else {
        include constant($page);
    }
}

function checkStatus($const)
{
    if (null !== constant($const)) {
        return;
    } else {
        include 'components/config.php';
    }
}
?>