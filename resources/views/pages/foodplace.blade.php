<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body>
    <section class="offers">
      <div class="container">
        <div class="offer">
          <h1 class="w-medium">
            Get Your Daily Homemade Dishes <br />
            Delivered In Time
          </h1>
          <div class="btn btn-shadow-md btn-primary-outline btn-smooth">
            <p>Start Your Jornary With -20% Off</p>
          </div>
        </div>
        <div class="offer-banner">
          <img
            class="image-cover"
            src="{{asset('images/offer2.jpg')}}"
            alt="ladychef making noodles"
          />
        </div>
      </div>
    </section>
    <section class="foodplace">
      <div class="container">
        <aside id="filter_menu">
          <h4 class="w-medium c-heading">Filter by Cuisine</h4>
          <ul>
            <li><a href="#">Morocaan</a></li>
            <li><a href="#">Italien</a></li>
            <li><a href="#">France</a></li>
            <li><a href="#">asian</a></li>
          </ul>
          <h4 class="w-medium c-heading">Filter by Dietary Preferences</h4>
          <ul>
            <li><a href="#">Gluten-Free</a></li>
            <li><a href="#">Dairy-Free</a></li>
            <li><a href="#">Vegetarian</a></li>
            <li><a href="#">Vegan</a></li>
          </ul>
          <h4 class="w-medium c-heading">Filter by Price Range:</h4>
          <ul>
            <li><a href="#">$ - low</a></li>
            <li><a href="#">$$ - medium</a></li>
            <li><a href="#">$$$ - height</a></li>
          </ul>
          <h4 class="w-medium c-heading">Filter by Ratings:</h4>
          <ul>
            <li>
              <a href="#">
                <div>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                </div>
                <p class="c-body-soft xs">(5 stars)</p></a
              >
            </li>
            <li>
              <a href="#">
                <div>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded"> star </span>
                </div>
                <p class="c-body-soft xs">(4 stars and up)</p></a
              >
            </li>
            <li>
              <a href="#">
                <div>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded fill"> star </span>
                  <span class="material-symbols-rounded"> star </span>
                  <span class="material-symbols-rounded"> star </span>
                </div>
                <p class="c-body-soft xs">(3 stars and up)</p></a
              >
            </li>
          </ul>
          <h4 class="w-medium c-heading">Filter by Delivery Time</h4>
          <ul>
            <li><a href="#">Under 30 minuts</a></li>
            <li><a href="#">30-60 minuts</a></li>
            <li><a href="#">Over 60 minuts</a></li>
          </ul>
        </aside>
        <main>
          <div class="pram">
            <h2 class="w-medium c-heading">Our Special Dishes</h2>
            <div class="pagevue">
              <div class="icon-box">
                <span class="material-symbols-rounded fill"> grid_view </span>
              </div>
              <div class="icon-box">
                <span class="material-symbols-rounded"> view_list </span>
              </div>
              <div class="icon-box" id="filter_triger">
                <span class="material-symbols-rounded"> filter_alt </span>
                <p>Filter</p>
              </div>
            </div>
          </div>
          <div class="dishes">
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="{{asset('icons/hat-chef.png')}}"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="{{asset('icons/hat-chef.png')}}"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="{{asset('icons/hat-chef.png')}}"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="{{asset('icons/hat-chef.png')}}"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="{{asset('icons/hat-chef.png')}}"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="{{asset('icons/hat-chef.png')}}"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="assist/icons/hat-chef.png"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
            <div class="dish-card">
              <div class="dish-banner">
                <img
                  class="image-cover"
                  src="{{asset('images/pastila-fich.jpeg')}}"
                  alt="pastila-fich"
                />
              </div>
              <div class="dish-info">
                <h4 class="c-heading w-medium">Fish Pastila</h4>
                <p class="dish-price c-body-w-semibold">$54.20</p>
              </div>
              <p class="c-body-soft xs">
                this is a fish pastila maded by hand of worderfall moroccan chef
                white alot of love
              </p>
              <div class="leding">
                <div class="avatar">
                  <img
                    class="image-cover"
                    src="{{asset('images/avatar1.png')}}"
                    alt="avatar profile"
                  />
                </div>
                <p>Fatima Zahra</p>
                <div class="icon">
                  <img
                    class="image-cover"
                    src="{{asset('icons/hat-chef.png')}}"
                    alt="chef hat"
                  />
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </section>  
  </body>
</html>
