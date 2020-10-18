@extends('frontend')
@section('content')

<!-- Header -->
    <header id="header" class="alt">
				<div class="logo"><a href="/vitrine">Evitrine</a></div>
				<a href="#menu" ><i class="fas fa-bars"></i>Catégorie</a>
    </header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
                    @foreach($categories as $categorie)
                    <li><a href="/articles/categorie/{{ $categorie->id }}">{{$categorie->nomCat}}</a></li>
                    @endforeach
				</ul>
            </nav>

<!-- Banner -->
<section class="banner full">
				<article>
					<img src="/css/images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Des produits de qualité, à bas prix, sélectionnés pour vous</p>
							<h2>Ordinateurs</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="/css/images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Des produits de qualité, à bas prix, sélectionnés pour vous</p>
							<h2>Sport</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="/css/images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Des produits de qualité, à bas prix, sélectionnés pour vous</p>
							<h2>Electroménager</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
                    @foreach($articles as $article)
						<div>
							<div class="box ">
								<div class="image fit  ">
									<img src="{{ asset('/uploads/articles/' . $article->image) }}" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Catégorie</p>
										<h2>{{ $article->categorie->nomCat}}</h2>
									</header>
									<p>{{ $article->nomArt }}</p>
                                    <h5>{{ $article->pu }} Dhs</h5>
									<footer class="align-center">
										<a href="/article/{{ $article->id }}/detail" class="button alt">Détail</a>
									</footer>
								</div>
                            </div>
                            </br>
						</div>
                        @endforeach
					</div>
                </div>
                <div class="row ">
        <div class="col-md-12 d-flex justify-content-center">
            {!! $articles->render() !!}
        </div>
    </div>
            </section>



@endsection
