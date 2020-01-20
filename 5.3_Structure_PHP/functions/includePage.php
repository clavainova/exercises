<?php
function includePage($page)
{
    if (!include $page) {
        checkStatus($page);
        //rn not checking status correctly
?>
        <div class="container-fluid bg-1">
            <h1>404 Page Not Found</h1>
        </div>
<?php
    } else {
        include $page;
    }
}

//not work
function checkStatus($const)
{
    if (isset($const)) {
        return;
    } else {
        include 'components/config.php';
    }
}
?>