<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    
    <link rel="stylesheet" href="admin/magnific-popup.css" />
    <link rel="stylesheet" href="admin/owl.carousel.min.css" />
    <link rel="stylesheet" href="admin/plyr.css" />
    <link rel="stylesheet" href="admin/select2.min.css" />
    <link rel="stylesheet" href="admin/admin.css">

     <link
      rel="icon"
      type="image/png"
      href="https://flixtv.volkovdesign.com/admin/icon/favicon-32x32.png"
      sizes="32x32"
    />
    <link
      rel="apple-touch-icon"
      href="https://flixtv.volkovdesign.com/admin/icon/favicon-32x32.png"
    />
    
    <style id="smooth-scrollbar-style">
      [data-scrollbar] {
        display: block;
        position: relative;
      }

      .scroll-content {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }

      .scrollbar-track {
        position: absolute;
        opacity: 0;
        z-index: 1;
        background: rgba(222, 222, 222, 0.75);
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-transition: opacity 0.5s 0.5s ease-out;
        transition: opacity 0.5s 0.5s ease-out;
      }
      .scrollbar-track.show,
      .scrollbar-track:hover {
        opacity: 1;
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
      }

      .scrollbar-track-x {
        bottom: 0;
        left: 0;
        width: 100%;
        height: 8px;
      }
      .scrollbar-track-y {
        top: 0;
        right: 0;
        width: 8px;
        height: 100%;
      }
      .scrollbar-thumb {
        position: absolute;
        top: 0;
        left: 0;
        width: 8px;
        height: 8px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 4px;
      }
    </style>
</head>
<body>
    <!-- main content -->
    <main class="main">
      <div class="container-fluid">
        <div class="row">
          <!-- main title -->
          <div class="col-12">
            <div class="main__title">
              <h2>Dashboard</h2>

              <a
                href="https://flixtv.volkovdesign.com/admin/add-item.html"
                class="main__title-link"
                >add item</a
              >
            </div>
          </div>
          <!-- end main title -->

          <!-- stats -->
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stats">
              <span>Unique views this month</span>
              <p>5 678</p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"
                ></path>
              </svg>
            </div>
          </div>
          <!-- end stats -->

          <!-- stats -->
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stats">
              <span>Items added this month</span>
              <p>172</p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M10,13H4a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,19H5V15H9ZM20,3H14a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,20,3ZM19,9H15V5h4Zm1,7H18V14a1,1,0,0,0-2,0v2H14a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V18h2a1,1,0,0,0,0-2ZM10,3H4A1,1,0,0,0,3,4v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,10,3ZM9,9H5V5H9Z"
                ></path>
              </svg>
            </div>
          </div>
          <!-- end stats -->

          <!-- stats -->
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stats">
              <span>New comments</span>
              <p>2 573</p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,11ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"
                ></path>
              </svg>
            </div>
          </div>
          <!-- end stats -->

          <!-- stats -->
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="stats">
              <span>New reviews</span>
              <p>1 021</p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                ></path>
              </svg>
            </div>
          </div>
          <!-- end stats -->

          <!-- dashbox -->
          <div class="col-12 col-xl-6">
            <div class="dashbox">
              <div class="dashbox__title">
                <h3>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                      d="M12,6a1,1,0,0,0-1,1V17a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6ZM7,12a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V13A1,1,0,0,0,7,12Zm10-2a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V11A1,1,0,0,0,17,10Zm2-8H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"
                    ></path>
                  </svg>
                  Top items
                </h3>

                <div class="dashbox__wrap">
                  <a
                    class="dashbox__refresh"
                    href="https://flixtv.volkovdesign.com/admin/index.html#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"
                      ></path></svg
                  ></a>
                  <a    
                    class="dashbox__more"
                    href="https://flixtv.volkovdesign.com/admin/catalog.html"
                    >View All</a
                  >
                </div>
              </div>

              <div
                class="dashbox__table-wrap dashbox__table-wrap--1"
                data-scrollbar="true"
                tabindex="-1"
                style="overflow: hidden; outline: none"
              >
                <div class="scroll-content">
                  <table class="main__table main__table--dash">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>CATEGORY</th>
                        <th>RATING</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
</body>
</html>