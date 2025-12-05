 
 
  
 <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="frontend/assets/css/plyr.css" />
  <link rel="stylesheet" href="frontend/assets/css/select2.min.css" />
  <link rel="stylesheet" href="backend/assets/css/admin.css" />
  <main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add new item</h2>
					</div>
				</div>
<form action="admin.php?page=saveMovie" method="post" enctype="multipart/form-data" class="form">
    
    <div class="row">
        <!-- Cột poster -->
        <div class="col-12 col-md-5 form__cover">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="form__img">
                        <label for="form__img-upload">Upload cover (190 x 270)</label>
                        <input id="form__img-upload" name="poster" type="file" accept=".png, .jpg, .jpeg">
                        <!-- Khi thêm mới có thể để ảnh mặc định -->
                        <img id="form__img" src="img/no-poster.png" alt="Poster">
                    </div>
                </div>
            </div>
        </div>

        <!-- Cột nội dung -->
        <div class="col-12 col-md-7 form__content">
            <div class="row">
                <!-- Title -->
                <div class="col-12">
                    <div class="form__group">
                        <input type="text" class="form__input" name="title" placeholder="Title" required>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <div class="form__group">
                        <textarea id="text" name="description" class="form__textarea"
                                  placeholder="Description" required></textarea>
                    </div>
                </div>

                <!-- Release year -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="form__group">
                        <input type="number" class="form__input" name="release_year"
                               placeholder="Release year" required>
                    </div>
                </div>

                <!-- Duration -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="form__group">
                        <input type="number" class="form__input" name="duration"
                               placeholder="Running time in minutes" required>
                    </div>
                </div>

                <!-- Quality -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="form__group">
                        <select class="js-example-basic-single" id="quality" name="quality">
                            <option value="FullHD">FullHD</option>
                            <option value="HD">HD</option>
                        </select>
                    </div>
                </div>

                <!-- Age limit -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="form__group">
                        <input type="number" class="form__input" name="age_limit"
                               placeholder="Age limit" required>
                    </div>
                </div>

                <!-- Countries (nhiều) -->
                <div class="col-12 col-lg-6">
                    <div class="form__group">
                        <select class="js-example-basic-multiple" id="country" name="countries[]" multiple>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="United States">United States</option>
                            <option value="Japan">Japan</option>
                            <!-- ... các country khác nếu muốn -->
                        </select>
                    </div>
                </div>

                <!-- Genres (nhiều) -->
                <div class="col-12 col-lg-6">
                    <div class="form__group">
                        <select class="js-example-basic-multiple" id="genre" name="genres[]" multiple>
                            <option value="Action">Action</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Drama">Drama</option>
                            <option value="Horror">Horror</option>
                            <option value="Romance">Romance</option>
                            <!-- ... -->
                        </select>
                    </div>
                </div>

                <!-- Gallery ảnh -->
                <div class="col-12">
                    <div class="form__gallery">
                        <label id="gallery1" for="form__gallery-upload">Upload photos</label>
                        <input data-name="#gallery1" id="form__gallery-upload"
                               name="gallery[]" class="form__gallery-upload"
                               type="file" accept=".png, .jpg, .jpeg" multiple>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item type -->
        <div class="col-12">
            <ul class="form__radio">
                <li><span>Item type:</span></li>
                <li>
                    <input id="type1" type="radio" name="type" value="movie" checked>
                    <label for="type1">Movie</label>
                </li>
                <li>
                    <input id="type2" type="radio" name="type" value="tv_show">
                    <label for="type2">TV Show</label>
                </li>
            </ul>
        </div>

        <!-- Video upload + link -->
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form__video">
                        <label id="movie1" for="form__video-upload">Upload video</label>
                        <input data-name="#movie1" id="form__video-upload"
                               name="movie_file" class="form__video-upload"
                               type="file" accept="video/mp4,video/x-m4v,video/*">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form__group form__group--link">
                        <input type="text" class="form__input" name="movie_link"
                               placeholder="or add a link">
                    </div>
                </div>  
                 <div class="col-12">
                    <button type="submit" class="form__btn">publish</button>
                </div>