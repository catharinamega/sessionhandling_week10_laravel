@extends('shared/base')

@section('judul','.::Home::.')

@section('navigasi')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="index2">ISB</a>
    <h2 style="color: white;">Selamat Datang {{ session('nama') }}
    </h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>


        </ul>
    </div>
</nav>
<!-- LAYOUTING -->
  <!-- about -->
  <section id="about" class="about">

<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h2>About</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <p class="text-justify">
        My name is Catharina Mega. I am 19 years old. I graduated from St. Albert High School. I live in Banyuwangi. My hobbies are eat, sleep, and complain about life. My passion is laughing on my pressure. College is stressful but not really but i'm lazy so ya whatever.
        I do like drawing but somehow i prefer money. I'm not religious but despite those weird sect, i rather sit in church and sleep. I've been schooled in Catholic Academic so I guess no regret. Still, I hate charismatic song.
        Beside this column, I wrote some quotes which are inspired from movies. I only watch sorta satyr-independent-comedy movies/serials, unless their jokes aren't flat. This all from me. Thank you.
      </p>
    </div>
    <div class="col-md-6">
      <p class="text-justify">
        "There's no such thing as bad guy or good guy. Everyone tries doin more good and less bad" <br/>
        "Don't ask me how am i doin, coz I'm actually messed up " <br/>
        "Yeah, it's always someone's fault, right?" <br/>
        "God gave my enemies two ears and me only one mouth after all" <br/>
        "One list of responsibility and a gallon of tears" <br/>
        "I used to be happy, i mean unrecognized" <br/>
        "Break a leg, bless u a luck but don't break anyone's leg"<br/>
      </p>
    </div>
  </div>
</div>

</section>
@endsection