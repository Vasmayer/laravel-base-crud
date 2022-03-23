<div class="card" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}" class="img-fluid">
    <div class="card-body">
      <p class="card-text">
        <ul>
            <li><strong>Serie:</strong> {{$comic->series}}</li>
            <li><strong>Data di rilascio:</strong> {{$comic->sale_date}}</li>
            <li><strong>Tipo:</strong> {{$comic->type}}</li>
            <li><strong>Prezzo:</strong> {{$comic->price}}</li>
        </ul>
      </p>
    </div>
</div>