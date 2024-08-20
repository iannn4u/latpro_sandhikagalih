<?php
function get_CURL($url) {
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

return json_decode(get_CURL($result),  true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCZt8IYpBx9afDBxh_D1ud9w&key=AIzaSyBy7NG22el8djIC55OWIZ26G0rZb0_56Tk');
$youtubeProfile = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$youtubeTitle = $result['items'][0]['snippet']['title'];
$youtubeSubscribers = $result['items'][0]['statistics']['subscriberCount'];

$result = get_CURL('https://www.googleapis.com/youtube/v3/search?channelId=UCZt8IYpBx9afDBxh_D1ud9w&key=AIzaSyBy7NG22el8djIC55OWIZ26G0rZb0_56Tk&maxResults=1&order=date&part=snippet');
$idYoutube = $result['items'][0]['id']['videoId'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
      integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
      crossorigin="anonymous"
    />

    <!-- My CSS -->
    <style>
      section {
        min-height: 420px;
      }

      .img-thumbnails {
        width: 100px;
        height: 100px;
        float: left;
        overflow: hidden;
      }

      .img-thumbnails img {
        width: 100px;
      }
    </style>

    <title>My Portfolio</title>
  </head>
  <body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Alandrian Surya Tantra</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Portfolio</a>
            <a class="nav-item nav-link disabled" href="#">Contact</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <img
          src="img/profile1.png"
          width="25%"
          class="rounded-circle img-thumbnail"
        />
        <h1 class="display-4">Alandrian Surya Tantra</h1>
        <p class="lead">Selamat Datang di Teknik Informatika UNPAS.</p>
      </div>
    </div>

    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="col-md-5 text-center">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="social" class="social bg-light">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $youtubeProfile ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $youtubeTitle ?></h5>
                <p><?= $youtubeSubscribers ?> Subscribers.</p>
                <div class="g-ytsubscribe" data-channelid="UCZt8IYpBx9afDBxh_D1ud9w" data-layout="default" data-count="default"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $idYoutube ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnails">
                  <img src="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="portfolio" class="portfolio pb-4">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-4 pt-4">
            <h2>Portfolio</h2>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md">
            <div class="card">
              <img
                class="card-img-top"
                src="img/thumbs/1.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img
                class="card-img-top"
                src="img/thumbs/2.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img
                class="card-img-top"
                src="img/thumbs/3.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md">
            <div class="card">
              <img
                class="card-img-top"
                src="img/thumbs/4.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img
                class="card-img-top"
                src="img/thumbs/5.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img
                class="card-img-top"
                src="img/thumbs/6.png"
                alt="Card image cap"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact mb-5 bg-light">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex,
                  officiis.
                </p>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Location</li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Merdeka No.1</li>
              <li class="list-group-item">Jakarta, Indonesia</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" />
              </div>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea name="pesan" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Kirim pesan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-dark text-white text-center">
      <div class="container">
        <div class="row pt-3">
          <div class="col text-center">
            <p>Copyright 2024.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://apis.google.com/js/platform.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
      integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
      integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
