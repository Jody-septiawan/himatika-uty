<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMATIKA UTY</title>
    <style>
        body {
            background-color: black;
            margin: 0;
        }

        .large-header {
            position: relative;
            width: 100%;
            background: #111;
            overflow: hidden;
            background-size: cover;
            background-position: center center;
            z-index: 1;
        }

        .demo .large-header {
            background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo-bg.jpg");
        }

        .main-title {
            position: absolute;
            margin: 0;
            padding: 0;
            color: #F9F1E9;
            text-align: center;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }

        .demo .main-title {
            text-transform: uppercase;
            font-size: 4.2em;
            letter-spacing: 0.1em;
        }

        .main-title .thin {
            font-weight: 200;
        }

        @media only screen and (max-width: 768px) {
            .demo .main-title {
                font-size: 1em;
            }
        }

        .back {
            position: absolute;
            margin: 0;
            padding: 0;
            color: #F9F1E9;
            text-align: center;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            font-size: 20px;
            text-decoration: none;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container demo">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <h1 class="main-title"><span class="thin">under construction</span></h1>
                <a href="<?= base_url('') ?>">
                    <h5 class="back"> &#8592; back</h5>
                </a>
            </div>
        </div>
    </div>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js"></script>
</body>

</html>