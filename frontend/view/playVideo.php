<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512‑<hash>" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .plyr__control {
            background-color: rgba(0, 0, 0, 0.7) !important;
            border-radius: 5px;
        }

        .plyr__control:hover {
            background-color: rgba(0, 0, 0, 0.9) !important;
        }

        .plyr__progress--played {
            background-color: #ff4081 !important;
        }

        .plyr__progress {
            height: 8px;
            background-color: rgba(255, 255, 255, 0.3);
        }


        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 10;
            display: block;

        }

        .back-btn:hover {
            background-color: rgba(0, 0, 0, 0.9);
        }

        .plyr__control--overlaid {
            background: rgba(0, 0, 0, 0.7);
        }

        .fa-solid {
            width: 24px;
            height: 24px;
            fill: white;
        }
    </style>
</head>

<body>


    <button class="back-btn" id="backBtn">
        <i class="fa-solid fa-arrow-left-long"></i>
    </button>

    <div class="video-container">
        <video id="player" preload="auto">
            <source src="<?= $playVideo['video_url'] ?>" type="video/mp4; codecs=avc1.42E01E, mp4a.40.2" />

        </video>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.polyfilled.js"></script>

    <script>
        const player = new Plyr('#player', {
            autoplay: false, // Tắt autoplay
            controls: ['play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen'],
            fullscreen: {
                enabled: true,
                fallback: true
            },
        });


        const backBtn = document.getElementById('backBtn');


        player.on('enterfullscreen', () => {
            backBtn.style.display = 'none';
        });


        player.on('exitfullscreen', () => {
            backBtn.style.display = 'block';
        });


        player.on('play', () => {
            backBtn.style.display = 'none';
        });

        player.on('pause', () => {
            backBtn.style.display = 'block';
        });


        backBtn.addEventListener('click', () => {
            window.history.back();
        });
    </script>

</body>

</html>