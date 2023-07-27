<!--index.php-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Networks API's</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GoogleFonts -->
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

      <!--Facebook code-->
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0" nonce="mS36aovs"></script>

      <div class="jumbotron">
          <div class="container-fluid">
              <h1>Join us and build Freedom</h1>
              <p>We make freedom, we love freedom, we spread freedom.</p>
          </div>

          <form class="form-horizontal">
              <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-8">
                      <input type="email" id="email" placeholder="Your Email" class="form-control">

                  </div>
              </div>
              <div class="form-group">
                  <div class="col-xs-offset-3 col-xs-6">
                      <input type="submit" id="submit" value="Subscribe" class="btn btn-info btn-lg">


                  </div>
              </div>

          </form>

          <div class="row">
              <!--facebook button-->
              <div class="col-sm-offset-3 col-sm-2">

                    <!-- CHANGE THE URL TO HOSTING -->
                  <div class="fb-like" data-href="https://C:\Users\27677\OneDrive\Desktop\Tshepiso\Projects\APIs\Webpage with Social Widget\index.php" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
              </div>

              <!--Twitter button-->
              <div class="col-sm-2">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <a href="https://twitter.com/tr_tshepiso?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @tr_tshepiso</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>              </div>
          </div>

          <!--Twitter timeline-->
          <div>

            <!-- CHANGE PROFILE -->
            <a class="twitter-timeline" href="https://twitter.com/{screen_name}/lists/{slug}">
            Tweets from https://twitter.com/{screen_name}/lists/{slug}
            </a>
          </div>
      </div>

            <!--Twitter-->
      <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwJ2Vepe9L2Miuh7QH87SR_RItIXHlX6Q&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
