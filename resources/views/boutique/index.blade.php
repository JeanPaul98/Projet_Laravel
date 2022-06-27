@extends('home')
@section('content')
 <div class="album py-5 bg-light">
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach ($produits as $produit) 
        <div class="col-md-3">
                    <div class="card mb-3 box-shadow">
                        <img src="{{asset('img/'.$produit->photo_principale)}}" class="card-img-top img-fluid" alt="Responsive image">
                        <div class="card-body">
                            <p class="card-text">{{$produit->nom}} <br> {{$produit->description}} <br>
                                  <span class="badge badge-success">
                                     <a class="text-light" href="{{route('voir_produit_par_cat',['id'=>$produit->categories->id])}}">{{$produit->categories->nom}}</a>
                                  </span>  
                             </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{ number_format($produit->prix_ht)}} francs</span>
                                <a href="{{ route('voir_produit',['id'=>$produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
      @endforeach
      </div>
    </div>
  </div> 
@endsection