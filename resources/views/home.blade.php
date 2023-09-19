@extends('layouts.app')

@section('content')

        <!--? slider Area Start-->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-target="#myCarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-target="#myCarousel" data-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-target="#myCarousel" data-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-700">
                <div class="carousel-item active img-banner">
                    <img src="{{asset('assets/img/gallery/banner1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item img-banner">
                    <img src="{{asset('assets/img/gallery/banner2.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item img-banner">
                    <img src="{{asset('assets/img/gallery/banner3.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
        
        <section class="imagen-light" style="z-index: 9 !important;">
            <i class="fas fa-times close"></i>
            <img src="./img/img-3.jpg" alt="" class="agregar-imagen">
        </section>
            </form>   
        <!--? Team Start -->
        <div class="team-area pb-180 bg-black section-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                        <div class="section-tittle text-center mb-100">
                            <span>Professional Teams</span>
                            <h2>Nuestros Artistas</h2>
                        </div>
                    </div>
                </div>
                <div class="row dot-style justify-content-center">
                    <!-- single Tem -->
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/zhimpa.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Zhimpa Moreno</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/darwin.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Darwin Enriquez</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/zhimpa.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Zhimpa Moreno</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/darwin.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Darwin Enriquez</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/zhimpa.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Zhimpa Moreno</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/darwin.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Darwin Enriquez</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/zhimpa.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Zhimpa Moreno</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 p-4">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/darwin.jpg" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Master Tattoo</span>
                                <h3><a href="#">Darwin Enriquez</a></h3>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme p-4">
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-galeria" src="assets/img/gallery/tattoo3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        <!--? Gallery Area Start -->
        <div class="gallery-area bg-black">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span>Nuestra galería de imagenes</span>
                            <h2>Algunas imágenes de nuestro Tattoo</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/galle1.jpg);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/galle2.jpg);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/galle3.jpg);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/galle4.jpg);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/galle5.jpeg);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/galle6.jpg);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!-- Cut Details Start -->
        <div class="cut-details section-bg section-padding2 bg-black" data-background="assets/img/gallery/banner10.jpg">
           <div class="container">
            <div class="cut-active dot-style">
                <div class="single-cut">
                    <div class="cut-icon mb-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                            <image  x="0px" y="0px" width="50px" height="50px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                        </svg>
                    </div>
                    <div class="cut-descriptions">
                        <p>Vestibulum varius, velit sit amet tempor efficitur, ligula mi lacinia libero, vehicula dui nisi eget purus. Integer cursus nibh non risus maximus dictum. Suspendis.</p>
                        <span>JONT NICOLIN KOOK</span>
                    </div>
                </div>
                <div class="single-cut">
                    <div class="cut-icon mb-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                            <image  x="0px" y="0px" width="50px" height="50px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                        </svg>
                    </div>
                    <div class="cut-descriptions">
                        <p>Vestibulum varius, velit sit amet tempor efficitur, ligula mi lacinia libero, vehicula dui nisi eget purus. Integer cursus nibh non risus maximus dictum. Suspendis.</p>
                        <span>JONT NICOLIN KOOK</span>
                    </div>
                </div>
                <div class="single-cut">
                    <div class="cut-icon mb-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                            <image  x="0px" y="0px" width="50px" height="50px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                        </svg>
                    </div>
                    <div class="cut-descriptions">
                        <p>Vestibulum varius, velit sit amet tempor efficitur, ligula mi lacinia libero, vehicula dui nisi eget purus. Integer cursus nibh non risus maximus dictum. Suspendis.</p>
                        <span>JONT NICOLIN KOOK</span>
                    </div>
                </div>
            </div>
           </div>
        </div>
        
@endsection
@push('css')
<link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
@endpush
@push('javascript')
<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<script>
var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 5000,
  wrap: true
})

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

//IMAGEN TOTAL
const imagenes = document.querySelectorAll('.img-galeria');
const imagenesLight = document.querySelector('.agregar-imagen');
const contenedorLight = document.querySelector('.imagen-light');

imagenes.forEach(imagen =>{
    imagen.addEventListener('click', ()=>{
        aparecerImagen(imagen.getAttribute('src'))
    
    })
})

contenedorLight.addEventListener('click', (e) =>{
    if(e.target !== imagenesLight){
        contenedorLight.classList.remove('show');
        imagenesLight.classList.remove('showImage'); 
    }
})

const aparecerImagen = (imagen) =>{
    imagenesLight.src = imagen;
    contenedorLight.classList.add('show');
    imagenesLight.classList.add('showImage');
}
//FIN IMAGEN TOTAL

</script>
@endpush
