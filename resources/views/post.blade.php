@extends('template')

@section('content')


<main class="pb-5">
  <header class="jumbotron main-header">
    <h1 class="display-4">Accueil du blog</h1>
    <p class="lead">Les derniers articles postés</p>
    <hr class="my-4">
    <p>Récupération des 10 derniers articles du blog classés par ordre antéchronologique</p>
    <a class="btn btn-dark" href="https://sql.sh/cours/select"><i class="fa fa-external-link-alt" aria-hidden="true"></i> SQL SELECT</a>
    <a class="btn btn-dark" href="https://sql.sh/cours/jointures/inner-join"><i class="fa fa-external-link-alt" aria-hidden="true"></i> SQL INNER JOIN</a>
    <a class="btn btn-dark" href="https://sql.sh/cours/order-by"><i class="fa fa-external-link-alt" aria-hidden="true"></i> SQL ORDER BY</a>
    <a class="btn btn-dark" href="https://sql.sh/cours/limit"><i class="fa fa-external-link-alt" aria-hidden="true"></i> SQL LIMIT</a>
    <a class="btn btn-dark" href="https://sql.sh/fonctions/date_format"><i class="fa fa-external-link-alt" aria-hidden="true"></i> SQL DATE_FORMAT()</a>
    <a class="btn btn-dark" href="https://sql.sh/fonctions/substring"><i class="fa fa-external-link-alt" aria-hidden="true"></i> SQL SUBSTRING()</a>
  </header>

  <section class="container-fluid">
    <h2 class="text-center">Les nouvelles de Tante URSULE</h2>
    <div class="d-lg-flex flex-wrap p-2">
    @foreach($posts as $post)
        <article class="card shadow m-2 d-flex flex-column">
          <header class="card-header bg-warning flex-grow-1">
            <h3 class="h4">
              <a
                class="text-white font-weight-bold"
                href="show_post.php?id="
                title="Consulter l'article">
             
              </a>
            </h3>
        
            <p class="m-0">
                Dans la catégorie : 
                
                <strong class="badge badge-dark">
                {{$post-> category->category}}
                </strong>
            </p>
          </header>
          <div class="card-body flex-grow-0 bg-light text-dark">
            <div class="card-text">
            {{substr($post-> content,1,50)}}
               [...]
            </div>
            <p class="mt-5 card-text text-right">
              <a
              class="btn btn-warning"
              href="/post/{{$post->id}}"
               
              title="Consulter l'article">Lire la suite</a>
            </p>
          </div>
          <footer class="card-footer text-white bg-secondary small">
            Rédigé par
              <strong>
              {{$post-> author->firstname}} {{$post-> author->lastname}}
              </strong>
            le
            <time
              datetime="">
              {{ \Carbon\Carbon::create($post-> created_at)->diffForHumans()}}
            </time>
          </footer>
        </article>
        @endforeach
     
    </div><!-- Fin row -->
    {{$posts->links()}}
  </section>

</main>


@endsection