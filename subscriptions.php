<?php
require_once("includes/header.php");

if(!User::isLoggedIn()) {
    header("Location: signIn.php");
}

$subscriptionsProvider = new SubscriptionsProvider($con, $userLoggedInObj);
$videos = $subscriptionsProvider->getVideos();

$videoGrid = new VideoGrid($con, $userLoggedInObj);
?>
<div class="largeVideoGridContainer">
    <div class="professors">
        <a href="profile.php?username=KataokaShigeo"><img src="assets/images/professorsPic/shigeo.png"></a>
        <a href="profile.php?username=NishimuraYoshimi"><img src="assets/images/professorsPic/yoshimi.png"></a>
        <a href="profile.php?username=AoshimaHitoshi"><img src="assets/images/professorsPic/hitoshi.png"></a>
        <a href="profile.php?username=KawashimaTetsu"><img src="assets/images/professorsPic/tetsu.png"></a>
        <a href="profile.php?username=DaiyuWakita"><img src="assets/images/professorsPic/WakitaDaiyu.png"></a>
        <a href="profile.php?username=TatsuyaUrisaka"><img src="assets/images/professorsPic/TatsuyaUrisaka.png"></a>
        <a href="profile.php?username=YasuhiroOdanaka"><img src="assets/images/professorsPic/YasuhiroOdanaka.png"></a>
        <a href="profile.php?username=KojiSato"><img src="assets/images/professorsPic/KojiSato.png"></a>
        <a href="profile.php?username=KinKataoka"><img src="assets/images/professorsPic/KinKataoka.png"></a>

        
    </div>  




    <?php
    if(sizeof($videos) > 0) {
        echo $videoGrid->createLarge($videos, "New from your subscriptions", false);
    }
    else {
        echo "";
    }
    ?>
</div>