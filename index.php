<?php require_once("includes/header.php"); ?>

<div class="videoSection">
    <?php

    if(User::isLoggedIn()){
        $subscriptionsProvider = new SubscriptionsProvider($con, $userLoggedInObj);
        $subscriptionVideos = $subscriptionsProvider->getVideos();
        $videoGrid = new VideoGrid($con, $userLoggedInObj->getUsername());
    } else {
        return "";
    }
    

    if(User::isLoggedIn() && sizeof($subscriptionVideos) > 0) {
        echo $videoGrid->create($subscriptionVideos, "Subscriptions", false);
    }

    echo $videoGrid->create(null, "Recommended", false);


    ?>
</div>


<?php require_once("includes/footer.php"); ?>
                