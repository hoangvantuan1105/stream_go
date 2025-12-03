const HLS_URL = "https://storage.googleapis.com/stream_go/file_test/playlist.m3u8";

const video = document.getElementById("video");
const playPauseBtn = document.getElementById("playPauseBtn");
const playIcon = document.getElementById("playIcon");
const pauseIcon = document.getElementById("pauseIcon");
const centerPlay = document.getElementById("centerPlay");
const bigPlayBtn = document.getElementById("bigPlayBtn");

const currentTimeEl = document.getElementById("currentTime");
const durationEl = document.getElementById("duration");
const progressBar = document.getElementById("progressBar");
const progressFilled = document.getElementById("progressFilled");
const bufferBar = document.getElementById("bufferBar");

const muteBtn = document.getElementById("muteBtn");
const volOnIcon = document.getElementById("volOnIcon");
const volOffIcon = document.getElementById("volOffIcon");
const volumeSlider = document.getElementById("volumeSlider");

const fullscreenBtn = document.getElementById("fullscreenBtn");
const videoContainer = document.querySelector(".player-wrapper");

const header = document.querySelector(".player-header");
const controls = document.querySelector(".controls");

// ====== Khởi tạo HLS ======
function initHls() {
    if (typeof Hls !== "undefined" && Hls.isSupported()) {
        const hls = new Hls();
        hls.loadSource(HLS_URL);
        hls.attachMedia(video);
    } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
        video.src = HLS_URL;
    } else {
        console.error("HLS không được hỗ trợ trên trình duyệt này.");
    }
}

// ====== Helper: format time ======
function formatTime(seconds) {
    if (isNaN(seconds) || !isFinite(seconds)) return "00:00";
    const m = Math.floor(seconds / 60);
    const s = Math.floor(seconds % 60);
    return `${m.toString().padStart(2, "0")}:${s.toString().padStart(2, "0")}`;
}

// ====== Update nút play/pause ======
function updatePlayPauseIcon() {
    if (video.paused) {
        playIcon.style.display = "block";
        pauseIcon.style.display = "none";
        centerPlay.classList.add("show");
    } else {
        playIcon.style.display = "none";
        pauseIcon.style.display = "block";
        centerPlay.classList.remove("show");
    }
}

// ====== Play/Pause ======
function togglePlay() {
    if (video.paused) video.play();
    else video.pause();
}

// ====== Mute ======
function toggleMute() {
    video.muted = !video.muted;
    updateVolumeUI();
}

function updateVolumeUI() {
    if (video.muted || video.volume === 0) {
        volOnIcon.style.display = "none";
        volOffIcon.style.display = "block";
    } else {
        volOnIcon.style.display = "block";
        volOffIcon.style.display = "none";
    }
    if (!video.muted) {
        volumeSlider.value = video.volume;
    }
}

// ====== Fullscreen ======
function toggleFullscreen() {
    if (!document.fullscreenElement) {
        videoContainer.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}

// Ẩn/hiện header khi fullscreen
document.addEventListener("fullscreenchange", () => {
    if (document.fullscreenElement) {
        header.style.display = "none";
    } else {
        header.style.display = "flex";
    }
});

// ====== Progress & Time ======
function updateTime() {
    currentTimeEl.textContent = formatTime(video.currentTime);
    durationEl.textContent = formatTime(video.duration);

    if (video.duration) {
        const percent = video.currentTime / video.duration;
        progressFilled.style.transform = `scaleX(${percent})`;
    }

    if (video.buffered.length) {
        const bufferedEnd = video.buffered.end(video.buffered.length - 1);
        const percentBuffered = bufferedEnd / video.duration;
        bufferBar.style.transform = `scaleX(${percentBuffered})`;
    }
}

function seek(e) {
    const rect = progressBar.getBoundingClientRect();
    const pos = (e.clientX - rect.left) / rect.width;
    if (video.duration) {
        video.currentTime = pos * video.duration;
    }
}

// ====== Auto-hide Controls (giống Netflix) ======
let hideTimer;

function showControls() {
    controls.style.opacity = "1";
    clearTimeout(hideTimer);

    hideTimer = setTimeout(() => {
        if (!video.paused) controls.style.opacity = "0";
    }, 3000);
}

document.addEventListener("mousemove", showControls);
video.addEventListener("play", showControls);
video.addEventListener("pause", () => {
    controls.style.opacity = "1";
});

// ====== Events ======
playPauseBtn.addEventListener("click", togglePlay);
bigPlayBtn.addEventListener("click", togglePlay);
video.addEventListener("click", togglePlay);

video.addEventListener("play", updatePlayPauseIcon);
video.addEventListener("pause", updatePlayPauseIcon);

video.addEventListener("timeupdate", updateTime);
video.addEventListener("loadedmetadata", updateTime);
video.addEventListener("progress", updateTime);

muteBtn.addEventListener("click", toggleMute);

volumeSlider.addEventListener("input", (e) => {
    video.volume = parseFloat(e.target.value);
    video.muted = video.volume === 0;
    updateVolumeUI();
});

fullscreenBtn.addEventListener("click", toggleFullscreen);

progressBar.addEventListener("click", seek);

// Play/pause bằng SPACE
document.addEventListener("keydown", (e) => {
    if (e.code === "Space") {
        e.preventDefault();
        togglePlay();
    }
});

// ====== init ======
initHls();
updatePlayPauseIcon();
video.volume = 1;
updateVolumeUI();
showControls();