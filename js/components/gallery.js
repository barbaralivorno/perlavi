import Component from "hd-components/component";
import Slider from "hd-components/slider";

class Gallery extends Component {
  setup() {
    this.handleIntersection = this.handleIntersection.bind(this);

    this.$slider = this.$find("slider");

    this.slider = new Slider(this.$slider, {
      contain: true,
      wrapAround: false,
      autoPlay: true,
      dots: this.$slider.find(".gallery__slider-slide").length > 1,
      dotsClass: "gallery__slider-dots",
      arrows: this.$slider.find(".gallery__slider-slide").length > 1,
      arrowsClass: "gallery__slider-arrows",
    });

    this.$slider
      .get(0)
      .style.setProperty(
        "--dots-width",
        `${this.$slider.find(".gallery__slider-dots").outerWidth()}px`
      );

    this.observer = new IntersectionObserver(this.handleIntersection, {
      threshold: 0.5,
    });
  }

  listen() {
    const $videos = this.$slider.find(".media.media--video video");
    $videos.on("playing", () => {
      this.slider.$slider.flickity("stopPlayer");
    });
    $videos.on("ended", () => {
      this.slider.$slider.flickity("next");
      this.slider.$slider.flickity("playPlayer");
    });
    this.observer.observe(this.$slider.get(0));
  }

  slideIsVideo() {
    const currentSlide = this.slider.$slider.data("flickity").selectedElement;
    return currentSlide.firstElementChild.classList.contains("media--video");
  }

  handleIntersection(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !this.slideIsVideo()) {
        // slider is in the viewport
        this.slider.$slider.flickity("playPlayer");
      } else {
        // slider is out of the viewport
        this.slider.$slider.flickity("stopPlayer");
      }
    });
  }
}

Gallery.slug = "gallery";

export default Gallery;
