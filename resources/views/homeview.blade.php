  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

   <header>
    <div class="logo">
      <img src="{{ asset('image/logo.png') }}" alt="logo">
    </div>
    <div class="middle-nav">
      <ul>
        <li><a href="#">Home</a></li>
      </ul>
    </div>
    <div class="my-space">
      <nav class="cv">
        
      <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('My space') }}
      </x-nav-link>
      </nav>
    </div>
  </header> 

    <section class="1">
      <div class="first-section">
        <div class="first">
          <h2>Construire son projet</h2>
          <p>Le but de ce projet a été de s'améliorer dans les technologies que nous ne maitrisons pas encore. En Laravel VueJs et css</p>
          <a href="#">Sign up</a>
        </div>
        <div class="second">
          <h2>Prendre des notes</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a href="#">Sign up</a>
        </div>
        <div class="third">
          <h2>Efficacité</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a href="#">Sign up</a>
        </div>
      </div>
    </section>
  
    <section class="2">
      <h2 class="titre">Par qui?</h2>
      <div class="second-section">
        <div class="card">
          <div class="card-image">
          </div>
          <div class="card-text">
            <h3>Yousef ABDELOUAHAB</h3>
            <p class="text-in-card">Développeur front-end sur le projet. Apprentissage d'un design simple en vuejs/css.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-image-2">
          </div>
          <div class="card-text">
            <h3>Ulysse YADAN</h3>
            <p class="text-in-card">Développeur back-end apprentissage de laravel et crud côté client via api avec vuejs et vuerouter</p>
          </div>
          <div class="card-stats-2">
          </div>
        </div>
        <div class="card">
          <div class="card-image-3">
          </div>
          <div class="card-text">
            <h3>Rayane CHELGHAF</h3>
            <p class="text-in-card">Chef d'équipe, devops. Utilisation d'outil comme trello pour la répartition des taches et la documentation</p>
          </div>
          <div class="card-stats-2">
          </div>
        </div>
      </div>
    </section>

<style scoped>
header {
  height: 10vh;
  display: flex;
  justify-content: center;
  justify-content: space-between;
  padding-right: 50px;
  padding-left: 50px;
  padding-top: 10px;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  margin-bottom: 50px;
}
header img{
  height: 8vh;
}
header ul li{
  display: inline;
  font-family: 'Lato', sans-serif!important;
  margin: 0 10px!important;
  font-size: 20px!important;
  padding: 0px 30px!important;
}
header a{
  text-decoration: none !important;
  margin: 0 10px!important;
  color: rgba(84, 84, 84, 0.65)!important;
  transition: 0.5s ease!important;
}
</style>