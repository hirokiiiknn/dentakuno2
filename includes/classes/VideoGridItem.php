<?php
class VideoGridItem {

    private $video, $largeMode;

    public function __construct($video, $largeMode) {
        $this->video = $video;
        $this->largeMode = $largeMode;
    }

    public function create() {
        $thumbnail = $this->createThumbnail();
        $details = $this->createDetails();
        $url = "watch.php?id=" . $this->video->getId();

        return "
                    <div class='videoGridItem'>
                        $thumbnail
                        $details
                    </div>
                ";
    }

    private function createThumbnail() {
        
        $thumbnail = $this->video->getThumbnail();
        $videoUrl = $this->video->getVideoUrl();

        return "<div class='thumbnail'>
                    <div class='video'>
                        $videoUrl
                    </div>
                </div>";

    }

    private function createDetails() {
        $title = $this->video->getTitle();
        $username = $this->video->getUploadedBy();
        $description = $this->createDescription();

        return "<div class='details'>
                    <h3 class='title'>$title</h3>
                    <span class='username'>$username</span>
                    $description
                </div>";
    }

    private function createDescription() {
        if(!$this->largeMode) {
            return "";
        }
        else {
            $description = $this->video->getDescription();
            $description = (strlen($description) > 350) ? substr($description, 0, 347) . "..." : $description;
            return "<span class='description'>$description</span>";
        }
    }

}
?>



