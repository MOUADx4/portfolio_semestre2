class VideoPlayer {
    constructor(videoElement, videoTitleElement) {
        this.video = videoElement;
        this.videoTitle = videoTitleElement;
        this.videoTitle.addEventListener('click', this.toggleVideo.bind(this));
    }

    toggleVideo() {
        if (this.video.paused) {
            this.video.play();
            this.videoTitle.textContent = 'Pause Video'; 
        } else {
            this.video.pause();
            this.videoTitle.textContent = 'Play Video'; 
        }
    }
}


const videoElement = document.querySelector('video');
const videoTitleElement = document.querySelector('.video-title');
const videoPlayer = new VideoPlayer(videoElement, videoTitleElement);
