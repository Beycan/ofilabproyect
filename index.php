
  <?php include 'template/header.php' ?>
  <style>
  .cont {
    position: relative;
    width: 50%;
  }

  .image {
    display: block;
    width: 100%;
    height: auto;
  }

  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: #008CBA;
    background-color: #008CBA;
    background-color: #008CBA;
    background-color: #008CBA;
  }

  .cont:hover .overlay {
    opacity: 1;
  }

  .text {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }
  </style>
    <section>
        <div class="container">
          <div class="slider" style="width: 100%; height: 300px">

          </div>
          <div class="grid-container col-3">
            <div>
              <img src="images/slide7.jpg" alt="">
            </div>
            <div>
              <img src="images/slider8.jpg" alt="">
            </div>
            <div>
              <img src="images/slider9.jpg" alt="">
            </div>
          </div>


          <h2>Fade in Overlay</h2>

            <div class="cont">
              <img src="images/slide7.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text">Hello World</div>
              </div>
            </div>

        </div>
    </section>
    <?php include 'template/footer.php' ?>
  </body>
</html>
