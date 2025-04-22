<script>
  let BACKGROUND_COLOR = "#232737";
  // let IMG_SRC = "<?php echo get_stylesheet_directory_uri(); ?>/images/loader-tipddy.png";
  let IMG_SRC = "<?php echo get_stylesheet_directory_uri(); ?>/images/log-tv33.png";
  let CONTAINER_STYLES = {
    position: "absolute",
    top: "0",
    bottom: "0",
    left: "0",
    right: "0",
    zIndex: 1000,
    display: "flex",
    justifyContent: "center",
    alignItems: "center",
    backgroundColor: BACKGROUND_COLOR,
  };
  let LOGO_STYLES = {
    width: "360px",
    height: 'auto',
    opacity: "1",
  };
  let isCompleted = false;
  const query = (selector) => document.querySelector(selector);
  const mount = (selector, styles = {}) => {
    let css = Object.entries(styles);
    let element = document.createElement(selector);
    if (css.length > 0) {
      css.forEach((entry) => {
        // console.log(entry);
        let key = entry[0];
        let value = entry[1];
        element.style[key] = value;
      });
    }
    return element;
  };
  const body = query("body");
  const fadeout = (element) => {
    let opacity = 1;
    let interval = setInterval(() => {
      element.style.opacity = opacity;
      opacity -= 0.02;
      if (opacity < 0.01) {
        clearInterval(interval);
        isCompleted = true;
      }
    }, 15);
  };
  const wider = (element) => {
    let width = 360
    let interval = setInterval(() => {
      element.style.width = width;
      width += 3
      if (width > 1000) {
        clearInterval(interval);
        return fadeout(element);
      }
    }, 15);
  }
  const fader = (element) => {
    let opacity = 0;
    let interval = setInterval(() => {
      element.style.opacity = opacity;
      opacity += 0.01;
      if (opacity > 1) {
        clearInterval(interval);
        return fadeout(element);
      }
    }, 15);
  };

  function createLoader() {
    let img = mount("img", LOGO_STYLES);
    let container = mount("div", CONTAINER_STYLES);
    let interval = setInterval(() => {
      if (isCompleted) {
        fadeout(container);
        document.getElementById('tv-content').style.display = 'unset'
        setTimeout(() => {
          body.removeChild(container);
        }, 2000);
        clearInterval(interval);
        return;
      }
    }, 500);
    img.src = IMG_SRC;
    container.appendChild(img);
    fader(img);
    wider(img);
    body.appendChild(container);
  }
  createLoader();
</script>